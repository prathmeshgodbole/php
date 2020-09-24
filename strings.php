<?php 

// The PHP strlen() function returns the length of a string.
// The PHP str_word_count() function counts the number of words in a string.
// The PHP strrev() function reverses a string.
// strpos() - Search For a Text Within a String
// The PHP str_replace() function replaces some characters with some other characters in a string.
//strtoupper() 
//strtolower()
$name="Prathmesh";
$native="Kolhapur";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >Strings </title>
</head>
<body>
<div>
<?php 

echo "<br>". $name . $native ."<br>";

echo strpos("Hello world!", "d");
echo "<br>";
echo strpos("$native", "K");
echo "<br>".$name[3];

echo strtoupper("<br>".$name);
echo strtolower("<br>".$name."<br>");

echo str_replace("h","z","$name");
echo "<br>";

echo strrev($native);
echo "<br>";

echo str_word_count("$native");
echo "<br>";

echo strlen("$name");




?>
</div>
</body>
</html>