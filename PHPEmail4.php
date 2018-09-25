<!DOCTYPE html>

<!-- 
Exercise 02_03_01

Author: Charley Tran
Date: 9.20.18

PHPEmail4.php 
-->

<html>

<head>
    <title>PHP Email 4</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>PHP Email 4</h2>

    <!-- PHP starts here -->
    <?php
        // This creates an array with example emails.
        $emailAddresses = array("john.smith@php.test",
                                "mary.smith.mail@php.example",
                                "john.jones@php.invalid",
                                "alan.smithee@test",
                                "jsmith456@example.com",
                                "jsmith456@test",
                                "mjones@example",
                                "mjones@example.net",
                                "jane.a.doe@example.org");

        // This function sorts the email addresses, and displays them.
        function sortAddresses($addresses) {
            $sortedAddresses = array();
            $ilimit = count($addresses) - 1;
            $jlimit = count($addresses);
            for($i = 0; $i < $ilimit; $i++) {
                $currentAddress = $addresses[$i];
                for($j = $i + 1; $j < $jlimit; $j++) {
                    if(strcasecmp($currentAddress, $addresses[$j]) > 0) {
                        $tempVal = $addresses[$j];
                        $addresses[$j] = $currentAddress;
                        $currentAddress = $tempVal;
                    }
                }
                $sortedAddresses[] = $currentAddress;
            }
            return($sortedAddresses);
        }

        $sortedAddresses = sortAddresses($emailAddresses);
        $sortedAddressList = implode(", ", $sortedAddresses);
        echo "<p>Sorted Addresses: $sortedAddressList</p>\n";

        // This function uses regex to test if the emails are valid or not.
        function validateAddress($address) {
            if (preg_match("/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[w-]+)*(\.[A-Za-z]{2,})$/i", $address) == 1) {
                return true;
            } else {
                return false;
            }
        }

        foreach($sortedAddresses as $value) {
            if(validateAddress($value) === false) {
                echo "<p>The e-mail address <em>$value</em> does not appear to be valid.</p>";
            }
        }
    ?>
</body>

</html>