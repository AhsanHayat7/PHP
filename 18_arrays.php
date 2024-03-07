<?php
 echo "Welcome to the associative arrays in php.<br>";
/*
-These are called index arrays
$arr = array("black","white","yellow");
echo $arr[0];
echo $arr[1];
echo $arr[2];
*/
## Associative arryas

$favcol = array(
    "john" => "red",
    "alex" => "Yellow",
    "watson" => "black",
    8 => "this",
);
/*
echo $favcol["john"];
echo "<br>";
echo $favcol["alex"];
echo "<br>";
echo $favcol["watson"];
echo "<br>";
echo $favcol[8];
echo "<br>";
*/
foreach ($favcol as $key => $value) {
    echo "<br>favourite colour of the $key is $value";
    # code...
}
?>
