<!DOCTYPE html>

<!-- 
Exercise 02_03_01

Author: Charley Tran
Date: 9.21.18

Presidents2.php 
-->

<html>

<head>
    <title>Presidents 2</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Presidents 2</h2>

    <!-- PHP starts here -->
    <?php

        // This loops and displays the president names.
        $presidents = "George Washington;John Adams;Thomas Jefferson;James Madison;James Monroe;";
        $thisPresident = strtok($presidents, ";");
        while($thisPresident != NULL) {
            echo "$thisPresident<br>";
            $thisPresident = strtok(";");
        }
    ?>
</body>

</html>