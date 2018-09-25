<!DOCTYPE html>

<!-- 
Exercise 02_03_01

Author: Charley Tran
Date: 9.20.18

PHPEmail.php 
-->

<html>

<head>
    <title>PHP Email</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>PHP Email</h2>

    <!-- PHP starts here -->
    <?php

        // This creates an array with example emails in them.
        $emailAddresses = array("john.smith@php.test",
                                "mary.smith.mail@php.example",
                                "john.jones@php.invalid",
                                "alan.smithee@test",
                                "jsmith456@example.com",
                                "jsmith456@test",
                                "mjones@example",
                                "mjones@example.net",
                                "jane.a.doe@example.org");

    // This functions tests to see if the email addresses are valid or not.
    function validateAddress($address) {
        if(strpos($address, '@') !== false && strpos($address, '.') !== false) {
            return true;
        } else {
            return false;
        }
    }

    // This loops a message for invalid emails.
    foreach($emailAddresses as $value) {
        if(validateAddress($value) === false) {
            echo "<p>The e-mail address <em>$value</em> does not appear to be valid.</p>";
        }
    }
    ?>
</body>

</html>