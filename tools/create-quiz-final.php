<?php
session_start();
include '../include/db_connection.php'; // Adjust to your database connection file

// Retrieve data from session
$quizSubject = $_SESSION['quizSubject'];
$quizTitle = $_SESSION['quizTitle'];
$quizDescription = $_SESSION['quizDescription'];

// Insert data into the database
$sql = "INSERT INTO quizzes (title, subject, description) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $quizTitle, $quizSubject, $quizDescription);

if ($stmt->execute()) {
    // Clear session data if successful
    session_unset();
    session_destroy();
    echo "Quiz created successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the database connection
$stmt->close();
$conn->close();
?>
