<?php
// your existing PHP code (examconfig.php, session_start, etc.)
require_once "examconfig.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form was submitted

    $response = array();

    if (isset($_POST['save11'])) {
        $name1 = $_POST['name'];
        $nq1 = $_POST['nq'];
        $tm1 = $_POST['tm'];
        $ns1 = $_POST['ns'];

        // Perform your data insertion logic
        $qry = mysqli_query($conn, "insert into examdetails(ex_name, ex_tques, ex_time, ex_nsec) values('$name1','$nq1','$tm1','$ns1')") or die(mysqli_error($conn));

        if ($name1 == '' || $nq1 == '' || $tm1 == '' || $ns1 == '') {
            $response['success'] = false;
        } else {
            $response['success'] = true;
            // Additional logic if needed
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
