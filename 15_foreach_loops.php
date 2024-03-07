<?php

echo "welcome to the world of foreach loops.<br>";


$arr = array("apple", "banana", "mango", "grapes","orange");
/*
for ($i=0; $i < count($arr) ; $i++) {
    echo $arr[$i];
    echo "<br>";
    # code...
*/

//better way to do this - foreach loops


foreach ($arr as $value) {
    echo "$value <br>";
    # code...
}

?>
