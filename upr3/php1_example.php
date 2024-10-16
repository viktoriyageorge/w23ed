<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Intro to PHP</title>
</head>
<body>

    <h1>Welcome to PHP Embedded in HTML</h1>

    <p>This page is mostly HTML, but below we will display the current date using PHP:</p>

    <!-- This is where PHP starts inside an HTML file -->
    <p>Today's date is: 
        <?php 
            // PHP code that outputs the current date
            echo date("Y-m-d");
        ?>
    </p>

</body>
</html>
