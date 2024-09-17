<?php
    require_once('../include/extension_links.php');

    session_start();

    // Assuming session management and quiz type processing have already been done in create-quiz-2nd.php

    // Check if the current quiz type is the first one being processed
    $isFirstQuizType = isset($_SESSION['currentQuizTypeIndex']) && $_SESSION['currentQuizTypeIndex'] == 1;

// Debug: Check if session data exists and log it
if (isset($_SESSION['mcq_data'])) {
    echo "<script>console.log('Data Retrieved from Session: " . json_encode($_SESSION['mcq_data']) . "');</script>";
} else {
    echo "<script>console.log('No data found in session.');</script>";
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/academAI-create-multiple-choice.css">   
    <title>Multiple Choice</title>
</head>
<body>

<style>
        .separateform {
            <?php if (!$isFirstQuizType): ?>
            display: none;
            <?php endif; ?>
        }
    </style>

    <div class="mcq-container">
   <div class="video-container">
     
   <div class="container set-container">
    <div class="form submitform">
    <h1> Multiple Choice</h1>
        <div class="separate">

            <div class="separateform">
         
                   <div class="containerdate">
                       <div class="date col2">
                           <div class="form-group d-grid">
                               <label for="start-date">Start Date:</label>
                               <input type="date" id="start-date" name="start-date" required>
                           </div>
                           <div class="form-group d-grid">
                               <label for="start-time">Start Time:</label>
                               <input type="time" id="start-time" name="start-time" required>
                           </div>
                       </div>
                   </div>
         
             <div class="containerendate">
                <div class="dateend">
                    <div class="form-group d-grid">
                        <label for="end-date">End Date:</label>
                        <input type="date" id="end-date" name="end-date" required>
                    </div>
                    <div class="form-group d-grid">
                        <label for="end-time">End Time:</label>
                        <input type="time" id="end-time" name="end-time" required>
                    </div>
                </div>
            </div>
        </div>

     
            <div class="container limit-con">
                <div class="date col">
                    <label for="time-limit">Time Limit:</label>
                    <div class="form-group minutes-choice">
                        <input type="number" id="time-limit-minutes" name="time-limit-minutes" min="0" required style="width: 73%;">
                        <select id="time-limit-seconds" name="time-limit-seconds" required>
                            <option value="seconds">seconds</option>
                            <option value="minutes">minutes</option>
                        </select>
                    </div>
                </div>
            </div>
            <p class="limitconpa">/*Note:This will apply to all the items*/</p>

            <div class="container numberitem">
                <div class="input-group number-of-quiz">
                    <!-- Number of Quiz Input -->
                    <label for="num-quiz">Number of Quiz:</label>
                    <input type="number" id="num-quiz" name="num-quiz" min="0" required>
                </div>
              
                <div class="input-group num-per-point">
                    <!-- Points per Item Input -->
                    <label for="num-points">Points per Item:</label>
                    <input type="number" id="num-points" name="num-points" min="1" required>
                </div>
                <div class="numpoints"><p>/*Note:This will apply to all the items*/</p></div>
    

          

             
            </div>
    </div> 

    <!-- Container to hold dynamically generated question sections -->
    <div id="question-section-container"></div>
                
                <!-- Template for a single question section (hidden initially) -->
     <template id="question-template">

    <div class="container-fluid typequestionall">

   
    
    <div class="container typequestion">
    
</div>

    <div class="container-fluid typequestionhere">
    <div class="input-wrapper dropdownminute">
            <div class="input-box">
                <textarea id="question" placeholder="Please type your question here" name="question"></textarea>
                <span class="number">1.</span> <!-- Number inside the box -->
                <span class="deletetop">&#x2716;</span> <!-- Delete icon -->
            </div>
        </div>
    </div>

    
    <div class="container typequestion">
    <div class="input-wrapper dropdownminute">
        <div class="dropdown">
            <input type="number" placeholder="Time limit" id="time-limit" name="time-limit" min="0">
            <select name="time-limit-unit" id="time-limit-unit">
            <option value="minutes" class="minutes-option">minutes</option>
            <option value="seconds" class="seconds-option">seconds</option>
            </select>
        </div> 
    </div>
    <div class="input-wrapper dropdownminute">
    <input type="number" id="points" placeholder="Points" name="points">
    </div>
</div>

    <div class="container-fluid typequestionhere">
        <div class="input-wrapper answercon">
            <div class="input-box">
             <textarea class="answerchoice"  id="answerchoice" placeholder="Please answer here" name="answerchoice"></textarea>
                <div class="letter-inside">A</div> <!-- Letter inside the box -->
                <div class="icon-container">
                    <span class="delete-icon"><i class="fas fa-trash"></i></span>
                    <input type="checkbox" class="checkbox" id="checkbox_A"> <!-- Checkbox -->
                </div>
            </div>
        </div> 

        <div class="input-wrapper answercon">
            <div class="input-box">
            <textarea class="answerchoice" id="answerchoice" placeholder="Please answer here" name="answerchoice"></textarea>
                <div class="letter-inside">B</div> <!-- Letter inside the box -->
                <div class="icon-container">
                    <span class="delete-icon"><i class="fas fa-trash"></i></span>
                    <input type="checkbox" class="checkbox" id="checkbox_B"> <!-- Checkbox -->
                </div>
            </div>
        </div> 

        <div class="input-wrapper answercon">
            <div class="input-box">
            <textarea class="answerchoice" id="answerchoice" placeholder="Please answer here" name="answerchoice"></textarea>
                <div class="letter-inside">C</div> <!-- Letter inside the box -->
                <div class="icon-container">
                    <span class="delete-icon"><i class="fas fa-trash"></i></span>
                    <input type="checkbox" class="checkbox" id="checkbox_D"> <!-- Checkbox -->
                </div>
            </div>
        </div> 

        <div class="input-wrapper answercon">
            <div class="input-box">
            <textarea class="answerchoice"  id="answerchoice" placeholder="Please answer here" name="answerchoice"></textarea>
                <div class="letter-inside">D</div> <!-- Letter inside the box -->
                <div class="icon-container">
                    <span class="delete-icon"><i class="fas fa-trash"></i></span>
                    <input type="checkbox" class="checkbox" id="checkbox_D"> <!-- Checkbox -->
                </div>
            </div>
        </div> 

     
        <div class="input-wrapper answercon" id="answer-section-container">
            <!-- Answer inputs will be added here -->
        </div>  
         <div class="buttonanswer"><button id="add-answer-btn">Add Answer</button></div>

      
</div>

</template>
   
<div class="add-section" style="display: none;">
    <div class="addquestion" id="addquestion"><i class="fas fa-plus-circle"></i></div>
</div>

</form>

         <div class="icon-for-next">

             <!-- Add this HTML somewhere in your code where you want the Next button to appear -->
             <button class="back-button" type="button" onclick="history.back();"><i class="fas fa-arrow-left"></i> Back</button>

             <form method="post" action="../tools/create-quiz-2nd.php">
    <button type="submit" name="next" class="next-button" id="next-button">
        <i class="fas fa-arrow-right"></i> Next
    </button>
</form>

</div>

        </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<script>
document.getElementById('next-button').addEventListener('click', function() {
    const formData = new FormData(document.querySelector('form'));
    
    // Store data temporarily (you can use sessionStorage or send to server)
    const tempData = {};
    formData.forEach((value, key) => {
        tempData[key] = value;
    });
    
    // Assuming you want to save it in sessionStorage
    sessionStorage.setItem('quizData', JSON.stringify(tempData));

});
</script>



<!-- Modal -->
<div class="modal fade" id="create-card-modal"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="half-image">
            <img src="../img/modal/modal-16.gif" alt="First Image" style="width: 100%; height: 100%;">
        </div>
        <img src="../img/modal/modal-q-1.gif" alt="Circle Image" class="center-image"> <!-- Second Image (Circle Image) -->
        <form action="#">
            <!-- Your form elements go here -->
        </form>
        <div class="submit-content">
            <p class="submit-text">Do you want to close this quiz after due?</p> <!-- Text -->
        <div class="yes-no">
        <a href="#" class="yes-btn" id="yes-btn">Yes</a> <!-- Yes Button -->
              <a href="#" class="cancel-btn" id="cancel-btn">No</a> <!-- Cancel Button -->
        </div>
        </div>
    </div>
  </div>
</div>
<!-- Modal -->

    <!-- JavaScript to Trigger Modal and Close Modal on 'No' Button Click -->
<script>
$(document).ready(function() {
    console.log("Checking for showModal flag...");

    // Check the 'showModal' flag in localStorage
    const showModal = localStorage.getItem("showModal");

    if (showModal === "true") {
        console.log("Showing modal");
        // Manually trigger the modal
        const modalElement = new bootstrap.Modal(document.getElementById('create-card-modal'));
        modalElement.show();

        // Remove the flag after showing the modal
        localStorage.removeItem("showModal");
    }

     // Event listener for the 'No' button to close the modal and set restrictionSet to false
     $('#cancel-btn').on('click', function() {
        console.log("No button clicked, setting restrictionSet to false");

        // Set restrictionSet in localStorage to false when 'No' is clicked
        localStorage.setItem("restrictionSet", "false");

       // Redirect to the desired page after the restriction is set
       window.location.href = "../user/AcademAI-View-%20Creation-Quiz.php"; // Change the path if necessary
    });


     // Event listener for the 'Yes' button to set a restriction in localStorage
     $('#yes-btn').on('click', function() {
        // Set a restriction in localStorage, e.g., "restrictionSet" to true
        localStorage.setItem("restrictionSet", "true");

        // Redirect to the desired page after the restriction is set
        window.location.href = "../user/AcademAI-View-%20Creation-Quiz.php"; // Change the path if necessary
    });

});
</script>





<script>
document.addEventListener('DOMContentLoaded', function() {
    const addSection = document.querySelector('.add-section');
    const numQuizInput = document.getElementById('num-quiz');

    // Function to check the number of quizzes and show/hide the add section
    function checkNumQuizzes() {
        const numQuizzes = parseInt(numQuizInput.value, 10);
        if (numQuizzes > 0) {
            addSection.style.display = 'block';
        } else {
            addSection.style.display = 'none';
        }
    }

    // Listen for changes in the number of quiz input
    numQuizInput.addEventListener('input', checkNumQuizzes);
});
</script>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addSection = document.querySelector('.add-section');
        const numQuizInput = document.getElementById('num-quiz');
        const questionSectionContainer = document.getElementById('question-section-container');
        const questionTemplate = document.getElementById('question-template');
        const addQuestionBtn = document.getElementById('addquestion');

        let questionCount = 0; // Initialize a counter for the questions

        // Function to save data to localStorage
        function saveToLocalStorage() {
            const numQuizzes = numQuizInput.value;
            const numPoints = document.getElementById('num-points').value;
            const timeLimitMinutes = document.getElementById('time-limit-minutes').value;
            const timeUnit = document.getElementById('time-limit-seconds').value;

            localStorage.setItem('numQuizzes', numQuizzes);
            localStorage.setItem('numPoints', numPoints);
            localStorage.setItem('time_limit_minutes', timeLimitMinutes);
            localStorage.setItem('time_limit_unit', timeUnit);
            

            const questions = [];
            questionSectionContainer.querySelectorAll('.typequestionall').forEach((section) => {
                const questionText = section.querySelector('textarea[name="question"]').value;
                const timeLimit = section.querySelector('input[name="time-limit"]').value;
                const timeUnit = section.querySelector('select[name="time-limit-unit"]').value;
                const points = section.querySelector('input[name="points"]').value;

                const answers = [];
                section.querySelectorAll('.answercon textarea[name="answerchoice"]').forEach(answerInput => {
                    const answerValue = answerInput.value;
                    answers.push(answerValue);
                    
                    // Console log for each answer
                    console.log(`Answer saved for question: "${questionText}" - Answer: "${answerValue}"`);
                });

                questions.push({ questionText, timeLimit, timeUnit, points, answers });
            });

            localStorage.setItem('questions', JSON.stringify(questions));
            console.log('All questions and answers saved to localStorage:', questions); // Log the entire questions object
        }

       // Function to load data from localStorage
function loadFromLocalStorage() {
    const numQuizzes = localStorage.getItem('numQuizzes');
    const numPoints = localStorage.getItem('numPoints');
    const timeLimitMinutes = localStorage.getItem('time_limit_minutes');
    const timeUnit = localStorage.getItem('time_limit_unit');

    if (numQuizzes) {
        numQuizInput.value = numQuizzes;
        questionSectionContainer.innerHTML = ''; // Clear existing sections
        questionCount = 0;

        const questions = JSON.parse(localStorage.getItem('questions'));
        if (questions) {
            questions.forEach((data) => {
                const clone = questionTemplate.content.cloneNode(true);
                questionCount++;
                const questionNumber = clone.querySelector('.number');
                questionNumber.textContent = `${questionCount}.`;

                clone.querySelector('textarea[name="question"]').value = data.questionText;
                clone.querySelector('input[name="time-limit"]').value = data.timeLimit;
                clone.querySelector('select[name="time-limit-unit"]').value = data.timeUnit;
                clone.querySelector('input[name="points"]').value = data.points;

                const answerInputs = clone.querySelectorAll('.answercon textarea[name="answerchoice"]');
                
                // Update answer choices based on the loaded data
                for (let index = 0; index < answerInputs.length; index++) {
                    if (index < data.answers.length) {
                        answerInputs[index].value = data.answers[index] || ''; // Load existing answers
                    } else {
                        answerInputs[index].value = ''; // Clear excess answer choices
                    }
                }

                // Check if there are more answers than existing inputs, and add more if necessary
                for (let index = answerInputs.length; index < data.answers.length; index++) {
                    const newAnswer = document.createElement('div'); // or the specific structure of your answer element
                    newAnswer.classList.add('answercon');
                    newAnswer.innerHTML = `
                        <textarea name="answerchoice">${data.answers[index] || ''}</textarea>
                        <button class="delete-icon">Delete</button>
                    `;
                    clone.querySelector('.answers-container').appendChild(newAnswer); // Adjust this to the correct container for answers
                }

                questionSectionContainer.appendChild(clone);
            });
        }

        // Reflect stored values in the respective input fields
        document.getElementById('num-points').value = numPoints || '';
        document.getElementById('time-limit-minutes').value = timeLimitMinutes || '';
        document.getElementById('time-limit-seconds').value = timeUnit || '';

        checkNumQuizzes();
        updateReflectedPoints(); // Update reflected points when loading
    }
}

        // Function to update reflected points input in all forms
        function updateReflectedPoints() {
            let numPointsValue = document.getElementById('num-points').value;

            // Select all input fields with the name "points" and update their value
            document.querySelectorAll('input[name="points"]').forEach(function(input) {
                input.value = numPointsValue;
            });

            // Save the reflected points to localStorage
            localStorage.setItem('numPoints', numPointsValue);
        }

        // Load number points from localStorage when the page loads
        function loadNumPointsFromLocalStorage() {
            const storedPoints = localStorage.getItem('numPoints');
            if (storedPoints) {
                document.getElementById('num-points').value = storedPoints;
                updateReflectedPoints(); // Update reflected points if loaded
            }
        }

        // Function to update all time limit inputs and save to localStorage
        function updateAllTimeLimits() {
            let minutesValue = document.getElementById('time-limit-minutes').value;
            let timeUnit = document.getElementById('time-limit-seconds').value;

            // Update all time limit input fields
            document.querySelectorAll('input[name="time-limit"]').forEach(function(input) {
                input.value = minutesValue;
            });

            // Update all time unit select elements
            document.querySelectorAll('select[name="time-limit-unit"]').forEach(function(select) {
                select.value = timeUnit;
            });

            // Save the values to localStorage
            localStorage.setItem('time_limit_minutes', minutesValue);
            localStorage.setItem('time_limit_unit', timeUnit);
        }

        // Load time limit values from localStorage when the page loads
        function loadTimeLimitsFromLocalStorage() {
            const storedMinutes = localStorage.getItem('time_limit_minutes');
            const storedUnit = localStorage.getItem('time_limit_unit');

            if (storedMinutes) {
                document.getElementById('time-limit-minutes').value = storedMinutes;
                document.querySelectorAll('input[name="time-limit"]').forEach(function(input) {
                    input.value = storedMinutes;
                });
            }

            if (storedUnit) {
                document.getElementById('time-limit-seconds').value = storedUnit;
                document.querySelectorAll('select[name="time-limit-unit"]').forEach(function(select) {
                    select.value = storedUnit;
                });
            }
        }

        // Event listeners to trigger time limit update and save to localStorage
        document.getElementById('time-limit-minutes').addEventListener('input', updateAllTimeLimits);
        document.getElementById('time-limit-seconds').addEventListener('change', updateAllTimeLimits);

        // Load stored time limits and points when the page loads
        loadFromLocalStorage();
        loadTimeLimitsFromLocalStorage();
        loadNumPointsFromLocalStorage();

        // Function to check the number of quizzes and show/hide the add section
        function checkNumQuizzes() {
            const numQuizzes = parseInt(numQuizInput.value, 10);
            if (numQuizzes > 0) {
                addSection.style.display = 'block';
            } else {
                addSection.style.display = 'none';
            }
        }

        // Listen for changes in the number of quiz input
        numQuizInput.addEventListener('input', function() {
            const desiredCount = parseInt(numQuizInput.value, 10) || 0;

            // Adjust the number of questions based on the input
            while (questionCount < desiredCount) {
                addQuestion();
            }

            while (questionCount > desiredCount) {
                removeLastQuestion();
            }

            saveToLocalStorage(); // Save each time input changes
        });

        // Function to add a question
        function addQuestion() {
            const clone = questionTemplate.content.cloneNode(true);
            questionCount++;
            const questionNumber = clone.querySelector('.number');
            questionNumber.textContent = `${questionCount}.`;

            questionSectionContainer.appendChild(clone);
        }

        // Function to remove the last question
        function removeLastQuestion() {
            if (questionCount > 0) {
                const lastQuestion = questionSectionContainer.lastElementChild;
                questionSectionContainer.removeChild(lastQuestion);
                questionCount--;
            }
        }

        // Add question functionality
        addQuestionBtn.addEventListener('click', function() {
            addQuestion(); // Just add one question when the button is clicked
            numQuizInput.value = questionCount; // Update the input value
            saveToLocalStorage(); // Save after adding a question
        });

        // Save data when any input inside the question section changes
        questionSectionContainer.addEventListener('input', saveToLocalStorage);

        // Event delegation for delete icons in the question section container
    questionSectionContainer.addEventListener('click', function(event) {
    if (event.target.classList.contains('deletetop')) {
        // Remove the entire question section (parent of the delete icon)
        const questionSection = event.target.closest('.typequestionall');
        if (questionSection) {
            // Get the current questions from localStorage
            let questions = JSON.parse(localStorage.getItem('questions')) || [];

            // Find the index of the question to be removed
            const questionIndex = Array.from(questionSectionContainer.children).indexOf(questionSection);
            questions.splice(questionIndex, 1); // Remove the question from the array

            // Save updated questions to localStorage
            localStorage.setItem('questions', JSON.stringify(questions));

            // Remove the question section from the DOM
            questionSectionContainer.removeChild(questionSection);

            // Adjust question count and save to localStorage
            questionCount--;
            numQuizInput.value = questionCount; // Update the displayed count
            saveToLocalStorage(); // Save after removing a question

            // Update the numbering of the remaining questions
            updateQuestionNumbers();
        }
    }
});

// Function to update the question numbers
function updateQuestionNumbers() {
    const questionSections = questionSectionContainer.querySelectorAll('.typequestionall');
    questionSections.forEach((section, index) => {
        const questionNumber = section.querySelector('.number');
        questionNumber.textContent = `${index + 1}.`; // Update to the new index
    });
}




    });
</script>



<script>

    document.addEventListener('DOMContentLoaded', function () {
    const questionSectionContainer = document.getElementById('question-section-container');
    const defaultLetters = ['A', 'B', 'C', 'D']; // Default letters
    let usedLetters = [...defaultLetters]; // Initialize with default letters

    // Load answers from localStorage or pre-populate default answers
    function loadAnswersFromLocalStorage() {
        const savedAnswers = JSON.parse(localStorage.getItem('savedAnswers')) || {};
        const deletedAnswers = JSON.parse(localStorage.getItem('deletedAnswers')) || {};

        Object.keys(savedAnswers).forEach(function (questionId) {
            const formContainer = document.getElementById(questionId);
            if (formContainer) {
                const answerSectionContainer = formContainer.querySelector('#answer-section-container');
                savedAnswers[questionId].answers.forEach(function (answer, index) {
                    const letter = usedLetters[index] || getNextAvailableLetter();
                    const newAnswerHTML = `
                        <div class="input-wrapper answercon">
                            <div class="input-box">
                                <textarea id="answerchoice_${letter}_${questionId}" placeholder="Please answer here" name="answerchoice">${answer.text}</textarea>
                                <div class="letter-inside">${letter}</div>
                                <div class="icon-container">
                                    <span class="delete-icon"><i class="fas fa-trash"></i></span>
                                    <input type="checkbox" class="checkbox" id="checkbox_${letter}_${questionId}" ${answer.isCorrect ? 'checked' : ''}>
                                </div>
                            </div>
                        </div>
                    `;
                    answerSectionContainer.insertAdjacentHTML('beforeend', newAnswerHTML);
                });
                addAutoSaveListeners(formContainer);
            }
        });

        // If you need to load deleted answers for reference, you can display them as needed
        console.log("Deleted answers loaded from localStorage:", deletedAnswers);

        updateUsedLetters(); // Update used letters after loading answers
    }

    function saveAnswersToLocalStorage() {
        const savedAnswers = {};
        const formContainers = questionSectionContainer.querySelectorAll('.typequestionhere');

        formContainers.forEach(function (formContainer, index) {
            const questionId = formContainer.id; // Get the ID of the question
            const answerSectionContainer = formContainer.querySelector('#answer-section-container');
            const answers = answerSectionContainer.querySelectorAll('.input-wrapper');

            const questionText = formContainer.querySelector('textarea[id^="question"]').value; // Get the question text
            savedAnswers[questionId] = {
                question: questionText, // Save the question text
                answers: Array.from(answers).map(function (answer) {
                    return {
                        text: answer.querySelector('textarea[id^="answerchoice"]').value || '',
                        isCorrect: answer.querySelector('input[type="checkbox"]').checked
                    };
                })
            };

            // Log question and its answers to the console
            console.log(`Saving question ID: ${questionId}, Question: "${questionText}", Answers: `, savedAnswers[questionId].answers);
        });

        // Save the collected answers to localStorage
        localStorage.setItem('savedAnswers', JSON.stringify(savedAnswers));

        // Confirm that localStorage is updated
        console.log("Data successfully saved to localStorage: ", savedAnswers);

        // Show alert when data is stored
        alert('Your answers have been successfully saved!');
    }

    function addAutoSaveListeners(formContainer) {
        const questionId = formContainer.id; // Get the ID of the question
        const answerInputs = formContainer.querySelectorAll(`textarea[id^="answerchoice"]`);
        const checkboxes = formContainer.querySelectorAll(`input[id^="checkbox"]`);

        // Save answer whenever there's input in the textarea
        answerInputs.forEach(function (input) {
            console.log(`Attaching input listener for question ID: ${questionId}`);
            input.addEventListener('input', function () {
                console.log(`Answer input changed for question ID: ${questionId}`);
                saveAnswersToLocalStorage();
            });
        });

        // Save answer whenever the checkbox is toggled
        checkboxes.forEach(function (checkbox) {
            console.log(`Attaching checkbox listener for question ID: ${questionId}`);
            checkbox.addEventListener('change', function () {
                console.log(`Checkbox changed for question ID: ${questionId}`);
                saveAnswersToLocalStorage();
            });
        });
    }

    // Function to get the next unused letter
    function getNextAvailableLetter() {
        const alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; // Full alphabet
        for (let i = 0; i < alphabet.length; i++) {
            if (!usedLetters.includes(alphabet[i])) {
                usedLetters.push(alphabet[i]);
                return alphabet[i];
            }
        }
        return null; // All letters used
    }

    // Function to update usedLetters based on current answers
    function updateUsedLetters() {
        const answerContainers = questionSectionContainer.querySelectorAll('.answercon');
        usedLetters = Array.from(answerContainers).map((answerElement, index) => {
            const letter = String.fromCharCode(65 + index); // Generate letters A, B, C, etc.
            const letterDiv = answerElement.querySelector('.letter-inside');
            letterDiv.textContent = letter; // Update displayed letter
            const textAreaField = answerElement.querySelector('textarea[id^="answerchoice"]');
            textAreaField.id = `answerchoice_${letter}`; // Update textarea ID
            const checkbox = answerElement.querySelector('input[type="checkbox"]');
            checkbox.id = `checkbox_${letter}`; // Update checkbox ID
            return letter; // Return letter to update usedLetters array
        });
    }

    // Save deleted answers
    function saveDeletedAnswer(questionId, deletedAnswer) {
        let deletedAnswers = JSON.parse(localStorage.getItem('deletedAnswers')) || {};
        if (!deletedAnswers[questionId]) {
            deletedAnswers[questionId] = [];
        }
        deletedAnswers[questionId].push(deletedAnswer);
        localStorage.setItem('deletedAnswers', JSON.stringify(deletedAnswers));

        console.log("Deleted answer saved to localStorage:", deletedAnswers);
    }

    // Event delegation for adding new answer choices
    questionSectionContainer.addEventListener('click', function (event) {
        if (event.target && event.target.id === 'add-answer-btn') {
            const formContainer = event.target.closest('.typequestionhere');
            const answerSectionContainer = formContainer.querySelector('#answer-section-container');

            // Ensure used letters are updated before adding a new answer
            if (usedLetters.length >= 26) {
                alert('You cannot add more than 26 choices (A-Z).');
                return;
            }

            const questionId = formContainer.id; // Get the ID of the question
            const newAnswerLetter = getNextAvailableLetter(); // Get the next unused letter

            const newAnswerHTML = `
                <div class="input-wrapper answercon">
                    <div class="input-box">
                        <textarea class="answerchoice" id="answerchoice_${newAnswerLetter}_${questionId}" placeholder="Please answer here" name="answerchoice"></textarea>
                        <div class="letter-inside">${newAnswerLetter}</div>
                        <div class="icon-container">
                            <span class="delete-icon"><i class="fas fa-trash"></i></span>
                            <input type="checkbox" class="checkbox" id="checkbox_${newAnswerLetter}_${questionId}">
                        </div>
                    </div>
                </div>
            `;

            answerSectionContainer.insertAdjacentHTML('beforeend', newAnswerHTML);
            addAutoSaveListeners(formContainer);
            saveAnswersToLocalStorage(); // Save immediately after adding
            updateUsedLetters(); // Ensure used letters are updated after adding
        }
    });

    // Event delegation for deleting answer choices
    questionSectionContainer.addEventListener('click', function (event) {
        if (event.target && event.target.classList.contains('delete-icon')) {
            const formContainer = event.target.closest('.typequestionhere');
            const answerElement = event.target.closest('.answercon');
            const letterInside = answerElement.querySelector('.letter-inside').textContent;
            const answerText = answerElement.querySelector('textarea').value;
            const isCorrect = answerElement.querySelector('input[type="checkbox"]').checked;

            const deletedAnswer = {
                letter: letterInside,
                text: answerText,
                isCorrect: isCorrect
            };

            const questionId = formContainer.id;

            // Save the deleted answer to localStorage
            saveDeletedAnswer(questionId, deletedAnswer);

            // Remove the answer from the DOM
            answerElement.remove();

            updateUsedLetters(); // Update the letters after deletion
            saveAnswersToLocalStorage(); // Save updated answers after deletion
        }
    });


    // Function to update reflected points input in all forms
function updateReflectedPoints() {
    let numPointsValue = document.getElementById('num-points').value;

    // Select all input fields with the name "points" and update their value
    document.querySelectorAll('input[name="points"]').forEach(function(input) {
        input.value = numPointsValue;
    });

    // Save the reflected points to localStorage
    localStorage.setItem('numPoints', numPointsValue);
}

// Listen for changes in num-points field and update all points fields
document.getElementById('num-points').addEventListener('input', updateReflectedPoints);

// Call updateReflectedPoints function when loading from localStorage
function loadNumPointsFromLocalStorage() {
    const storedPoints = localStorage.getItem('numPoints');
    if (storedPoints) {
        document.getElementById('num-points').value = storedPoints;
        updateReflectedPoints(); // Update reflected points if loaded
    }
}

// Store values in localStorage when input changes
document.querySelector('input[name="time-limit"]').addEventListener('input', function() {
    localStorage.setItem('timeLimit', this.value);
});

document.querySelector('input[name="points"]').addEventListener('input', function() {
    localStorage.setItem('points', this.value);
});

    // Load answers on page load
    loadAnswersFromLocalStorage();
});


</script>


<script>
    // Function to store form data in local storage
    function storeDateTime() {
        const startDate = document.getElementById('start-date').value;
        const startTime = document.getElementById('start-time').value;
        const endDate = document.getElementById('end-date').value;
        const endTime = document.getElementById('end-time').value;

        // Store values in local storage
        localStorage.setItem('startDate', startDate);
        localStorage.setItem('startTime', startTime);
        localStorage.setItem('endDate', endDate);
        localStorage.setItem('endTime', endTime);

        // Log values to the console for verification
        console.log('Stored Values:');
        console.log('Start Date:', startDate);
        console.log('Start Time:', startTime);
        console.log('End Date:', endDate);
        console.log('End Time:', endTime);
    }

    // Function to load data from local storage when the page loads
    function loadDateTime() {
        const startDate = localStorage.getItem('startDate');
        const startTime = localStorage.getItem('startTime');
        const endDate = localStorage.getItem('endDate');
        const endTime = localStorage.getItem('endTime');

        if (startDate) document.getElementById('start-date').value = startDate;
        if (startTime) document.getElementById('start-time').value = startTime;
        if (endDate) document.getElementById('end-date').value = endDate;
        if (endTime) document.getElementById('end-time').value = endTime;
    }

    // Function to set up event listeners on input fields
    function setupInputListeners() {
        document.getElementById('start-date').addEventListener('input', storeDateTime);
        document.getElementById('start-time').addEventListener('input', storeDateTime);
        document.getElementById('end-date').addEventListener('input', storeDateTime);
        document.getElementById('end-time').addEventListener('input', storeDateTime);

        // Optionally, add a change event listener for end date and time
        document.getElementById('end-date').addEventListener('change', storeDateTime);
        document.getElementById('end-time').addEventListener('change', storeDateTime);
    }

    // Load data on page load
    window.onload = function() {
        loadDateTime();
        setupInputListeners(); // Set up input listeners after loading data
    };
</script>

</body>
</html>

