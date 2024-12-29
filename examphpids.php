<?php
// Include your database connection code here
require_once "examconfig.php";
$response = array();

// Query to get the count from Table1
$query1 = "SELECT ap_id as count1 FROM aptitude";
$result1 = mysqli_query($connection, $query1);

if ($result1) {
    $row1 = mysqli_fetch_assoc($result1);
    $response['count1'] = $row1['count1'];
} else {
    $response['error1'] = mysqli_error($connection); // Add this line to get the specific error message
}
// Query to get the count from Table2


$query2 = "SELECT r_id as count2 FROM reasoning";
$result2 = mysqli_query($connection, $query2);

if ($result2) {
    $row2 = mysqli_fetch_assoc($result2);
    $response['count2'] = $row2['count2'];
} else {
    $response['error1'] = mysqli_error($connection); // Add this line to get the specific error message
}

$query3 = "SELECT v_id as count3 FROM verbal";
$result3 = mysqli_query($connection, $query3);

if ($result3) {
    $row3 = mysqli_fetch_assoc($result3);
    $response['count3'] = $row3['count3'];
} else {
    $response['error1'] = mysqli_error($connection); // Add this line to get the specific error message
}
$query4 = "SELECT t_id as count4 FROM technical";
$result4 = mysqli_query($connection, $query4);

if ($result4) {
    $row4 = mysqli_fetch_assoc($result4);
    $response['count4'] = $row4['count4'];
} else {
    $response['error1'] = mysqli_error($connection); // Add this line to get the specific error message
}
// Add more queries for other tables as needed

// Send the JSON response
echo json_encode($response);

// Close the database connection
mysqli_close($connection);
?>
