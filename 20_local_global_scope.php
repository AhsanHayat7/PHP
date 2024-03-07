<?php


echo "Welcome to scope  local global vars in php.<br>";

$a = 98; # Global variable
$b = 9;
function printvalue(){
    $a = 97; # local variable
    global $a, $b; # Give me the access of the global variable
    $a = 100;
    $b = 5000;

    echo "<br>The value of your varaible a is $a and the value of b is $b";
}

printvalue();
echo "<br>The value of your varaible a is $a and the value of b is $b";

echo"<br>";

echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);
?>
