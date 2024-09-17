<?php

// Start the session if it's not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include_once("../classes/connection.php");

// Create an instance of the Database class
$database = new Database();
$pdo = $database->connect(); // Call the connect method to establish the connection

if (!$pdo) {
    die("PDO connection not established.");
}

// Function to insert new multiple choice question
function insertNewMultipleChoiceQuestion($pdo, $newQuestion) {
    try {
        // Start building the SQL query
        $query = "INSERT INTO multiple_choice_questions (quiz_id, question, options, correct_answer, time_limit, num_quiz, mcq_total_points, points_per_item)";
        $values = "VALUES (:quiz_id, :question, :options, :correct_answer, :time_limit, :num_quiz, :mcq_total_points, :points_per_item)";
        
        // Prepare the statement
        $stmt = $pdo->prepare($query);

        // Bind the parameters dynamically
        $stmt->bindParam(':quiz_id', $newQuestion['quiz_id']);
        $stmt->bindParam(':question', $newQuestion['question']);
        $stmt->bindParam(':options', $newQuestion['options']); // Assuming options is a JSON string
        $stmt->bindParam(':correct_answer', $newQuestion['correct_answer']);
        $stmt->bindParam(':time_limit', $newQuestion['time_limit']);
        $stmt->bindParam(':num_quiz', $newQuestion['num_quiz']);
        $stmt->bindParam(':mcq_total_points', $newQuestion['mcq_total_points']);
        $stmt->bindParam(':points_per_item', $newQuestion['points_per_item']);
        
        // Execute the statement
        if (!$stmt->execute()) {
            throw new Exception("Database error: " . implode(", ", $stmt->errorInfo()));
        } else {
            return ['success' => true, 'message' => "The multiple choice question was added successfully."];
        }
    } catch (Exception $e) {
        return ['success' => false, 'message' => "Error inserting new question: " . addslashes($e->getMessage())];
    }
}

// Check if the request is a POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you are receiving this data from a form
    $newQuestion = [
        'quiz_id' => $_POST['quiz_id'] ?? null, // Use null if not set
        'question' => $_POST['question'] ?? null,
        'options' => json_encode($_POST['options'] ?? []), // Convert options to JSON; defaults to empty array
        'correct_answer' => $_POST['correct_answer'] ?? null,
        'time_limit' => $_POST['time_limit'] ?? null,
        'num_quiz' => $_POST['num_quiz'] ?? null,
        'mcq_total_points' => $_POST['mcq_total_points'] ?? null,
        'points_per_item' => $_POST['points_per_item'] ?? null
    ];

    // Check if $pdo is valid before calling the function
    if ($pdo) {
        // Insert the new question and capture the success status
        $result = insertNewMultipleChoiceQuestion($pdo, $newQuestion);
        
        // Generate the HTML page with an alert message (no JSON response needed)
        if ($result['success']) {
            // On success
            echo "<script>alert('Success: " . $result['message'] . "');</script>";
        } else {
            // On failure
            echo "<script>alert('Error: " . $result['message'] . "');</script>";
        }

        // Optionally redirect after the alert
        echo "<script>window.location.href='your_redirection_page.php';</script>";
    } else {
        echo "<script>alert('Database connection failed.');</script>";
        echo "<script>window.location.href='your_redirection_page.php';</script>";
    }
    exit;
}
?>
