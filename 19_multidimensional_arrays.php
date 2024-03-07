<?php

echo "welcome the the Multidimensional arrays.<br>";

# creating  arrays for 1,2 and 3 dimensions

echo "<br>";
# 1-Dimensional

$arr = array(1,2,3,4,5,6);


for ($i=0; $i <count($arr) ; $i++) {
    echo $arr[$i];
    echo " ";
}
echo "<br>";
# 2-Dimensional
$multidim = array(array(1,2,3,4),
                 array(3,4,5,6),
                 array(6,7,8,3));

# 3-Dimensional
$multidim1 = array(
    array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    ),
    array(
        array(10, 11, 12),
        array(13, 14, 15),
        array(16, 17, 18)
    ),
    array(
        array(19, 20, 21),
        array(22, 23, 24),
        array(25, 26, 27)
    )
);
        #echo var_dump($multidim);
        #echo $multidim[0][1];


# printing the contents of 2 dimensional arrays
/*
for ($i=0; $i <count($multidim) ; $i++) {
    echo var_dump($multidim[$i]);
    echo "<br>";
    # code...
}
*/
echo "<br>";
# creating a two dimensional arrays
for ($i=0; $i < count($multidim); $i++) {
    for ($j=0; $j < count($multidim[$i]); $j++) {
        echo $multidim[$i][$j];
        echo " ";
    }
    echo "<br>";
}

echo "<br>";

# creating Three dimensionals

for ($i=0; $i < count($multidim1) ; $i++) {
    for ($j=0; $j < count($multidim1[$i]); $j++) {
        for ($k=0; $k < count($multidim1[$i][$j]) ; $k++) {
            echo $multidim1[$i][$j][$k];
            echo " ";
        }
        echo "<br>";
    }
}

?>


