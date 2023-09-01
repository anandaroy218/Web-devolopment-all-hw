<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Ternary Operations</title>
    <style>
        /* Common styles for all condition divs */
        .condition {
            margin: 20px auto;
            width: 200px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 75%/25%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            background-color: greenyellow;
            padding: 2rem;
            border-bottom-width: 15px;
            border-top-width: 15px;
            cursor: pointer;
            animation: rotate 4s linear;
            /* Rotate continuously for 4 seconds */
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
                /* Start with no rotation */
            }

            to {
                transform: rotate(360deg);
                /* Rotate to 360 degrees (full circle) */
            }
        }



        .condition p {
            font-size: large;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

        }

        .condition h1 {
            font-size: large;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            border-bottom: 2px solid red;
            padding: 2px;
        }

        .valid {
            color: green;
        }

        .invalid {
            color: red;
        }

        .even {
            color: green;
        }

        .odd {
            color: red;
        }

        .leap {
            font-weight: bold;
        }

        .fail {
            color: red;
        }

        .pass {
            color: green;
        }

        .hot {
            color: red;
        }

        .cold {
            color: blue;
        }

        .tomi {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            align-content: center;
            justify-items: center;
        }
    </style>
</head>

<body>
    <?php
    // PHP code for conditions and verifications
    $number = 21;
    $year = 2024;
    $grade = 75;
    $userAge = 21;
    $text = "Hello, World!";
    $temperature = 80;
    $num1 = 10;
    $num2 = 20;
    $num3 = 30;
    $email = "example@example.com";
    $phone = "123-456-7890";
    $name = "John Doe";

    // Function to check if a number is even or odd
    function checkEvenOdd($number)
    {
        return ($number % 2 == 0) ? "even" : "odd";
    }

    // Function to check if a year is a leap year
    function checkLeapYear($year)
    {
        return ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) ? "leap" : "";
    }

    // Function to check if a student passed or failed
    function checkPassFail($grade)
    {
        return ($grade >= 50) ? "pass" : "fail";
    }

    // Function to check if a student is eligible to vote
    function checkEligibility($userAge)
    {
        return ($userAge >= 18) ? "eligible" : "ineligible";
    }

    // Function to check if a number is greater, less, or equal to 3
    function compareThreeNumbers($num1, $num2, $num3)
    {
        if ($num1 > $num2 && $num1 > $num3) {
            return "greater";
        } elseif ($num2 > $num1 && $num2 > $num3) {
            return "greater";
        } elseif ($num3 > $num1 && $num3 > $num2) {
            return "greater";
        } else {
            return "less or equal";
        }
    }

    // Function to check if a text contains "Hello"
    function containsHello($text)
    {
        return (strpos($text, "Hello") !== false) ? "contains Hello" : "does not contain Hello";
    }

    // Function to check if temperature is hot or cold
    function checkTemperature($temperature)
    {
        return ($temperature > 70) ? "hot" : "cold";
    }

    // Function to verify an email address
    function verifyEmail($email)
    {
        return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? "valid" : "invalid";
    }

    // Function to verify a phone number (simplified)
    function verifyPhone($phone)
    {
        // Assuming a simplified format like "123-456-7890"
        return (preg_match("/^\d{3}-\d{3}-\d{4}$/", $phone)) ? "valid" : "invalid";
    }

    // Function to verify a name (simple validation)
    function verifyName($name)
    {
        return (strlen($name) >= 2) ? "valid" : "invalid";
    }

    $evenOddStatus = checkEvenOdd($number);
    $leapYearStatus = checkLeapYear($year);
    $passFailStatus = checkPassFail($grade);
    $voteStatus = checkEligibility($userAge);
    $compareStatus = compareThreeNumbers($num1, $num2, $num3);
    $textStatus = containsHello($text);
    $temperatureStatus = checkTemperature($temperature);
    $emailStatus = verifyEmail($email);
    $phoneStatus = verifyPhone($phone);
    $nameStatus = verifyName($name);
    ?>
    <div class="tomi">
        <div class="condition">
            <h1>Number Condition</h1>
            <p>Number: <?php echo $number; ?> is <span class="<?php echo $evenOddStatus; ?>"><?php echo $evenOddStatus; ?></span>.</p>
        </div>

        <div class="condition">
            <h1>Year Condition</h1>
            <p>Year: <?php echo $year; ?> is <?php echo $leapYearStatus; ?> a leap year.</p>
        </div>

        <div class="condition">
            <h1>Grade Condition</h1>
            <p>Grade: <?php echo $grade; ?> - The student is <span class="<?php echo $passFailStatus; ?>"><?php echo $passFailStatus; ?></span>.</p>
        </div>

        <div class="condition">
            <h1>Vote Condition</h1>
            <p>Vote: <?php echo $userAge; ?> - The student is <?php echo $voteStatus; ?> to vote.</p>
        </div>

        <div class="condition">
            <h1>Text Condition</h1>
            <p>Text: "<?php echo $text; ?>" <?php echo $textStatus; ?>.</p>
        </div>

        <div class="condition">
            <h1>Temperature Condition</h1>
            <p>Temperature: <?php echo $temperature; ?> degrees - It is <?php echo $temperatureStatus; ?>.</p>
        </div>

        <div class="condition">
            <h1>Compare Condition</h1>
            <p>Compare: <?php echo $num1; ?>, <?php echo $num2; ?>, <?php echo $num3; ?> - The greatest number is <?php echo $compareStatus; ?>.</p>
        </div>

        <div class="condition">
            <h1>Email Condition</h1>
            <p>Email: <?php echo $email; ?> is <span class="<?php echo $emailStatus; ?>"><?php echo $emailStatus; ?></span>.</p>
        </div>

        <div class="condition">
            <h1>Phone Condition</h1>
            <p>Phone: <?php echo $phone; ?> is <span class="<?php echo $phoneStatus; ?>"><?php echo $phoneStatus; ?></span>.</p>
        </div>

        <div class="condition">
            <h1>Name Condition</h1>
            <p>Name: <?php echo $name; ?> is <span class="<?php echo $nameStatus; ?>"><?php echo $nameStatus; ?></span>.</p>
        </div>
    </div>
</body>

</html>