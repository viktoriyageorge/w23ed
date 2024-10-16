<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basic Colors with PHP and GET</title>
</head>
<body>

    <h1>Basic Colors</h1>

    <!-- Link to trigger the GET request -->
    <a href="php3_example.php?showcolors=true">Click to show the list of colors</a>

    <ul>
        <?php
            // Define an array of basic colors
            $colors = ["Red", "Green", "Blue", "Yellow", "Black", "White", "Purple", "Orange"];

            // Check if the 'showcolors' parameter is set in the URL
            if (isset($_GET['showcolors']) && $_GET['showcolors'] == 'true') {
                // Use foreach to display all colors
                foreach ($colors as $color) {
                    echo "<li>$color</li>";
                }
            }
        ?>
    </ul>

</body>
</html>
