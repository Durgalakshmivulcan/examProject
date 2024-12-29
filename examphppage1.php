<?php
require_once "examconfig.php";

if (isset($_POST['r_id'])) {
    $r_id = $_POST['r_id']; // Corrected variable name

    // SQL query to fetch data based on r_id
    $sql = "SELECT * FROM reasoning WHERE r_id = $r_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch data as an associative array
        $data = $result->fetch_assoc();

        // Output data as JSON
        echo json_encode($data);
    } else {
        echo "No more data found or invalid r_id.";
    }
} else {
    echo "No r_id provided in the request.";
}

$conn->close();
?>
