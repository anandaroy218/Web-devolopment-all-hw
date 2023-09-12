<?php

// Title conversion
$title = "<script>alart</script>";
$convertedTitle = htmlentities($title);
echo $convertedTitle;

$convertedTitle = html_entity_decode($title);
echo $convertedTitle;

// Stopping external attacks
$title = "<script>alart</script>";
$convertedTitle = htmlspecialchars($title);
echo $convertedTitle;

// String repeat
$str = "Ananda";
echo str_repeat("<br>" . $str, 5);

// Text explode and implode
$str = "People walking by the Soldiers Monument on the Courthouse Square in Delhi have noticed some changes.";
echo '<pre>';
print_r(explode(" ", $str));
echo '</pre>';

$str = "OIP.jpgsdv";

$strArray = explode(".", $str);

if ($strArray[1] == 'jpg') {
    echo "You're allowed to upload the file";
} else {
    echo 'You can only upload jpg/jpeg files or' . '...<a href="#">Try again later!</a>';
}

?>

<input type="file">

<?php

$str = "OIP.jpg.png.html.css.php";

$strArray = explode(".", $str);

echo '<pre>';
print_r(explode(".", $str));
echo '</pre>';

if (end($strArray) == 'jpg') {
    echo "You're allowed to upload the file";
} else {
    echo 'You can only upload jpg/jpeg files or' . '...<a href="#">Try again later!</a>';
}

?>

<input type="file">

<?php

$name = ["Hemal", "Ananda", "utfyurtgv"];
echo implode("-", $name);

// Array count

$users = [
    [
        'id' => 1,
        'Name' => "X"
    ],
    [
        'id' => 2,
        'Name' => "Y"
    ],
    [
        'id' => 3,
        'Name' => "Z"
    ],
    [
        'id' => 4,
        'Name' => "A"
    ],
    [
        'id' => 5,
        'Name' => "B"
    ],
];
echo count($users);

// Limitation

$users = [
    [
        'id' => 1,
        'Name' => "X"
    ],
    [
        'id' => 2,
        'Name' => "Y"
    ],
    [
        'id' => 3,
        'Name' => "Z"
    ],
    [
        'id' => 4,
        'Name' => "A"
    ],
    [
        'id' => 5,
        'Name' => "B"
    ],
    [
        'id' => 5,
        'Name' => "B"
    ],
];
if (count($users) > 5) {
    echo "Site full";
} else {
    echo "Success";
}

// Array insertion and deletion

$fruits = ['Orange', 'Mango', 'Banana'];
array_push($fruits, "Apple", ['Jackfruit', 'Guava']);

echo '<pre>';
print_r($fruits);
echo '</pre>';

$fruits = ['Orange', 'Mango', 'Banana'];
array_pop($fruits);
echo '<pre>';
print_r($fruits);
echo '</pre>';

$fruits = ['Orange', 'Mango', 'Banana'];
array_unshift($fruits, 'Apple');
echo '<pre>';
print_r($fruits);
echo '</pre>';

$fruits = ['Orange', 'Mango', 'Banana'];
array_shift($fruits);
echo '<pre>';
print_r($fruits);
echo '</pre>';

// Array reverse

$fruits = ['Orange', 'Mango', 'Banana'];
print_r(array_reverse($fruits));
echo '<pre>';
print_r($fruits);
echo '</pre>';

// Array Difference

$user = [
    'id' => 1,
    'Name' => "X"
];
$updateuser = [
    'id' => 1,
    'Name' => "Y"
];

echo '<pre>';
print_r(array_diff($user, $updateuser));
echo '</pre>';

$username = 'sgge';
var_dump(empty($username));
if (empty($username)) {
    echo 'Sorry';
} else {
    echo 'Good to go';
}

$username = '';
var_dump(isset($username));
?>