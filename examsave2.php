<?php
// your existing PHP code (examconfig.php, session_start, etc.)

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form was submitted
    require_once "examconfig.php";
    $response = array();

    if (isset($_POST['save2'])) {
        $candname = $_POST['name1'];
        $candid = $_POST['nq1'];

        if ($candname == '' || $candid == '') {
            $response['success'] = false;
            $response['message'] = "Please enter all input fields!";
        } else {
            $Getname1 = mysqli_query($conn, "SELECT * FROM userlogin WHERE u_status='1'") or die(mysqli_error($conn));
            $resdetails3 = mysqli_fetch_object($Getname1);
            $candname1 = $resdetails3->u_name;
            $candid1 = $resdetails3->u_id;
            $marks = 0;

            if ($candname1 == $candname && $candid1 == $candid) {
                $Getname2 = mysqli_query($conn, "SELECT * FROM answerstable WHERE u_id='$candid1'") or die(mysqli_error($conn));

                while ($resdetails4 = mysqli_fetch_object($Getname2)) {
                    $qnum = $resdetails4->question_id;
                    $answer = $resdetails4->answer_id;
                    $Getname3 = mysqli_query($conn, "SELECT * FROM examkey WHERE kquestion_id='$qnum' and key_ans='$answer'") or die(mysqli_error($conn));
                    $count = mysqli_num_rows($Getname3);

                    if ($count == 1) {
                        $marks++;
                    }
                }
            }

            $totalmarks = $marks;
            $response['success'] = true;
            $response['totalmarks'] = $totalmarks;
        }
    } else {
        // Handle other form submissions if any
        $response['success'] = false;
    }

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Handle other HTTP methods or direct access to the PHP file
    header("HTTP/1.0 405 Method Not Allowed");
    echo "Method Not Allowed";
}
?>
