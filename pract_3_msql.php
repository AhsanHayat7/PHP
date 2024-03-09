<?php

$server_name = "localhost";
$user_name  = "root";
$password = "";
$database = "dbpratice";

$con = mysqli_connect($server_name, $user_name, $password, $database);


if(!$con){
    die("Your are not successfully connected.<br>".mysqli_connect_error());
}
    else{echo "You are successfully connected.<br>";
}

$sql ="INSERT INTO `kfc` (`soft_drinks`, `fast_food`, `ice_cream`) VALUES ( '7up', 'beef platter', 'conrnetto')";

$results = mysqli_query($con, $sql);

if($results){
    die(" The record has been recorded  succesfully.<br>");}
else{"We are sorry we cannot recorded successfully.".mysqli_error($con);

}





?>
