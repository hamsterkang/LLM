<?php
    require_once('../include/extension_links.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/temporary_loading.css">
</head>
<body class="temporary_loading">
    <div class="container temporary_loading-container">
        <div class="row justify-content-center align-items-center mb-5">
            <div class="col-auto ">
                <div class="loader mb-5"></div>
            </div>
        </div>

        
        <div class="text-container-loading">
    <div class="row d-flex justify-content-center mt-5">
        <h1 class="waiting-result text-center">Please wait for the result</h1>


    <h1 class="checking-ai-generated text-center">Checking if it is AI generated</h1>
</div>
  
<div class="container-progress-report ">

   
            <div class="progress-container" role="progressbar"  aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar"></div>
            </div>
        </div>

            <div class="probability-info" style="display: none;">
                <p>The probability of a being AI generated: <span id="ai-probability">67%</span></p>
                <p>The probability of being human work: <span id="human-probability">20%</span></p>
                <p>Mixed: <span id="mixed-probability">13%</span></p>
            </div>
        
            <div class="text-container-loading-2">
                <div class="row d-flex justify-content-center mt-5">
                    <h1 class="check-plagiarism text-center">Checking if it is plagiarized from others work</h1>     
              
                </div>

            </div>

            <div class="copied-works">
                <p class="plagiarized-works text-center">You have copied a portion of your work from the subsequent individuals, 
                comprising 50% of your content.</p>
                <p class="plagiarized-works-1 text-center">Dela Cruz, Maxine A.</p>
                <p class="plagiarized-works text-center">Infante,Catrina A.</p>
            </div>
            

          
            <div class="text-container-loading-2">
                <div class="row d-flex justify-content-center mt-5">
                    <h1 class="check-plagiarism-internet text-center">Checking if it is plagiarized from the internet</h1>    
                </div>

                
            <div class="copied-works-internet">
                <p class="plagiarized-works-internet text-center">You have copied a portion of your work from the following online source, 
                comprising 50% of your content.</p>
            </div>
            <div class="copied-works-internet-links">
                <p class="plagiarized-works-1 text-center">1.https://www.ide.go.jp/English/Research/Project/2021/2021240005.html</p>
                <p class="plagiarized-works-1 text-center">2.https://edition.cnn.com/videos/world/2024/03/25/starlink-russia-ukraine-musk-npw-pkg-ebof-vpx.cnn</p>
                <p class="plagiarized-works-1 text-center">3.https://edition.cnn.com/2024/03/25/travel/china-south-east-asia-travel-train-infrastructure-intl-hnk/index.html</p>
            </div>
            
            
            <div class="text-container-loading-2">
                <div class="row d-flex justify-content-center mt-5">
                    <h1 class="check-rubrics text-center">Checking the essay based on the predefined rubrics</h1>    
                </div>
                <div class="checking-the-rubric">
                    <p class="rubrics text-center">1.AI Generated(15%):10%</p>
                    <p class="rubrics text-center">2.Plagarism (15%):5% </p>
                    <p class="rubrics text-center">3.Focus on Topic (Content)(40%):30%</p>
                    <p class="rubrics text-center">4.Sequencing (Organization)(10%):10%</p>
                    <p class="rubrics text-center">5.Commitment (Voice)(5%):3%</p>
                    <p class="rubrics text-center">6.Word Choice (5%):3%</p>
                    <p class="rubrics text-center">7.Sentence Structure (Sentence Fluency) (5%):2%</p>
                    <p class="rubrics text-center">8.Grammar and Spelling (Conventions) (5%):2%</p>
                    <p class="rubrics text-center">Total Points Earned:15 points out of 30 points</p>
                </div>

                   
          
                    <div class="row d-flex justify-content-center">
                        <h1 class="initiliazing-score text-center">Initializing your score</h1>    
                    </div>
    

<div id="score-card-modal" class="modal">
    <div class="modal-content">
        <div class="half-image">
            <img src="../img/modal/modal-img.gif" alt="First Image" style="width: 100%; height: 100%;">
        </div>
        <img src="../img/modal/modal-q-7.gif" alt="Circle Image" class="center-image"> <!-- Second Image (Circle Image) -->
        <form action="#">
        
        </form>
        <div class="submit-content">
            <p class="name-of-taker-done-quiz">Congratulations, Rhea Jenn, on completing the quiz!</p> <!-- Text -->   
            <p class="submit-text">Muliple Choice Total Points: 15/30</p> <!-- Text -->          
            <p class="submit-text">Identification Total Points: 10/30</p> <!-- Text -->  
            <p class="submit-text">Essay Total Points : 40/30</p> <!-- Text -->  
            <p class="submit-text">Total Score:35/90</p> <!-- Text -->  
            <a href="AcademAI-Activity-Completed-Activity-View.php" class="view-score-btn">View Score</a> <!-- Yes Button -->
        </div>
    </div>
</div>





    </div>
    <!-- Scripts -->
    <script src="../js/temporary_loading.js"></script>
</body>
</html>
