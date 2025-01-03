<?php
require_once "examconfig.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $question_id = $_POST['question_id'];
    $answer_id = $_POST['answer_id'];
    $user_id = $_SESSION['main_id1'];

    // Check if an answer already exists for the user and question
    $existingAnswerQuery = "SELECT * FROM answerstable WHERE u_id = ? AND question_id = ?";
    $stmt = $conn->prepare($existingAnswerQuery);
    $stmt->bind_param("ii", $user_id, $question_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Update the existing answer
        $updateAnswerQuery = "UPDATE answerstable SET answer_id = ? WHERE u_id = ? AND question_id = ?";
        $updateStmt = $conn->prepare($updateAnswerQuery);
        $updateStmt->bind_param("sii", $answer_id, $user_id, $question_id);
        $updateStmt->execute();

        $response = array("status" => "success", "message" => "Answer updated successfully");
    } else {
        // Insert a new answer
        $insertAnswerQuery = "INSERT INTO answerstable (u_id, question_id, answer_id) VALUES (?, ?, ?)";
        $insertStmt = $conn->prepare($insertAnswerQuery);
        $insertStmt->bind_param("iis", $user_id, $question_id, $answer_id);
        $insertStmt->execute();

        $response = array("status" => "success", "message" => "Answer saved successfully");
    }

    $stmt->close();
    $conn->close();

    echo json_encode($response);
} else {
    // Handle invalid request method
    http_response_code(400);
    echo json_encode(array("status" => "error", "message" => "Invalid request method"));
}
?>
