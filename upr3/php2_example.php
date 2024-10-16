<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Color List with PHP</title>
</head>
<body>

    <h1>Basic Colors</h1>

    <ul>
        <?php
            // Define an array of basic colors
            $colors = ["Red", "Green", "Blue", "Yellow", "Black", "White", "Purple", "Orange"];

            // Loop through the array and generate list items
            foreach ($colors as $color) {
                echo "<li>$color</li>";
            }
        ?>
    </ul>

</body>
</html>
