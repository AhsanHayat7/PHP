<?php

echo " Welcome to the tutorials for functions <br>";


function processmarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {

        $sum += $value;

        # code...
    }
    return $sum;
}


function Averagemarks($marksArr){
    $sum = 0;
    $i = 0;
    foreach ($marksArr as $value) {

        $sum += $value;
        $i++;

        # code...
    }
    return $sum/$i;
}

$johnmarks = [89, 76, 56, 75, 89];
$sumMarks = processmarks($johnmarks);
$sumMarks1 = averagemarks($johnmarks);

$alexmarks = [60, 70, 80, 90, 50,];
$summarks2 = processmarks($alexmarks);
$sumMarks2 = Averagemarks($alexmarks);

echo "Total marks obtain by john is $sumMarks out of 500 and the average is $sumMarks1 .<br>";
echo "Total marks obtain by alex is $summarks2 out of 500 and the average is $sumMarks2.<br>";




