<?php
    require_once('../include/extension_links.php');
?>


<?php
  require_once '../include/academAI-sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/academAI-activity-upcoming-card.css">
    <script src="script.js" defer></script>
    <title>card</title>
</head>
<body>

<div class="mcq-container">
  <div class="mcq-container-2">

  <div class="search-container">
  <div class="icon-search"><i class="fas fa-search"></i></div>
        <input type="text" id="searchInput" placeholder="Type here...">
        <div class="search-btn-container"><button type="button" id="searchButton">Search</button></div>
        <div class="filter-container">
            <div class="dropdown">
            <div class="dropdown-month"><button class="filter-button" id="rankFilter">Month<i class="fa-solid fa-filter"></i></button></div>
                <div class="dropdown-content">
                    <a href="#">January</a>
                    <a href="#">February</a>
                    <a href="#">March</a>
                    <a href="#">April</a>
                    <a href="#">May</a>
                    <a href="#">June</a>
                    <a href="#">July</a>
                    <a href="#">August</a>
                    <a href="#">September</a>
                    <a href="#">October</a>
                    <a href="#">November</a>
                    <a href="#">December</a>
                </div>
            </div>
            <div class="dropdown">
            <div class="dropdown-year"><button class="filter-button" id="orderFilter">Yearly<i class="fa-solid fa-filter"></i></button></div>
                <div class="dropdown-content">
                    <a href="#">2021</a>
                    <a href="#">2022</a>
                    <a href="#">2023</a>
                    <a href="#">2024</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container card-con">
    <div class="label-for-card-page-library">
    <h1>UPCOMING</h1>
    </div>
    <div class="card" id="upcoming-card-modalBtn">
        <img src="../img/cards/4.jpg" alt="Card Image" class="card-image">
        
        <div class="icons1">
            <i class="fa-solid fa-right-from-bracket" data-bs-toggle="modal" data-bs-target="#leave--modal"></i>
            <i class="fas fa-copy copy-icon"></i>
        </div>
       
        <div class="title">
            <h2 class="card-title">World Capitals Trivia</h2>
        </div>

        <div class="title">
            <h2 class="card-title1">Geography</h2>
        </div>

        <div class="card-content">
            <div>
                <a href="AcademAI-Upcoming-People-Join.php" class="people-link"><i class="fas fa-users"></i> People who join</a>
            </div>
            <div class="start-end">
            <div class="start">
                <p class="card-description">Start Date: March 25, 2024</p>
                <p class="card-description">Start Time: 10:00 AM</p>
            </div>
            <div class="end">
                <p class="card-description">End Date: March 27, 2024</p>
                <p class="card-description">End Time: 12:00 PM</p>
            </div>
        </div>
    </div>
</div>


    <div class="card">
        <img src="../img/cards/3.jpg" alt="Card Image" class="card-image">
        
        <div class="icons1">
        <i class="fa-solid fa-right-from-bracket" data-bs-toggle="modal" data-bs-target="#leave--modal"></i>
            <i class="fas fa-copy copy-icon"></i>
        </div>
       
        <div class="title">
            <h2 class="card-title">Algebra Problem</h2>
        </div>

        <div class="title">
            <h2 class="card-title1">Mathematics</h2>
        </div>

        <div class="card-content">
            <div>
                <a href="#" class="people-link"><i class="fas fa-users"></i> People who join</a>
            </div>
            <div class="start-end">
            <div class="start">
                <p class="card-description">Start Date: March 31, 2024</p>
                <p class="card-description">Start Time: 11:00 AM</p>
            </div>
            <div class="end">
                <p class="card-description">End Date: March 31, 2024</p>
                <p class="card-description">End Time: 1:00 PM</p>
            </div>
        </div>
    </div>
</div>

    
   
</div>
    
    


<div id="upcoming-card-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="half-image">
            <img src="../img/modal/modal-9.gif" alt="First Image" style="width: 100%; height: 100%;">
        </div>
        <img src="../img/modal/modal-q-8.gif" alt="Circle Image" class="center-image"> <!-- Second Image (Circle Image) -->
        <form action="#">
        
        </form>
        <div class="submit-content">
            <p class="submit-text">This quiz will be availabe on March 25, 2024</p> <!-- Text -->
        </div>
    </div>
</div>


</div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="leave--modal"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="half-image">
            <img src="../img/modal/modal-15.gif" alt="First Image" style="width: 100%; height: 100%;">
        </div>
      
        <form action="#">
            <!-- Your form elements go here -->
        </form>
        <div class="submit-content">
            <p class="submit-text">Do you want to leave this quiz room?</p> <!-- Text -->
            <a href="AcademAI-Activity-Upcoming-Card.php" class="cancel-btn">No</a> <!-- Cancel Button -->
            <a href="AcademAI-Activity-Upcoming-Card.php" class="yes-btn">Yes</a> <!-- Yes Button -->
        </div>
    </div>
  </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function () {
        var myModal = new bootstrap.Modal(document.getElementById('leave--modal'), {
            keyboard: false
        });

        var closeButton = document.querySelector('#leave--modal .close');
        closeButton.addEventListener('click', function () {
            myModal.hide();
        });

        var cancelButton = document.querySelector('#leave--modal .cancel-btn');
        cancelButton.addEventListener('click', function () {
            myModal.hide();
        });

        var yesButton = document.querySelector('#leave--modal .yes-btn');
        yesButton.addEventListener('click', function () {
            // Add functionality for the "Yes" button if needed
            myModal.hide();
        });
    });
</script>
<script>// script.js
    document.addEventListener("DOMContentLoaded", function() {
        const monthlyFilter = document.getElementById("monthlyFilter");
        const yearlyFilter = document.getElementById("yearlyFilter");
    
        monthlyFilter.addEventListener("click", function() {
            monthlyFilter.classList.add("active");
            yearlyFilter.classList.remove("active");
            // Add logic to filter monthly
        });
    
        yearlyFilter.addEventListener("click", function() {
            yearlyFilter.classList.add("active");
            monthlyFilter.classList.remove("active");
            // Add logic to filter yearly
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
    const searchContainer = document.querySelector(".search-container");
    const cardContainer = document.querySelector(".container.card-con");
    let lastScrollTop = 0;

    cardContainer.addEventListener("scroll", function() {
        let scrollTop = cardContainer.scrollTop;
        if (scrollTop > lastScrollTop) {
            // Downscroll code
            searchContainer.style.opacity = "0"; // Hide the search container
        } else {
            // Upscroll code
            searchContainer.style.opacity = "1"; // Show the search container
        }
        lastScrollTop = scrollTop;
    });
});
    </script>




<script>
document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("upcoming-card-modal");
    const modalBtn = document.getElementById("upcoming-card-modalBtn");
    const closeModalBtn = document.querySelector(".close");
    const joinLinks = document.querySelectorAll(".people-link");
    const closeIcon = document.querySelector(".fa-right-from-bracket"); // Select the close icon

    // Function to open modal
    function openModal() {
        modal.style.display = "block";
    }

    // Function to close modal
    function closeModal() {
        modal.style.display = "none";
    }

    // Event listener for modal open button
    modalBtn.onclick = openModal;

    // Event listener for modal close button
    closeModalBtn.onclick = closeModal;

    // Event listener for clicks outside modal to close it
    window.onclick = function(event) {
        if (event.target == modal) {
            closeModal();
        }
    }

    // Event listener for each "People who join" link
    joinLinks.forEach(function(link) {
        link.addEventListener("click", function(event) {
            event.stopPropagation(); // Prevent event from bubbling up
        });
    });

    // Event listener for close icon
    closeIcon.addEventListener("click", function(event) {
        event.stopPropagation(); // Prevent event from bubbling up
    });
});

</script>
    
</body>
</html>
