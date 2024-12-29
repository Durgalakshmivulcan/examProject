<?php
require_once "examconfig.php";

if (isset($_POST['v_id'])) {
    $v_id = $_POST['v_id']; 

    
    $sql = "SELECT * FROM verbal WHERE v_id = $v_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        echo json_encode($data);
    } else {
        echo "No more data found or invalid v_id.";
    }
} else {
    echo "No v_id provided in the request.";
}

$conn->close();
?>
