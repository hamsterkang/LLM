document.addEventListener("DOMContentLoaded", function() {
    // Set a timeout to show the breathing text after 3 seconds
    setTimeout(function() {
        // Display the breathing text
        document.querySelector('.checking-ai-generated').style.display = 'block';
        // Hide the temporary loading
        document.querySelector('.waiting-result').style.display = 'none';
    }, 3000); // 3 seconds delay for showing "Checking if it is AI generated" after hiding loader and waiting result

    // Set a timeout to hide the loader and show the progress bar after 6 seconds
    setTimeout(function() {
        // Hide the loader
        document.querySelector('.loader').style.display = 'none';
        document.querySelector('.checking-ai-generated').style.display = 'none';
        // Show the progress bar and probability info
        document.querySelector('.progress-container').style.display = 'block';
        document.querySelector('.probability-info').style.display = 'none';
    }, 6000); // 6 seconds delay after hiding loader and waiting result

     // Set a timeout to hide the loader and show the progress bar after 6 seconds
     setTimeout(function() {
        // Show the progress bar and probability info
        document.querySelector('.probability-info').style.display = 'block';
    }, 9000); // 6 seconds delay after hiding loader and waiting result

    // Set a timeout to hide the loader and show the progress bar after 6 seconds
    setTimeout(function() {
        // Show the progress bar and probability info
        document.querySelector('.loader').style.display = 'block';
        document.querySelector('.progress-container').style.display = 'none';
        document.querySelector('.probability-info').style.display = 'none';
        document.querySelector('.check-plagiarism').style.display = 'block';
    }, 12000); // 6 seconds delay after hiding loader and waiting result

    setTimeout(function() {
        // Show the progress bar and probability info
        document.querySelector('.loader').style.display = 'none';
        document.querySelector('.check-plagiarism').style.display = 'none';
        document.querySelector('.copied-works').style.display = 'block';
    
    }, 15000); // 6 seconds delay after hiding loader and waiting result

    setTimeout(function() {
        // Show the progress bar and probability info
        document.querySelector('.loader').style.display = 'block';
        document.querySelector('.copied-works').style.display = 'none';
        document.querySelector('.check-plagiarism-internet').style.display = 'block';
    
    }, 18000); // 6 seconds delay after hiding loader and waiting result

    setTimeout(function() {
        // Show the progress bar and probability info
        document.querySelector('.loader').style.display = 'none';
        document.querySelector('.check-plagiarism-internet').style.display = 'none';
        document.querySelector('.copied-works-internet').style.display = 'block';
        document.querySelector('.copied-works-internet-links ').style.display = 'block';
    
    }, 21000); // 6 seconds delay after hiding loader and waiting result

    setTimeout(function() {
        // Show the progress bar and probability info
        document.querySelector('.loader').style.display = 'block';
        document.querySelector('.copied-works-internet').style.display = 'none';
        document.querySelector('.copied-works-internet-links ').style.display = 'none';
        document.querySelector('.check-rubrics ').style.display = 'block';
    }, 23000); // 6 seconds delay after hiding loader and waiting result

    
    setTimeout(function() {
        // Show the progress bar and probability info
        document.querySelector('.checking-the-rubric').style.display = 'block';
        document.querySelector('.rubrics').style.display = 'block';

        // Typing effect for rubrics
        typeWriterEffect();
    }, 25000); // 6 seconds delay after hiding loader and waiting result

    setTimeout(function() {
        // Show the progress bar and probability info
        document.querySelector('.rubrics').style.display = 'none';
        document.querySelector('.checking-the-rubric').style.display = 'none';
        document.querySelector('.check-rubrics').style.display = 'none';
        document.querySelector('.initiliazing-score').style.display = 'block';
    }, 61000); // 6 seconds delay after hiding loader and waiting result


    setTimeout(function() {
        // Show the progress bar and probability info
        document.querySelector('.loader').style.display = 'none';
        document.querySelector('.initiliazing-score').style.display = 'none';
        var myModal = new bootstrap.Modal(document.getElementById('score-card-modal'));
        myModal.show();
    }, 64000); // 6 seconds delay after hiding loader and waiting result
    
    
    // This line seems to be an error, remove it:
    // initializing
    });
    
    // Remove this extra parenthesis:
    // });
    
    function typeWriterEffect() {
        const rubrics = document.querySelectorAll('.rubrics');
        let index = 0;
        let charIndex = 0;
        let interval;
    
        function typeWriter() {
            const text = rubrics[index].innerText;
            rubrics[index].innerText = ''; // Clear the text content
            rubrics[index].style.display = 'block'; // Display the current paragraph
    
            interval = setInterval(() => {
                rubrics[index].textContent += text[charIndex];
                charIndex++;
                if (charIndex === text.length) {
                    clearInterval(interval);
                    charIndex = 0;
                    index++;
                    if (index < rubrics.length) {
                        typeWriter(); // Start typing the next paragraph
                    }
                }
            }, 100); // Change the interval value to adjust the speed of typing
        }
    
        // Hide all paragraphs initially
        rubrics.forEach(p => p.style.display = 'none');
    
        // Start typing effect for the first paragraph
        typeWriter();
    }
    
