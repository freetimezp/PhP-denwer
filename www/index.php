<!-- Php -->
<?php 

// php-1
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
echo "$bool"; // boolean true allways = "1" and false = "" in PhP

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
echo "<br /><hr />";

// php-2
$x = 32;
$y = 22.12;

$sum = $x + $y;
$dif = $x - $y;
$mult = $x * $y;
$dil = $x / $y;

echo "x + y = $sum <br />";
echo "x - y = $dif <br />";
echo "x * y = $mult <br />";
echo "x / y = $dil <br />";

$z = 12;

$ost = $x % $z;

echo "x % y = $ost <br />";

$q = 1;
$q = 2;
echo "$q <br />";
$q = $q + 1; // q = 3
$q += 1; // q = 4
$q++; // q = 5
$q--; // q = 4
echo "$q <br /><hr />";


// php-3

$str_1 = "<b>First row</b> <input type=\"text\""; // tags in php
$str_2 = "<i>Second row</i>"; 

echo " \\ \" " . $str_1 . " " . $str_2 . " \" \\" . "<br /><hr />"; // summ of two rows


// php-4
$x4 = 12;
$y4 = 34;
$z4 = 15;

$bool_1 = $x4 == $y4; // if x4 = y4 then bool_1 = true, else false = ""
echo "$bool_1 <br />";

$bool_2 = $x4 != $y4;
echo "$bool_2 <br />";

$bool_3 = $x4 < $y4;
echo "$bool_3 <br />";

$bool_4 = !($x4 == $y4);
echo $bool_4 . "<br />";

$bool_5 = $x4 == $y4 || $x4 > $z4;
echo $bool_5 . "<br />";

$bool_6 = $x4 == $y4 && $x4 < $z4;
echo $bool_6 . "<br />";

$bool_7 = $x4 != $y4 ^ $x4 >= $z4;
echo $bool_7 . "<br />";

$bool_8 = !($x4 != $y4 || $x4 >= $z4) && $x4 == $z4;
echo $bool_8 . "<br />";


// php-5

$string5 = "example";
$num5 = 0;

$bool_5 = $string5 == true;
echo "$bool_5 = $string5 == true;";

$bool_6 = $num5 == "";
echo "<br />$bool_6 = $num5 == \"\";<hr />";

$bool_7 = $string5 === true; // type of values
echo "<br />$bool_7 = $string5 === true;<hr />";

$x = 10;
$y = 5;

// php-6

if ($x == $y && $x !=12 && $y == 5 && ($x + 5) == 15) {
	echo 'Done!!!<br /><hr />';
} else if ($x == 14 || $y != 7) {
	$b = 5;
	echo '$b = ' . "$b<br /><hr />";
} else if ($x <= $y) {
	echo "false<br /><hr />";
}

$x == $y ? $string = "Yes" : $string = "No";
echo $string . "<br /><hr />";


// php-7

$x = 12;

switch ($x) {
	case "Hello": echo 'this is string'; break;
	case 4: echo 'this is wrong number'; break;
	case 12: echo 'BINGO!'; break;
	default: echo "Some default value";
}


// php-8

for ($i = 0; $i < 10; $i++) {
	echo "$i<br />";
}

for ($y = 100; $y >= 70; $y -= 2) {
 if ($y % 5 == 0) {
 	echo "$y<br /><hr />";
 }
}

for ($y = 100; $y >= 70; $y -= 2) {
 if ($y % 5 == 0) continue;
 {
 	echo "continue $y<br /><hr />";
 }
}

echo "<hr />";

$c = 0;

while ($c < 10) {
	if ($c == 7) {
		for ($y = 0; $y < 5; $y += 1) {
			echo "another string $y <br />";
		}
	}
	$c++;
	echo "string $c <br />";
}

echo "<hr />";

$z = 0;

do {
	$z++;
	echo "string z = $z <br />";
} while ($z < 10);

echo "<hr />";





























?>
