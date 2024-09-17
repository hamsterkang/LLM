

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.0/xlsx.full.min.js"></script>
    <link rel="stylesheet" href="../css/academAI-student-leaderboard.css">
</head>
<body>



    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search...">
        <button type="button" id="searchButton"><i class="fas fa-search"></i></button>
        <div class="filter-container">
            <div class="dropdown">
                <button class="filter-button" id="rankFilter">Rank</button>
                <div class="dropdown-content">
                    <a href="#">Highest to Lowest</a>
                    <a href="#">Lowest to Highest</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="filter-button" id="orderFilter">Order</button>
                <div class="dropdown-content">
                    <a href="#">Ascending</a>
                    <a href="#">Descending</a>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="leaderboard-title">Leaderboard</div>
<div class="download">
        <button id="downloadPdfButton">Download as PDF</button>
        <button id="downloadExcelButton">Download as Excel</button>
    </div>  
        <div class="table-responsive leaderboard-table">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th onclick="sortColumn('number')">Number</th>
                        <th onclick="sortColumn('rank')">Rank</th>
                        <th onclick="sortColumn('email')">Email</th>
                        <th onclick="sortColumn('name')">Name</th>
                        <th onclick="sortColumn('score')">Score</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1st</td>
                        <td>rhea178@gmail.com</td>
                        <td>Rhea Jenn A. Sala</td>
                        <td>50</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>2nd</td>
                        <td>kat123@gmail.com</td>
                        <td>Kathleen I. Santiago</td>
                        <td>49</td>
                       
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>3rd</td>
                        <td>rom30@gmail.com</td>
                        <td>Harolhette O. Rom</td>
                        <td>48</td>
                       
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>4th</td>
                        <td>aquinoirene023@gmail.com</td>
                        <td>Irene A. Aquino</td>
                        <td>45</td>
                      
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>5th</td>
                        <td>bllackberryx@gmail.com</td>
                        <td>Kristina Marie V. Gadem</td>
                        <td>44</td>
                       
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>6th</td>
                        <td>jerric567@gmail.com</td>
                        <td>Jerric C. Arenata</td>
                        <td>43</td>
                       
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>7th</td>
                        <td>dexter0869@gmail.com</td>
                        <td>Dexter D. Manait</td>
                        <td>42</td>
                       
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!-- JavaScript for sorting -->
    <script>
        function sortColumn(columnName) {
            // Implement sorting logic here
            alert('Sorting by ' + columnName);
        }

        document.getElementById("downloadPdfButton").addEventListener("click", function() {
    // Get the table element
    const table = document.getElementById("leaderboard-table");
    // Create a new jsPDF instance
    const pdf = new jsPDF();
    // Convert the table to a PDF
    pdf.autoTable({ html: table });
    // Save the PDF
    pdf.save("leaderboard.pdf");
});

document.getElementById("downloadExcelButton").addEventListener("click", function() {
    // Get the table element
    const table = document.getElementById("leaderboard-table");
    // Convert the table to a workbook
    const wb = XLSX.utils.table_to_book(table);
    // Save the workbook as an Excel file
    XLSX.writeFile(wb, "leaderboard.xlsx");
});
    </script>
</body>
</html>
