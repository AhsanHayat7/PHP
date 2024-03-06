<?php

$a = 65;
$b = 9;

if ($a > 78){
    echo "A is greater than 78";

}
else{
    echo "A is samller than 78";

}

echo "<br>";

$age = 54;
if($age>50){
    echo " You cannot drink chai with alchohol<br>";
}elseif($age<30){
    echo "You can drink chai with alchohol<br>";

}else{
    echo " You can drink water only<br>";
}
echo " done";
echo "<br>";

# Create a if esle ladder using more than one elseif
# Write a program to allow a driver to drive only  when his age is greator than 25 and less than  65

$age  = 45;

if($age>25 and $age<65){
    echo "You are allowed to drive <br>";
}
elseif($age<=25){
    echo "You are too young to drive <br>";
}else{
    echo "You are too old  drive <br>";

}

?>
