<?php
    require_once('../include/extension_links.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/academAI-library-upcoming-view-card.css">
    <title>Document</title>
</head>
<body>

   

<div class="mcq">

<div class ="">
    <a href="AcademAI-Library-Completed-Card.php">
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
        
        <a href="AcademAI-Completed-People-Join-LeaderBoard.php" class="custom-leaderboard-link">
                <i class="fas fa-trophy animated custom-leaderboard-icon">Leaderboard</i>
        </a>
</div>



<div class="divide-content">
<div class="author-descript">
            <div class="author-info">  
                <div class="d-flex justify-content-start">
                <p class="title-quiz">Quiz Title:</p>
                <p class="the-title-quiz"> Ancient Civilizations Quiz</p>
                </div>
                </div>
                <div class="d-flex">
                <p class="descrip">Description:</p>
                     <p class="the-descrip">Knowledge of ancient history!</p>
                </div>  

                <div class="d-flex">
                <p class="subject">Subject:</p>
                <p class="the-subject">History</p>
                </div>               
</div>  

            
 <div>

             <div class="date-info">
                <div class="date-info-2">
                <div class="d-flex ">
                <span class="startdate">Start Date:</span>
                <span class="the-startdate">April 11, 2024</span>         
                </div>

                <div class="d-flex ">
                <span class="starttime">Start time:</span>
                <span class="the-starttime">10:AM</span>
                </div>

        

                </div>
                <div class="date-info-3">
                <div class="d-flex ">
                <span class="enddate">End Date:</span>
                <span class="the-enddate"> April 12, 2024</span>
                </div>
                <div class="d-flex">
                <span class="endtime">End Time:</span>
                <span class="the-endtime">10:00 Pm</span>
</div> 
                </div>
            
         </div>
       
    </div>
    <div class="restriction">
           <input type="checkbox" class="form-check-input" id="randomized-checkbox-restriction" checked>
            <p class="restriction-title">Restriction:</p>
            <p class="restriction-titles" >Close quiz after due time</p>
    </div>
</div>
<div class="col d-flex quiz-taker-section">
         
         <div class="col-6 green-section">
           
         </div>   
         <div class="col-6 quiz-points">
             <h3 class="total-points">Quiz Total Points: 50</h3>
         </div> 
 </div>   



    <div class="container useranswer">
        <div class="displayanswer">

        <div class="edit-delete-sections">
            <div class="edit-delete-leaderboard-section">   
            <a href="#" id="library-completed-edit-modalBtn"class="edit"data-bs-toggle="modal" data-bs-target="#edit-card-modal"> <i class="fas fa-edit"></i></a>
            <a href="#" class="delete"> <i class="fas fa-trash-alt"></i></a>
            <a href="#" class="copy-link"> <i class="fa-solid fa-link"></i></a>
            <a href="#" class="recycle"> <i class="fa-solid fa-recycle"></i></a>
            </div>
   </div>
        


<div class="quiz-info-multiple">
<div class="title-box">
        <p class="title">Multiple Choice</p>
        <p class="points-multiple">Points: 5</p>
    </div>
</div>


<div class="divide-question">

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
 <input type="number" id="num-points" name="num-points" min="1"placeholder="1 Point" required>
</div>
<div class="numpoints"><p>/*Note:This will apply to all the items*/</p></div>


<div class="form-check ">
<div class="row mt-5 mb-4">
    <label class="col-auto" for="randomized-checkbox">Would you like to send this in randomized order?</label>
    <div class="col-auto">
        <input type="checkbox" class="form-check-input" id="randomized-checkbox" checked>
    </div>
</div>
</div>




</div>
</div> 
 
<div class="container-fluid typequestionall">

<div class="container-fluid typequestion">
    <div class="input-wrapper dropdownminute">
        <div class="input-box">
            <input type="text" id="question" placeholder="Which ancient civilization is credited with the invention of writing?" name="question">
            <span class="number">1.</span> <!-- Number inside the box -->
        </div>
    </div>
</div>


<div class="container typequestion">
<div class="input-wrapper dropdownminute">
    <div class="dropdown">
        <input type="number" placeholder="30" id="time-limit" name="time-limit" min="0">
        <select name="time-limit-unit" id="time-limit-unit">
            <option value="seconds">seconds</option>
            <option value="minutes">minutes</option>
          
        </select>
    </div>
</div>
<div class="input-wrapper dropdownminute">
    <input type="number" id="points" placeholder="1 Point" name="points" min="0">
</div>
</div>



<div class="container-fluid typequestionhere">
        <div class="input-wrapper answercon">
            <div class="input-box">
                <input type="text" id="answerchoice" placeholder="       Mesopotamia" name="question">
                <div class="letter-inside">A</div> <!-- Letter inside the box -->
                <div class="check-icon">
                <i class="fa-solid fa-check"></i>
</div>
            </div>
        </div> 

    <div class="input-wrapper answercon">
        <div class="input-box">
            <input type="text" id="answerchoice" placeholder="       Ancient Egypt" name="question">
            <div class="letter-inside">B</div> <!-- Letter inside the box -->
            <div class="icon-container">
               
            </div>
        </div>
    </div> 

    <div class="input-wrapper answercon">
        <div class="input-box">
            <input type="text" id="answerchoice" placeholder="       Indus Valley Civilization" name="question">
            <div class="letter-inside">C</div> <!-- Letter inside the box -->
            <div class="icon-container">
                
            </div>
        </div>
    </div> 

    <div class="input-wrapper answercon">
        <div class="input-box">
            <input type="text" id="answerchoice" placeholder="       Ancient China" name="question">
            <div class="letter-inside">D</div> <!-- Letter inside the box -->
            <div class="icon-container">
             
            </div>
        </div>
    </div> 

  
</div>

</div>

<div class="container-fluid typequestionall">

    <div class="container-fluid typequestion">
        <div class="input-wrapper dropdownminute">
            <div class="input-box">
                <input type="text" id="question" placeholder="Who was the first emperor of the Roman Empire?" name="question">
                <span class="number">2.</span> <!-- Number inside the box -->         
            </div>
        </div>
    </div>

    
    <div class="container typequestion">
<div class="input-wrapper dropdownminute">
    <div class="dropdown">
        <input type="number" placeholder="30" id="time-limit" name="time-limit" min="0">
        <select name="time-limit-unit" id="time-limit-unit">
             <option value="seconds">seconds</option>
            <option value="minutes">minutes</option>
           
        </select>
    </div>
</div>
<div class="input-wrapper dropdownminute">
    <input type="number" id="points" placeholder="1 Point" name="points" min="0">
</div>
</div>
    <div class="container-fluid typequestionhere">
        <div class="input-wrapper answercon">
            <div class="input-box">
                <input type="text" id="answerchoice" placeholder="       Julius Caesar" name="question">
                <div class="letter-inside">A</div> <!-- Letter inside the box -->
                <div class="icon-container">
                   
                </div>
            </div>
        </div> 

        <div class="input-wrapper answercon">
            <div class="input-box">
                <input type="text" id="answerchoice" placeholder="       Augustus" name="question">
                <div class="letter-inside">B</div> <!-- Letter inside the box -->
                <div class="check-icon">
                <i class="fa-solid fa-check"></i>
                </div>
            </div>
        </div> 

        <div class="input-wrapper answercon">
            <div class="input-box">
                <input type="text" id="answerchoice" placeholder="       Alexander the Great" name="question">
                <div class="letter-inside">C</div> <!-- Letter inside the box -->
                <div class="icon-container">
                   
                </div>
            </div>
        </div> 

        <div class="input-wrapper answercon">
            <div class="input-box">
                <input type="text" id="answerchoice" placeholder="       Constantine the Great" name="question">
                <div class="letter-inside">D</div> <!-- Letter inside the box -->
                <div class="icon-container">
                    
                </div>
            </div>
        </div> 

       
</div>

    </div>

    <div class="container-fluid typequestionall">

        <div class="container-fluid typequestion">
            <div class="input-wrapper dropdownminute">
                <div class="input-box">
                    <input type="text" id="question" placeholder="Who was the first female pharaoh of Ancient Egypt?" name="question">
                    <span class="number">3.</span> <!-- Number inside the box -->
              
                </div>
            </div>
        </div>
    
        
        <div class="container typequestion">
<div class="input-wrapper dropdownminute">
    <div class="dropdown">
        <input type="number" placeholder="30" id="time-limit" name="time-limit" min="0">
        <select name="time-limit-unit" id="time-limit-unit">
           <option value="seconds">seconds</option>
            <option value="minutes">minutes</option>
         
        </select>
    </div>
</div>
<div class="input-wrapper dropdownminute">
    <input type="number" id="points" placeholder="1 point" name="points" min="0">
</div>
</div>
        <div class="container-fluid typequestionhere">
            <div class="input-wrapper answercon">
                <div class="input-box">
                    <input type="text" id="answerchoice" placeholder="       Cleopatra VII" name="question">
                    <div class="letter-inside">A</div> <!-- Letter inside the box -->
                    <div class="icon-container">
                       
                    </div>
                </div>
            </div> 
    
            <div class="input-wrapper answercon">
                <div class="input-box">
                    <input type="text" id="answerchoice" placeholder="       Nefertiti" name="question">
                    <div class="letter-inside">B</div> <!-- Letter inside the box -->
                    <div class="icon-container">
                    </div>
                </div>
            </div> 
    
            <div class="input-wrapper answercon">
                <div class="input-box">
                    <input type="text" id="answerchoice" placeholder="       Hatshepsut" name="question">
                    <div class="letter-inside">C</div> <!-- Letter inside the box -->
                    <div class="check-icon">
                <i class="fa-solid fa-check"></i>

                    </div>
                </div>
            </div> 
    
            <div class="input-wrapper answercon">
                <div class="input-box">
                    <input type="text" id="answerchoice" placeholder="       Ankhesenamun" name="question">
                    <div class="letter-inside">D</div> <!-- Letter inside the box -->
                    <div class="icon-container">
                        
                    </div>
                </div>
            </div> 
</div>
</div>


 

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


<div class="form-check ">
<div class="row mt-5 mb-4">
    <label class="col-auto" for="randomized-checkbox">Would you like to send this in randomized order?</label>
    <div class="col-auto">
        <input type="checkbox" class="form-check-input" id="randomized-checkbox" checked>
    </div>
</div>
</div>
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


<div class="container-fluid typequestionall-identification">

    <div class="container-fluid typequestion-identification">
        <div class="input-wrapper dropdownminute">
            <div class="input-box-identification">
                <input type="text" id="question-identification" placeholder="Who led the Bolshevik Revolution in Russia in 1917?" name="question">
                <span class="number-identification">2.</span> <!-- Number inside the box -->
            </div>
        </div> 

        <div class="container typequestionhere-identification">
            <div class="input-wrapper dropdownminute-identification">
                <div class="dropdown">
                    <input type="number" placeholder="30" id="time-limit-identification" name="time-limit" min="0">
                    <select name="time-limit-unit-identification" id="time-limit-unit-identification">
                        <option value="seconds">seconds</option>
                        <option value="minutes">minutes</option>
                    </select>
                </div>
            </div>
         
                <div class="input-wrappe dropdownminute">
                    <input type="number" id="points-identification" placeholder="2 Points" name="points" min="0">
            </div>
        </div>
        <div class="input-wrapper  dropdownminute-identification">
            <div class="input-box-identification">
                <input type="text" id="answer-identification" placeholder="Answer:Vladimir Lenin" name="answer">
            </div>
        </div>
    </div>
 

</div>


<div class="container-fluid typequestionall-identification">

    <div class="container-fluid typequestion-identification">
        <div class="input-wrapper dropdownminute">
            <div class="input-box-identification">
                <input type="text" id="question-identification" placeholder="Who was the first female Prime Minister of the United Kingdom?" name="question">
                <span class="number-identification">3.</span> <!-- Number inside the box -->
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
                <input type="text" id="answer-identification" placeholder="Answer: Margaret Thatcher" name="answer">
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
                            <input type="number" id="time-limit-minutes" name="time-limit-minutes" min="0" required style="width: 73%;">
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
                        <label for="num-quiz">Number of Quiz:</label>
                        <input type="number" id="num-quiz" name="num-quiz" min="1" required>
                    </div>
                   
                    <div class="input-group number-of-quiz">
                        <label for="num-points">Points per Item:</label>
                        <input type="number" id="num-points" name="num-points" min="1" required>
                    </div>
                </div>
                <div class="numpoints-2"><p>/*Note:This will apply to all the items*/</p></div>


                        <label for="limit-word">Word Limit</label>
                        <div class="input-group word-limit-count">
                            
                        <label for="minimum">Minimum:</label>
                        <input type="number" id="minimum" name="limit-word" min="1" required>
                        <label for="maximum">Maximum:</label>
                        <input type="number" id="maximum" name="limit-word" min="1" required>
                    </div>



<div class="form-check-2 ">
<div class="row mt-5 mb-4">
    <label class="col-auto" for="randomized-checkbox-essay">Would you like to send this in randomized order?</label>
    <div class="col-auto">
        <input type="checkbox" class="form-check-input" id="randomized-checkbox" checked>
    </div>
</div>
</div>
</div>


<div class="container-fluid typequestionall-essay">
                <div class="container-fluid typequestion-essay">
                    <div class="input-wrapper dropdownminute">
                        <div class="input-box-essay">
                            <input type="text" id="question-essay" placeholder="Discuss the causes and consequences of the French Revolution." name="question">
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
                        <p id="answer-essay"> The French Revolution, which began in 1789, was fueled by a combination of social, political, and economic factors.Socioeconomic inequality, high taxation, and widespread discontent among the lower classes created a fertile ground for revolution.Additionally, Enlightenment ideals such as liberty, equality, and fraternity inspired revolutionary fervor.The revolution led to the overthrow of the monarchy, the establishment of a republic, and radical social and political changes, including the Reign of Terror.However, it also resulted in internal divisions, external conflicts, and the rise of Napoleon Bonaparte, who eventually seized power and established himself as Emperor.</p>

                        </div>
                    </div>
        
                    <div class="orupload">
                        <h3>or</h3>
                    </div>
                    <div class="form-group fileupload">
                        <label class="colcontrol-label">
                            Attachment(s) You can upload your files here
                        </label>
                        <div class="file-input-wrapper">
                            <button id="upload-btn">Upload File</button>
                            <input id="input-2" name="input2[]" type="file" class="file" multiple>
                        </div>
                        
                    </div>
                </div>
            </div>




            
<div class="container-fluid typequestionall-essay">
                <div class="container-fluid typequestion-essay">
                    <div class="input-wrapper dropdownminute">
                        <div class="input-box-essay">
                            <input type="text" id="question-essay" placeholder="Analyze the impact of colonialism on indigenous populations." name="question">
                            <span class="number-essay">2.</span>
                            <span class="rubric-icon"><a href="AcademAI-Set-Essay-Rubric.php" class="rubric-link">Set Rubrics</a></span>
                        </div>
                    </div> 
                    <div class="container typequestionhere-essay">
                        <div class="input-wrapper dropdownminute-essay">
                            <div class="dropdown">
                                <input type="number" placeholder="5 " id="time-limit-essay" name="time-limit" min="0">
                                <select name="time-limit-unit" id="time-limit-unit-essay">
                                    <option value="minutes">minutes</option>
                                    <option value="seconds">seconds</option>
                                </select>
                            </div>
                        </div>
                    
                            <div class="input-wrappe dropdownminute">
                                <input type="number" id="points-essay" placeholder="5 Points" name="points" min="0">
                            </div>
                        </div>

                        <div class="word-limit-per">
                                <input type="number" id="minimum-per" placeholder="minimum word limit" name="limit-word" min="1" required>
                                <input type="number" id="maximum-per" placeholder="maximum word limit" name="limit-word" min="1" required>
                                </div>

                    <div class="input-wrapper dropdownminute">
                        <div class="input-box">
                        <p id="answer-essay2"> Colonialism had profound and often devastating effects on indigenous populations around the world. European powers exploited natural resources, imposed forced labor, and enforced discriminatory policies that marginalized indigenous peoples. Cultural practices were suppressed, languages were eradicated, and traditional ways of life were disrupted. </p>
                        </div>
                    </div>
        
                    <div class="orupload">
                        <h3>or</h3>
                    </div>
                    <div class="form-group fileupload">
                        <label class="colcontrol-label">
                            Attachment(s) You can upload your files here
                        </label>
                        <div class="file-input-wrapper">
                            <button id="upload-btn">Upload File</button>
                            <input id="input-2" name="input2[]" type="file" class="file" multiple>
                        </div>
                        
                    </div>
                </div>
            </div>



            
<div class="container-fluid typequestionall-essay">
                <div class="container-fluid typequestion-essay">
                    <div class="input-wrapper dropdownminute">
                        <div class="input-box-essay">
                            <input type="text" id="question-essay" placeholder="How did the Renaissance impact modern society?" name="question">
                            <span class="number-essay">3.</span>
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
</div>
</div>



<!-- Modal -->
<div class="modal fade" id="edit-card-modal"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
            <a href="AcademAI-Library-Completed-View-Card.php" class="close">&times;</a>
        <div class="half-image">
            <img src="../img/modal/modal-2.jpg" alt="First Image" style="width: 100%; height: 100%;">
        </div>
        <img src="../img/modal/modal-1.jpg" alt="Circle Image" class="center-image"> <!-- Second Image (Circle Image) -->
        <form action="#">
        
        </form>
        <div class="submit-content">
            <p class="submit-text">Choose what type of quiz to edit</p> <!-- Text -->
            <div class="choose-edit">
            <div class="choose-edit-quiz">
    <label for="checkbox-editquiz-1"> <!-- Add label for the first checkbox -->
        <input type="checkbox" class="form-check-input" id="checkbox-editquiz-1">
       MCQ <!-- Label text for the first checkbox -->
    </label>
</div>
<div class="choose-edit-quiz">
    <label for="checkbox-editquiz-2"> <!-- Add label for the second checkbox -->
        <input type="checkbox" class="form-check-input" id="checkbox-editquiz-2">
        Identification<!-- Label text for the second checkbox -->
    </label>
</div>
<div class="choose-edit-quiz">
    <label for="checkbox-editquiz-3"> <!-- Add label for the third checkbox -->
        <input type="checkbox" class="form-check-input" id="checkbox-editquiz-3">
        Essay <!-- Label text for the third checkbox -->
    </label>
    <a href="AcademAI-Edit-Quiz-Essay.php" class="yes-btn"><i class="fas fa-arrow-right"></i></a>
</div>
</div>


        </div>
    </div>
  </div>
</div>


</body>
</html>

</body>
</html>


