<?php
// Start session
session_start();

// Include the database connection file
require_once('../include/extension_links.php');
include ("../classes/connection.php"); // Include your database connection here

// Instantiate the Database class and get the connection
$db = new Database();
$conn = $db->connect();

// Check if the creation_id is set in the session
if (!isset($_SESSION['creation_id'])) {
    header('Location: login.php'); // Redirect if not logged in
    exit();
}

$creation_id = $_SESSION['creation_id'];

// Prepare SQL query to fetch user information
$query = "SELECT CONCAT(first_name, ' ', middle_name, ' ', last_name) AS full_name, email FROM academai WHERE creation_id = :creation_id";

try {
    // Prepare the query
    $stmt = $conn->prepare($query);
    // Bind the creation_id parameter
    $stmt->bindParam(':creation_id', $creation_id, PDO::PARAM_INT);
    // Execute the query
    $stmt->execute();

    // Fetch user data
    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $userName = $user['full_name'];
        $userEmail = $user['email'];
    } else {
        $userName = "Guest";
        $userEmail = "N/A";
    }
} catch (PDOException $e) {
    // Log the error and show a generic message
    error_log("Query failed: " . $e->getMessage(), 3, 'errors.log');
    die("A query error occurred. Please try again later.");
}

// Close the connection
$conn = null;
?>




<!DOCTYPE html>
<html lang="en"> <!-- Use the appropriate language code -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/academAI-view- creation-quiz.css">
    <title>Document</title>
</head>
<body>

  
  <div class="mcq-container">
    <div class="container useranswer">
        <div class="profile-student">
          <div class="profile-section">
                <img src="../img/www.jpg" class="profile-pic">    
                <div class="profile-identity">
                <p class="profile-name"><?php echo htmlspecialchars($userName); ?></p>
                <p class="email"><?php echo htmlspecialchars($userEmail); ?></p>
            </div>
        </div>
        </div>
     <div class="divide-content"> 
    <div class="author-descript">
            <div class="author-info">  
                <div class="d-flex">
                <p class="title-quiz">Quiz Title:</p>
                <textarea id="quizTitle" name="quizTitle"><?php echo isset($_SESSION['quizTitle']) ? htmlspecialchars($_SESSION['quizTitle']) : ''; ?></textarea>


                </div>
                </div>
                <div class="d-flex">
                <p class="descrip">Description:</p>
                <textarea id="quizDescription" name="quizDescription"><?php echo isset($_SESSION['quizDescription']) ? htmlspecialchars($_SESSION['quizDescription']) : ''; ?></textarea>
                </div>  

                <div class="d-flex">
                <p class="subject">Subject:</p><textarea id="quizSubject" name="quizSubject"><?php echo isset($_SESSION['quizSubject']) ? htmlspecialchars($_SESSION['quizSubject']) : ''; ?></textarea>
                </div>               
</div>


<div class="date-descript"></div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Function to load date and time data from localStorage and display it
        function loadDateTime() {
            // Directly get values from localStorage
            const startDate = localStorage.getItem('startDate') || '';
            const startTime = localStorage.getItem('startTime') || '';
            const endDate = localStorage.getItem('endDate') || '';
            const endTime = localStorage.getItem('endTime') || '';

            // Create HTML structure for start and end dates and times (except end time)
            const htmlContent1 = `
                <div class="date-info">
                    <div class="d-flex date-information">
                        <label class="startdate" for="start-date">Start Date:</label>
                        <input type="date" id="start-date" class="the-startdate" value="${startDate}">
                    </div>
                    <div class="d-flex date-information">
                        <label class="starttime" for="start-time">Start Time:</label>
                        <input type="time" id="start-time" class="the-starttime" value="${startTime}">
                    </div>
                    <div class="d-flex date-information">
                        <label class="enddate" for="end-date">End Date:</label>
                        <input type="date" id="end-date" class="the-enddate" value="${endDate}">
                    </div>
                </div>
            `;

            // Create HTML structure for the end time separately
            const htmlContent2 = `
                <div class="d-flex date-information">
                    <label class="endtime" for="end-time">End Time:</label>
                    <input type="time" id="end-time" class="the-endtime" value="${endTime}">
                </div>


               <div class="restriction">
                <input type="checkbox" class="form-check-input" id="randomized-checkbox-restriction">
                <p class="restriction-title">Restriction:</p>
                <p class="restriction-titles">Close quiz after due time</p>
            </div>

            `;

            // Insert the first part of the HTML content into the first container
            const displayContainer1 = document.querySelector('.date-descript'); // Ensure this element exists
            if (displayContainer1) {
                displayContainer1.innerHTML = htmlContent1;
            }

            // Insert the second part of the HTML content into the second container
            const displayContainer2 = document.querySelector('.date-descript2'); // Ensure this element exists
            if (displayContainer2) {
                displayContainer2.innerHTML = htmlContent2;
            }
        }

        // Load date and time data when the page loads
        loadDateTime();
    });
</script>

<script>
$(document).ready(function() {
    // Log that the page is ready
    console.log("Page is ready");

    // Event listener for the 'Yes' button to set a restriction in localStorage
    $('#yes-btn').on('click', function() {
        console.log("Yes button clicked, setting restrictionSet to true");
        // Set restrictionSet in localStorage to true
        localStorage.setItem("restrictionSet", "true");
    });

    // Check if the restriction has been set in localStorage
    const restrictionSet = localStorage.getItem("restrictionSet");

    // Log the value of restrictionSet to check what is stored
    console.log("restrictionSet in localStorage:", restrictionSet);

    // Reference to the checkbox
    const restrictionCheckbox = $('#randomized-checkbox-restriction');

    // Check if restrictionSet is exactly "true"
    if (restrictionSet === "true") {
        console.log("Setting checkbox as checked");
        // If restriction is set, display the checkbox as checked
        restrictionCheckbox.prop('checked', true);
    } else {
        console.log("Setting checkbox as unchecked because restrictionSet is not true or null");
        // If restriction is not set, display the checkbox as unchecked
        restrictionCheckbox.prop('checked', false);
    }

    // Optional: Update localStorage when checkbox is manually clicked
    restrictionCheckbox.on('change', function() {
        if ($(this).is(':checked')) {
            console.log("Checkbox checked, setting restrictionSet to true");
            localStorage.setItem("restrictionSet", "true");
        } else {
            console.log("Checkbox unchecked, removing restrictionSet from localStorage");
            localStorage.removeItem("restrictionSet");
        }
    });
});

</script>


    <div class="date-descript2">
 </div>
 </div>
                <div class="col d-flex quiz-taker-section">     
                <div class="col-6 green-section">       
                </div>   
                <div class="col-6 quiz-points">
                    <h3 class="total-points">Quiz Total Points: 50</h3>
                </div> 
                </div>


                </div>
        
               
</div>
            
                
   

   


 
 


 <div class="displayanswer">



<div class="quiz-info">
   <div class="title-box">
                    <p class="title">Identification</p>
                    <p class="points-multiple">Points: 10</p>
            </div>
</div>


    
<div class="separate">


<div class="container limit-con">
<div class="date col">
 <label for="time-limit">Time Limit:</label>
 <div class="form-group minutes-choice">
     <input type="number" id="time-limit-minutes" placeholder="30"name="time-limit-minutes" min="0" required style="width: 73%;">
     <select id="time-limit-seconds" name="time-limit-seconds" required>
         <option value="seconds">seconds</option>
         <option value="minutes">minutes</option>
     </select>
 </div>
</div>
</div>
<p class="limitconpar">/*Note:This will apply to all the items*/</p>

<div class="container numberitem">
<div class="input-group number-of-quiz">
 <!-- Number of Quiz Input -->
 <label for="num-quiz">Number of Quiz:</label>
 <input type="number" id="num-quiz" name="num-quiz" min="1" placeholder="3"required>
</div>

<div class="input-group num-per-point">
 <!-- Points per Item Input -->
 <label for="num-points">Points per Item:</label>
 <input type="number" id="num-points" name="num-points" min="3"placeholder="3 Points" required>
</div>
<div class="numpoints"><p>/*Note:This will apply to all the items*/</p></div>



</div>
</div> 


<div class="container-fluid typequestionall-identification">

    <div class="container-fluid typequestion-identification">
        <div class="input-wrapper dropdownminute">
            <div class="input-box-identification">
                <input type="text" id="question-identification" placeholder="Who was the first President of the United States?" name="question">
                <span class="number-identification">1.</span> <!-- Number inside the box -->
            </div>
        </div> 

        <div class="container typequestionhere-identification">
            <div class="input-wrapper dropdownminute-identification">
                <div class="dropdown">
                    <input type="number" placeholder="45" id="time-limit-identification" name="time-limit" min="0">
                    <select name="time-limit-unit-identification" id="time-limit-unit-identification">
                        <option value="seconds">seconds</option>
                        <option value="minutes">minutes</option>                      
                    </select>
                </div>
            </div>
         
                <div class="input-wrappe dropdownminute">
                    <input type="number" id="points-identification" placeholder="3 Points" name="points" min="0">
            </div>
        </div>
        <div class="input-wrapper  dropdownminute-identification">
            <div class="input-box-identification">
                <input type="text" id="answer-identification" placeholder="Answer: George Washington" name="answer">
            </div>
        </div>
    </div>
 

</div>



 
<div class="quiz-info">
<div class="title-box">
            <p class="title">Essay</p>
            <p class="points-multiple">Points: 10</p>
        </div>
</div>
      
    
<div class="separate">
<div class="container limit-con">
<div class="date col">
 <label for="time-limit">Time Limit:</label>
 <div class="form-group minutes-choice">
     <input type="number" id="time-limit-minutes" placeholder="10"name="time-limit-minutes" min="0" required style="width: 73%;">
     <select id="time-limit-seconds" name="time-limit-seconds" required>
        <option value="minutes">minutes</option>
         <option value="seconds">seconds</option> 
     </select>
 </div>
</div>
</div>
<p class="limitconpar">/*Note:This will apply to all the items*/</p>

<div class="container numberitem">
<div class="input-group number-of-quiz">
 <!-- Number of Quiz Input -->
 <label for="num-quiz">Number of Quiz:</label>
 <input type="number" id="num-quiz" name="num-quiz" min="1" placeholder="3"required>
</div>

<div class="input-group num-per-point">
 <!-- Points per Item Input -->
 <label for="num-points">Points per Item:</label>
 <input type="number" id="num-points" name="num-points" min="1"placeholder="10 Point" required>
</div>
<div class="numpoints"><p>/*Note:This will apply to all the items*/</p></div>

<label for="limit-word">Word Limit</label>
                        <div class="input-group word-limit-count">
                            
                        <label for="minimum">Minimum:</label>
                        <input type="number" id="minimum" name="limit-word" min="1" required>
                        <label for="maximum">Maximum:</label>
                        <input type="number" id="maximum" name="limit-word" min="1" required>
                    </div>


</div>
</div>




            
<div class="container-fluid typequestionall-essay">
                <div class="container-fluid typequestion-essay">
                    <div class="input-wrapper dropdownminute">
                        <div class="input-box-essay">
                            <input type="text" id="question-essay" placeholder="How did the Renaissance impact modern society?" name="question">
                            <span class="number-essay">1.</span>
                            <span class="rubric-icon"><a href="AcademAI-Set-Essay-Rubric.php" class="rubric-link">Set Rubrics</a></span>
                        </div>
                    </div> 
                    <div class="container typequestionhere-essay">
                        <div class="input-wrapper dropdownminute-essay">
                            <div class="dropdown">
                                <input type="number" placeholder="10" id="time-limit-essay" name="time-limit" min="0">
                                <select name="time-limit-unit" id="time-limit-unit-essay">
                                    <option value="minutes">minutes</option>
                                    <option value="seconds">seconds</option>
                                </select>
                            </div>
                        </div>
                    
                            <div class="input-wrappe dropdownminute">
                                <input type="number" id="points-essay" placeholder="10 Points" name="points" min="0">
                            </div>
                        </div>
                        <div class="word-limit-per">
                                <input type="number" id="minimum-per" placeholder="minimum word limit" name="limit-word" min="1" required>
                                <input type="number" id="maximum-per" placeholder="maximum word limit" name="limit-word" min="1" required>
                                </div>

                    <div class="input-wrapper dropdownminute">
                        <div class="input-box">
                            <input type="text" id="answer-essay3" placeholder="Type your answer here" name="answer">
                        </div>
                    </div>
        
                    <div class="orupload">
                        <h3>or</h3>
                    </div>
                    <div class="form-group fileupload">
                        <label class="colcontrol-label">
                            Attachment(s) You can upload your files here
                        </label>
                        <div class="essay-file-pdf-wrapper">
                           <img src="../img/pdf.png">
                           <p class="essayfile">MyEssayQuestion.pdf</p>
                        </div>
                        
                    </div>
                </div>
            </div>
</div>
    



</div>


<div class="button-container ">
<button class="back-button" type="button" onclick="history.back();"><i class="fas fa-arrow-left"></i> Back</button>
                <div class="next-icons">
                <form action="../tools/create-mcq-data-store.php" method="POST"> <!-- Replace 'your_action_url' with the actual URL you want to submit to -->  
              <button class="next-button  mx-5" id="view-creation-card-modal-Btn"data-bs-toggle="modal" data-bs-target="#create-card-modal">Submit <i class="fas fa-arrow-right"></i></button>
                </div>
</div>
</form>

</div>
</div>
</div>



<!-- Modal -->
<div class="modal fade" id="create-card-modal"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="half-image">
            <img src="../img/modal/modal-18.gif" alt="First Image" style="width: 100%; height: 100%;">
        </div>
        <img src="../img/modal/modal-6.gif" alt="Circle Image" class="center-image"> <!-- Second Image (Circle Image) -->
        <form action="#">
            <!-- Your form elements go here -->
        </form>
        <div class="submit-content">
            <p class="submit-text">Are you sure you want to create this quiz?</p> <!-- Text -->
        <div class="yes-no">
            <a href="AcademAI-Library-Upcoming-View-Card.php" class="yes-btn">Yes</a> <!-- Yes Button -->
            <a href="AcademAI-View- Creation-Quiz.php" class="cancel-btn">No</a> <!-- Cancel Button -->
        </div>
        </div>
    </div>
  </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Function to load data from localStorage and display it
        function loadQuizData() {
            const mcqData = {
                numPoints: localStorage.getItem('numPoints') || 0,
                numQuiz: localStorage.getItem('numQuizzes') || 1,
                timeLimitMinutes: localStorage.getItem('time_limit_minutes') || 0,
                timeLimitSeconds: localStorage.getItem('time_limit_seconds') || 'seconds',
                questions: JSON.parse(localStorage.getItem('questions')) || []
            };



            function htmlEncode(str) {
    return str.replace(/&/g, "&amp;")
              .replace(/</g, "&lt;")
              .replace(/>/g, "&gt;")
              .replace(/"/g, "&quot;")
              .replace(/'/g, "&#039;");
}


            // Load saved answers from localStorage
            const savedAnswers = JSON.parse(localStorage.getItem('savedAnswers')) || {};

            // Debugging: Log the mcqData and savedAnswers object to verify the localStorage data
            console.log('Loaded quiz data:', mcqData);
            console.log('Loaded saved answers:', savedAnswers);

            // Create the HTML structure
            const htmlContent = `
                <form action="../tools/create-mcq-data-store.php" method="POST"> <!-- Replace 'your_action_url' with the actual URL you want to submit to -->
                    <div class="quiz-info-multiple">
                        <div class="title-box">
                            <p class="title">Multiple Choice</p>
                            <p class="points-multiple">Points: ${mcqData.numPoints}</p>
                        </div>
                    </div>
                    <div class="divide-question">
                        <div class="separate">
                             <div class="container limit-con">
                                <div class="date col">
                                    <label for="time-limit">Time Limit:</label>
                                    <div class="form-group minutes-choice">
                                        <input type="number" id="time-limit-minutes" name="time-limit-minutes" min="0" value="${mcqData.timeLimitMinutes}" required style="width: 73%;">
                                        <select id="time-limit-seconds" name="time-limit-seconds" required>
                                            <option value="seconds" ${mcqData.timeLimitSeconds === 'seconds' ? 'selected' : ''}>seconds</option>
                                            <option value="minutes" ${mcqData.timeLimitSeconds === 'minutes' ? 'selected' : ''}>minutes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <p class="limitconpar">/*Note: This will apply to all the items*/</p>
                            <div class="container numberitem">
                                <div class="input-group number-of-quiz">
                                    <label for="num-quiz">Number of Quiz:</label>
                                    <input type="number" id="num-quiz" name="num-quiz" min="1" value="${mcqData.numQuiz}" required>
                                </div>
                                <div class="input-group num-per-point">
                                    <label for="num-points">Points per Item:</label>
                                    <input type="number" id="num-points" name="num-points" min="1" value="${mcqData.numPoints}" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    ${mcqData.questions.map((data, index) => {
                        // Use the index to form the answer key
                        const questionAnswers = savedAnswers[`question-${index}`] || [];
                        return `
                        <div class="container-fluid typequestionall">
                            <div class="container-fluid typequestion">
                                <div class="input-wrapper dropdownminute">
                                    <div class="input-box">
                                        <textarea class="question-mcq" id="question-${index}" name="questionmcq[]" required>${data.questionText}</textarea>
                                        <span class="number">${index + 1}.</span>
                                        <span class="deletetop-mcq">&#x2716;</span> <!-- Delete icon -->
                                    </div>
                                </div>
                            </div>
                            <div class="container typequestion">
                                <div class="input-wrapper dropdownminute">
                                    <div class="dropdown">
                                        <input type="number" class="time-limit-mcq" id="time-limit-mcq-${index}" name="time_limit-mcq-${index}" min="0" value="${data.timeLimit || 0}" placeholder="Time Limit" />
                                        <select name="time-limit-unit-mcq-${index}"  class="time-limit-unit-mcq" id="time-limit-unit-mcq-${index}">
                                            <option value="seconds" ${data.timeUnit === 'seconds' ? 'selected' : ''}>seconds</option>
                                            <option value="minutes" ${data.timeUnit === 'minutes' ? 'selected' : ''}>minutes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-wrapper dropdownminute">
                                    <input type="number" id="points-mcq-${index}"  class="points-mcq" name="points_per_item-mcq[]" min="0" value="${data.points || 0}" placeholder="Points" />
                                </div>
                            </div>

                            ${data.answers.map((answer, answerIndex) => {
                                // Get the corresponding saved answer if it exists
                                const savedAnswer = questionAnswers[answerIndex] || { text: answer.text, isCorrect: answer.isCorrect };

                                return `
                                <div class="container-fluid typequestionhere" id="question-${index}">
                                    <div class="input-wrapper answercon">
                                        <div class="input-box">
                                      <textarea class="answerchoice-mcq" 
                                            name="answerchoice-mcq[${index}][]" 
                                            id="answerchoice-mcq-${index}-${answerIndex}" 
                                            placeholder="Please answer here" 
                                            required>${htmlEncode(savedAnswer.text || data.answers[answerIndex] || '')}</textarea>
                                            <div class="letter-inside">${String.fromCharCode(65 + answerIndex)}</div> <!-- Letter inside the box -->
                                            <div class="icon-container">
                                                <span class="delete-icon-mcq"><i class="fas fa-trash"></i></span>
                                                <input type="checkbox" class="checkbox-mcq" id="checkbox-${index}-${answerIndex}" name="isCorrect[${index}][]" ${savedAnswer.isCorrect ? 'checked' : ''}> <!-- Checkbox for correct answer -->
                                            </div>
                                        </div>                   
                                    </div>
                                </div>
                                `;
                            }).join('')}
                        </div>
                        <div class="add-section">
                            <div class="addquestion" id="addquestion"><i class="fas fa-plus-circle"></i></div>
                        </div>
                        `;
                    }).join('')}
                </form>
            `;

            // Clear existing content and insert new HTML
            const displayContainer = document.querySelector('.displayanswer'); // Adjust the selector as necessary
            displayContainer.innerHTML = htmlContent;
        }

        // Load quiz data when the page loads
        loadQuizData();
    });
</script>



<script>
document.addEventListener('DOMContentLoaded', function () {
    const addQuestionBtn = document.getElementById('addquestion');
    const questionSectionContainer = document.getElementById('question-section-container');
    const questionTemplate = document.getElementById('question-template');

    let questionCount = 0; // To keep track of question numbers

    addQuestionBtn.addEventListener('click', function () {
        // Clone the template
        const newQuestionSection = questionTemplate.content.cloneNode(true);

        // Update the number inside the span
        questionCount++;
        const numberSpan = newQuestionSection.querySelector('.number');
        numberSpan.textContent = questionCount + '.'; // Set the question number

        // Append the new question section to the container
        questionSectionContainer.appendChild(newQuestionSection); }
    });
});
</script>

</body>
</html>