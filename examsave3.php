<?php
// your existing PHP code (examconfig.php, session_start, etc.)
require_once "examconfig.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form was submitted

    $response = array();

    if (isset($_POST['save3'])) {
        $quesnum = $_POST['nq2'];
        $anss = $_POST['ans'];

        if ($quesnum == '' || $anss == '') {
            $response['success'] = false;
            $response['message'] = "Please enter all input fields!";
        } else {
            $qry = mysqli_query($conn, "INSERT INTO examkey(question_id, key_ans) VALUES ('$quesnum', '$anss')") or die(mysqli_error($conn));
            $response['success'] = true;
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
