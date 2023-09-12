<?php

// Array

$student = ['Ananda', 'ananda@gmail.com'];


echo '<pre>';

print_r($student);

'</pre>';


echo "<br>";

// Associative array


$student = [
    '$name' => "Ananda",
    '$email' => "ananda@gmail.com",
    '$phone' => "01759781138",
    '$blood' => "A-",
    '$status' => true,
];

echo '<pre>';

print_r($student);

echo '</pre>';

echo $student['$name'];

echo "<br>";

// Multidimensional array

$student = [
    'user1' => [
        'id' => 01,
        '$name' => 'Ananda',
        '$email' => 'ananda@gmail.com',
        'sociallinks' => [
            'Facbook' => 'wwww.facbook.com',
            'Twitter' => 'wwww.twitter.com',
            'Instagram' => 'www.instagram.com',
        ]
    ],
    'user2' => [
        'id' => 02,
        '$name' => 'Ananda2',
        '$email' => 'ananda2@gmail.com',
    ],
    'user3' => [
        'id' => 03,
        '$name' => 'Ananda3',
        '$email' => 'ananda3@gmail.com',
    ],
    'user4' => [
        'id' => 04,
        '$name' => 'Ananda4',
        '$email' => 'ananda4@gmail.com',
    ],
    'user5' => [
        'id' => 05,
        '$name' => 'Ananda5',
        '$email' => 'ananda5@gmail.com',
    ],
];

echo '<pre>';

print_r($student['user1']['sociallinks']['Facbook']);

echo '</pre>';

echo "<br>";

// Print the value of $student['$name']

echo ($student['user1']['sociallinks']['Facbook']);

echo "<br>";

// Data sensitization

$student = [
    'id' => 01,
    '$name' => 'Ananda',
    '$email' => 'Ananda@gmail.com',
];
echo strtolower($student['$email']);

echo "<br>";

// Every word's first letter is a capital letter

$student = [
    'id' => 01,
    '$name' => 'hemal arifin',
    '$email' => 'Ananda@gmail.com',
];
echo ucwords($student['$name']);

echo "<br>";

// First letter of a sentence is a capital letter

$student = [
    'id' => 01,
    '$name' => 'hemal arifin',
    '$email' => 'Ananda@gmail.com',
];

echo ucfirst($student['$name']);

echo "<br>";

// Reverse the following sentence

$captcha = "Hello world";
$usercaptcha = strrev($captcha);
if ($usercaptcha == $captcha) {
    echo "Welcome back!";
} else {
    echo "Get out";
};

echo "<br>";

// Find any word

$captcha = "Hello world";

echo strpos($captcha, 'world');

echo "<br>";

// Making PHP insensitive for a moment!

$captcha = "Hello world";

echo stripos($captcha, 'World');

echo "<br>";

// Replace anything

$captcha = "Hello world";

$url = str_replace(' ', '_', $captcha);

echo $url;


$captcha = "Hello world";

$url = strtolower(str_replace(' ', '_', $captcha));

echo $url;

echo "<br>";

// Cut line

$text = "Killer Asian hornets 'established in UK', experts say in horror warning";

$title = substr($text, 0, 20) . '..........';

echo $title;


echo "<br>";


// Giving fixed characters

$text = '                                     ananda@gmail.com';
echo trim($text);


echo "<br>";

// Figure out string length
$text = 'ananda@gmail.com';
echo strlen($text);

echo "<br>";

// Password encryption
$text = 'Ananda123';
echo sha1($text);

echo "<br>";

$text = 'Ananda123';
echo md5($text);

echo "<br>";

$text = 'Ananda123';
echo password_hash($text, PASSWORD_BCRYPT);

echo "<br>";

$userpass = 'Ananda123';
$dbpass = password_hash($userpass, PASSWORD_BCRYPT);
var_dump(password_verify($userpass, $dbpass));

echo "<br>";

// Add slashes
$str = addslashes('"Who" "are" "YOU?"');
echo ($str);

echo "<br>";

// Join array elements with a string


$arr = array('Hello', 'World!', 'Beautiful', 'Day!');
echo join(" ", $arr);

echo "<br>";

// Pad to the right side of the string, to a new length of 20 characters

$roll = "2";
echo str_pad($roll, 7, "0");
