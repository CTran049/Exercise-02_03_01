<!DOCTYPE html>

<!-- 
Exercise 02_03_01

Author: Charley Tran
Date: 9.21.18

Presidents.php 
-->

<html>

<head>
    <title>Presidents</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Presidents</h2>

    <!-- PHP starts here -->
    <?php
        // This creates arrays with President names with their years in office.
        $presidents = array("George Washington",
                            "John Adams",
                            "Thomas Jefferson",
                            "James Madison",
                            "James Monroe");
        $yearsInOffice = array("1789 to 1797",
                                "1797 to 1801",
                                "1801 to 1809",
                                "1809 to 1817",
                                "1817 to 1825");
        
        // This displays the president name with their terms.
        $outputTemplate = "<p>President [NAME] served from [TERM]</p>\n";

        // This loops through the array.
        foreach($presidents as $sequence => $value) {
            $tempString = str_replace("[NAME]", $value, $outputTemplate);
            $outputString = str_replace("[TERM]", $yearsInOffice[$sequence], $tempString);
            echo $outputString;
        }
    ?>
</body>

</html>