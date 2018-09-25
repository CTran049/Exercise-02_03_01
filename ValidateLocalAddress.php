<!DOCTYPE html>

<!-- 
Exercise 02_03_01

Author: Charley Tran
Date: 9.19.18

ValidateLocalAddress.php 
-->

<html>

<head>
    <title>Validate Local Address</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Validate Local Address</h2>

    <!-- PHP starts here -->
    <?php

        // This makes an array with example emails in it.
        $email = array("jsmith123@example.org",
                "john.smith.mail@example.org",
                "john.smith@example.org",
                "john.smith@example",
                "jsmith123@mail.example.org");

        // This loops and checks to see if the emails are valid or not by using regex. It will then display the email with a message saying if it's valid or not.
        foreach($email as $emailAddress) {
            echo "The email address &ldquo;" . $emailAddress . "&rdquo; ";
            if(preg_match("/^(([A-Za-z]+\d+)|" . "([A-Za-z]+\.[A-Za-z]+))" . "@((mail\.)?)example\.org$/i", $emailAddress) == 1) {
                echo " is a valid e-mail address.<br>";
            } else {
                echo " is not a valid e-mail address.<br>";
            }
        }
    ?>
</body>

</html>