<!DOCTYPE html>

<!-- 
Exercise 02_03_01

Author: Charley Tran
Date: 9.19.18

CompareStrings.php 
-->

<html>

<head>
    <title>Compare Strings</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Compare Strings</h2>

    <!-- PHP starts here -->
    <?php

        // This creates 2 variables with strings.
        $firstString = "Geek2Geek";
        $secondString = "Geezer2Geek";

        // This checks to see if the 2 strings are the same or not. If it isn't, then it displays the amount of characters that are the same, and the amount of characters that are different. If one of the strings are empty, then it will say that it can't be compared.
        if (!empty($firstString) && !empty($secondString)) {
            if($firstString == $secondString) {
                echo "<p>Both strings are the same.</p>";
            } else {
                echo "<p>Both strings have " . similar_text($firstString, $secondString) . " characters(s) in common.</p>";
                echo "<p>You must change " . levenshtein($firstString, $secondString) . " character(s) to make the strings the same.</p>";
            }
        } else {
            echo "<p>Either the \$firstString variable or the \$secondString variable does not contain a value so the two strings cannot be compared</p>";
        }
        
    ?>
</body>

</html>