<?php
    require_once('../include/extension_links.php');
?>

<?php
session_start();

// Redirect to login if not authenticated
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: ../login.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/academAI-user(learners)-view-quiz-answer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
</head>
<body>


    <div class="container useranswer">
    <a href="AcademAI-Completed-People-Join-LeaderBoard.php">
    <i class="fa-solid fa-arrow-left" style="color:#9EC8B9;"></i>
    </a>
        <div class="profile-student">
        <div class="profile-section">
                <img src="../img/www.jpg" class="profile-pic">    
                <div class="profile-identity">
                <p class="profile-name">Irene Aquino </p>
                <p class="email"> secretaryirene23@gmail.com</p>
                </div>
        </div>
</div>

    <div class="col d-flex quiz-taker-section">
        <div class="col-6 name-of-taker">
            <h3 class="quiz-taker">Quiz Taker: Sairly Lubguban</h3>
        </div>  
        <div class="col-6 green-section">
          
        </div>   
</div>   
  
    <div class="divide-content">
   
     <div class="author-descript">
   
            <div class="author-info">
                <div class="d-flex"><span class="quiz-title">Quiz Title:</span><p>Hunger Games</p></div>
                <div class="d-flex"><span class="quiz-description">Quiz Description:</span><p>Don't close your eyes</p></div>
                <div class="d-flex"><span class="subject">Subject:</span><p>Mathematics</p></div>
           </div>     
</div>     
      
        <div>
             <div class="date-info">
                    <div class="d-flex"><span class="start-date">Start Date:</span><p>March 25, 2024</p></div>
                    <div class="d-flex"><span class="start-time">Start time: </span><p>10:00 AM</p></div>
                    <div class="d-flex"><span class="end-date">End Date:</span><p>March 26, 2024</p></div> 
                </div>
         </div>

         <div>
             <div class="date-info">
             <div class="d-flex"><span class="start-end">End Time:</span><p> 10:00 PM</p></div>
             <div class="d-flex"><span class="quiz-date">Quiz Date Submitted: </span><p>March 26, 2024</p></div>
             <div class="d-flex"><span class="quiz-time">Quiz Time Submitted : </span><p>7:00 AM</p></div>
                </div>
         </div>

    </div>

     <div class="col d-flex quiz-taker-section">
         
        <div class="col-6 green-section">
          
        </div>   
        <div class="col-6 quiz-points">
            <h3 class="total-points">Quiz Total Points: 50</h3>
        </div> 
</div>   
        <div class="displayanswer">
 
   
<div class="quiz-info">
    <div class="title-box">
        <p class="title">Multiple Choice</p>
        <p class="points-multiple">Points: 5</p>
    </div>

</div>

<div class="divide-question">
    <div class="correct-questions">
    <div class="question">1. What is the language in Thailand?</div>
    <div class="correctpoints">Points:</div>
    <div class="points-numbers">0</div>
</div>
    <div class="answer-ab">
      <div id="wrong-answer" class="boxing"><div class="circle" id="red-letter">A</div><div class="answer-choice">Urdu</div>      <i class="fas fa-times animate" style="color: red;"></i></div> 
      <div class="boxing"><div class="circle" >B</div><div class="answer-choice">Germany</div></div>
    </div>
    <div class="answer-cd">
        <div class="boxing" id="correct"> <div  class="circle" id="correct-circle">C</div><div id="correct-choice" class="answer-choice">Thai</div><i class="fas fa-check animate" style="color: green;"></i></div>
        <div class="boxing">  <div  class="circle" >D</div><div class="answer-choice">French</div></div>
    </div>

</div>

<div class="divide-question">
    <div class="correct-questions">
    <div class="question">2.What is the language in India?</div>
    <div class="correctpoints">Points:</div>
    <div class="points-numbers">1</div>
</div>
    <div class="answer-ab">
      <div  class="boxing"><div class="circle">A</div><div class="answer-choice">French</div> </div> 
      <div class="boxing"><div class="circle" >B</div><div class="answer-choice">Bengali</div></div>
    </div>
    <div class="answer-cd">
        <div class="boxing" id="correct"> <div  class="circle" id="correct-circle1">C</div><div id="correct-choice" class="answer-choice">Hindi</div><i class="fas fa-check animate" style="color: green;"></i></div>
        <div class="boxing">  <div  class="circle" >D</div><div class="answer-choice">Urdu</div></div>
    </div>

</div>
 

<div class="quiz-info">
    <div class="title-box">
            <p class="title">Identification</p>
            <p class="points-multiple">Points: 10</p>
    </div>

</div>

<div class="identificationcon">
    <div class="halfidentification">
    <div class="divide-question1">
        <div class="question1">1.The author of "To Kill a Mockingbird."?</div>
        <div class="correctpoints">Points:</div>
        <div class="points-numbers">2</div>
</div> 
<div class="student-answer">
    <div class="identification-answer">
       <div>Lee<div class="fas fa-check check-icon identification-check"></div></div>
    </div>
</div>
</div>
</div>

<div class="identificationcon">
    <div class="halfidentification">
    <div class="divide-question1">
        <div class="question1">2. Who'sthe author of "Hamlet" Playwright?</div>
        <div class="correctpoints">Points:</div>
        <div class="points-numbers">0</div>
</div> 
<div class="student-answer" id="student-wrongr">
    <div class="identification-answer1">
        <div class="rome">Twain <div class="fas fa-times check-icon identification-wrong"></div></div>
    </div>
    <div class="correct-answer">
        <div class="check-answer">Correct answer:</div>
        <div class="rome">Shakespeare </div>
        <div class="fas fa-check check-icon" id="identification-correct"></div>
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

<div class="essay-container">
    <div class="question2">
    <div class="question3">
        <p class="question-number"> Question 1</p>
         <div class="correctpoints1">Points:</div>
         <div class="points-numbers1">8</div>
        </div>
        <p class="question-text">Explain the importance of studying languge in the world</p>
    </div>
    <div class="student-answer2">
        <p class="answer-text">It enable to communicate with one another seamlessly without languge barrier
            being the problem. It creates a bridge of understanding between humans with different background and language to come forth  and bring unity.
        </p>
    </div>
    <div class="rubrics">
          <h3>Weighted Score: <span id="weighted-score">7.5/10</span></h3>
        <div class="rubric-item">
            <p>Clarity and Depth of Analysis:</p>
            <span class="score">8/10</span>
        </div>
        <div class="rubric-item">
            <p>Evidence and Examples:</p>
            <span class="score">7/10</span>
        </div>
        <div class="rubric-item">
            <p>Organization and Structure:</p>
            <span class="score">9/10</span>
        </div>
        <div class="rubric-item">
            <p>Grammar and Spelling:</p>
            <span class="score">6/10</span>
        </div>
    </div>

    <button class="button">
       <a href="AcademAI-Assessment.-2.php"> <i class="icon fas fa-eye"></i> View Rubrics & Assessment</a>
        <span class="ripple-effect"></span>
    </button>
</div>

        </div>
    </div>

</body>
</html>