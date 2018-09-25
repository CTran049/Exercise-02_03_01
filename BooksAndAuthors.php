<!DOCTYPE html>

<!-- 
Exercise 02_03_01

Author: Charley Tran
Date: 9.20.18

BooksAndAuthors.php 
-->

<html>

<head>
    <title>Books and Authors</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Books and Authors</h2>

    <!-- PHP starts here -->
    <?php

        // This creates an array with book names.
        $books = array("The Adventures of Huckleberry Finn", "Nineteen Eighty-four", "Alice's Adventures in Wonderland", "The Cat in the Hat");
        // This creates an array with author names.
        $authors = array("Mark Twain", "George Orwell", "Lewis Carroll", "Dr. Seuss");
        // This creates an array with the authors real names.
        $realNames = array("Samuel Clemens", "Eric Blair", "Charles Dodson", "Theodor Geisel");
        // This creates a for loop to display the books, the authors, and their real names.
        for($i = 0; $i < count($books); $i++) {
            echo "<p>The real name of {$authors[$i]}, " . "the author of \"{$books[$i]}\", " . "is {$realNames[$i]}.</p>";
        } for($i = 0; $i < count($books); $i++) {
            echo "<p>The title \"{$books[$i]}\" contains " . strlen($books[$i]) . " characters and " . str_word_count($books[$i]) . " words.</p>";
        }
        echo "<h2>Manipulating Text</h2>";
        // This creates a string. 
        $startingText = "mAdAm, i'M aDaM";
        // Everything here displays the string in different ways.
        $uppercaseText = strtoupper($startingText);
        $lowercaseText = strtolower($startingText);
        echo "<p>$uppercaseText</p>\n";
        echo "<p>$lowercaseText</p>\n";
        echo "<p>" . ucfirst($lowercaseText) . "</p>\n";
        echo "<p>" . lcfirst($uppercaseText) . "</p>\n";
        $workingText = ucwords($lowercaseText);
        echo "<p>$workingText</p>\n";
        echo "<h2>Other Manipulations</h2>";
        echo "<p>" . md5($workingText) . "</p>\n";
        echo "<p>" . substr($workingText, 0, 6) . "</p>\n";
        echo "<p>" . substr($workingText, 7) . "</p>\n";
        echo "<p>" . strrev($workingText) . "</p>\n";
        echo "<p>" . str_shuffle($workingText) . "</p>\n";
    ?>
</body>

</html>