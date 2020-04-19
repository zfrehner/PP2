<?php
//Zach Frehner
//pair program 2
//4/17/2020

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
<h1>Pair Program 2</h1>
<?php
echo "<h2>PHP Array Practice</h2>";

echo "<h3>Step 2</h3>";
echo "<p>Print the elements in the array</p>";

$numbers = ['7','9','8','9','8','8','6'];
include("functions.php");
printArr($numbers);

//step 4
echo "<h2>Step 4</h2>";
largest($numbers);

//step 5
echo "<h2>Step 5</h2>";
echo "<p>Remove the duplicates and print the remaining elements</p>";
removeDups($numbers);

//step 6
echo "<h2>Step 6</h2>";
echo "<p>Print the value of the array along with the number of times it appears in the array</p>";
distribution($numbers);
?>

</body>
</html>

