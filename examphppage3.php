<?php
require_once "examconfig.php";

if (isset($_POST['t_id'])) {
    $t_id = $_POST['t_id']; 

    $sql = "SELECT * FROM technical WHERE t_id = $t_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        echo json_encode($data);
    } else {
        echo "No more data found or invalid t_id.";
    }
} else {
    echo "No t_id provided in the request.";
}

$conn->close();
?>
