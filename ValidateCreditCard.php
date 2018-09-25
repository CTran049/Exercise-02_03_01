<!DOCTYPE html>

<!-- 
Exercise 02_03_01

Author: Charley Tran
Date: 9.19.18

ValidateCreditCard.php 
-->

<html>

<head>
    <title>Validate Credit Card</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Validate Credit Card</h2>

    <!-- PHP starts here -->
    <?php

        // This creates an array with credit card numbers.
        $creditCard = array("", 
                    "8910-1234-5678-6543",
                    "OOOO-9123-4567-0123");
        
        // This loops and checks to see if it has or is missing specific characters to see if it's valid. It then displays the numbers explaining why the results are invalid.
        foreach($creditCard as $indexNumber => $cardNumber) {
            if(empty($cardNumber)) {
                echo "<p>Credit Card Number $indexNumber is invalid because it contains an empty string.</p>";
            } else {
                $creditCardNumber = $cardNumber;
                $creditCardNumber = str_replace("-", "", $creditCardNumber);
                $creditCardNumber = str_replace(" ", "", $creditCardNumber);
                echo "<p>Credit Card Number $indexNumber $creditCardNumber removed dashes and spaces.</p>";
                if(!is_numeric($creditCardNumber)) {
                    echo "<p>Credit Card Number $indexNumber $creditCardNumber is invalid because it contains a non-numeric number.</p>";
                } else {
                    echo "<p>Credit Card Number $indexNumber $creditCardNumber is a valid Credit Card Number.</p>";
                }
            }
        }
    ?>
</body>

</html>