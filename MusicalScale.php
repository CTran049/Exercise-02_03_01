<!DOCTYPE html>

<!-- 
Exercise 02_03_01

Author: Charley Tran
Date: 9.19.18

MusicalScale.php 
-->

<html>

<head>
    <title>Musical Scale</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Musical Scale</h2>

    <!-- PHP starts here -->
    <?php
        // This creates an array with the musical scale.
        $musicalScale = array("do", "re", "me", "fa", "so", "la", "ti", "do");
        // This loops and displays the musical scale with a space in between them.
        $outputString = "The notes of the musical scale are: ";
        foreach($musicalScale as $currentNote) {
            $outputString .= " " . $currentNote;
        }
        echo "<p>$outputString</p>";
    ?>
    <h2>Formatted Text</h2>
    <?php
        // This tests new lines.
        $displayVariable = 9.876;
        echo "<pre>\n";
        echo "Unformatted text line 1. \r\n";
        echo "Unformatted text line 2. \r\n";
        echo "\$displayVariable = $displayVariable";
        echo "</pre>\n";
    ?>
</body>

</html>