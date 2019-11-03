<!-- Php -->
<?php 

// "" you can write tags in echo + "" take more memory in PC then ''
echo "Hello world! <br />";
echo 'Hello world!';
echo 'Hello world!';
echo 'Hello world!';  #Comment
/*
Big 
......
......
comment
*/
echo "<br />";

$number = 5;
echo "number = $number";
echo "<br />";
echo '$number';

$bool = true;
echo "<br />";
echo "$bool"; // boolean allways = "1" and false = "" in PhP

echo "<br />";
$number = 15;
echo "number = $number";
echo "<br />";
echo "number = " . $number;
echo "<br />";

echo PHP_VERSION;
echo "<br />";
define("PI", 3.14);
echo PI;
echo "<br />";
echo defined("PI"); // checkup const in your php code, if find, unswer = true = 1

?>
