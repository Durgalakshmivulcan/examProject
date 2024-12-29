<?php
require_once "examconfig.php";

// Check if ap_id is provided in the POST request
if (isset($_POST['ap_id'])) {
    $ap_id = $_POST['ap_id'];

    // SQL query to fetch data based on ap_id
    $sql = "SELECT * FROM aptitude WHERE ap_id = $ap_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch data as an associative array
        $data = $result->fetch_assoc();

        // Output data as JSON
        echo json_encode($data);
    } else {
        echo "No more data found or invalid ap_id.";
    }
} else {
    echo "No ap_id provided in the request.";
}

$conn->close();
?>


