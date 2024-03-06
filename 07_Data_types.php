
<?php

/*Php-Data Types
1.String
2.Integar
3.Float
4.Boolean
5.Object
6.Array
7.Null*/


// string - sequence of characters
$name = "Johan Alex";
$city = "Dubai";

echo "The name of the client is $name and he belongs to $city.<br>";

// Integer - Non-decimal
$income = 20000;
$age = 26;

echo "The salary of the client is $income and he is $age years old.<br>";

// Float - Decimal point number

$height = 1.7;
$weight = 156.6;

echo "The height of $name is $height and the weight of $name is $weight.";

// Boolean
$x = True;
$y = FALSE;

echo var_dump($x);
echo "<br>";
echo var_dump($y);

// Object - Instances of classes
// Employee is a class---> harry can be one bject

// Array - Used to store multiple values in one single value

$friends = array("Johan","Micheal","Watson","Tom");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";

// echo $friends[4] will show an error because of the size of the array is 4

// Null
$name2 = Null;
echo var_dump($name2)



?>

