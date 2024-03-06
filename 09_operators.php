<?php

// Operators In PHP
/*
1.  Arithmetic  Operators
2.  Assignment Operators
3.  Compariosn Operators
4.  Logical Operators
*/

$a = 45;
$b = 8;

# 1. Arithmetic  Operators

echo "For a+b, the result is " .($a+$b) ."<br>";
echo "For a-b, the result is " .($a-$b) ."<br>";
echo "For a/b, the result is " .($a/$b) ."<br>";
echo "For a*b, the result is " .($a*$b) ."<br>";
echo "For a%b, the result is " .($a%$b) ."<br>";
echo "For a**b, the result is " .($a**$b) ."<br>";

# 2.  Assignment  Operators

$x = $a;

echo "For X,the value is " . $x."<br>";
$a+=6;
echo "For a,the value is " . $a."<br>";

$a-=6;
echo "For a,the value is " . $a."<br>";

$a/=6;
echo "For a,the value is " . $a."<br>";

$a*=6;
echo "For a,the value is " . $a."<br>";

$a+=6;
echo "For a,the value is " . $a."<br>";

$a%=5;
echo "For a,the value is " . $a."<br>";

# 3. Compariosn Operators

$x = 90;
$y = 10;

echo "For x==y, the result is ";
echo   var_dump($x == $y);
echo "<br>";
echo "For x > y, the result is ";
echo   var_dump($x > $y);
echo "<br>";
echo "For x < y, the result is ";
echo   var_dump($x < $y);
echo "<br>";
echo "For x<>y, the result is ";
echo   var_dump($x <> $y);
echo "<br>";

# 4. Logical Operators
$m = true;
$n = false;
$p = true;
$r = false;
echo "for m and n, the result is ";
echo var_dump($m and $n);
echo "<br>";


echo "for m and p, the result is ";
echo var_dump($m and $p);
echo "<br>";

echo "for r && n, the result is ";
echo var_dump($m && $p);
echo "<br>";

echo "for m || n, the result is ";
echo var_dump($m || $n);
echo "<br>";


echo "for !n, the result is ";
echo var_dump(!$n);
echo "<br>";

?>
