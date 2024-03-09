<?php

echo "Welcome to the satge where you can connect to the database.<br>";

# First connect to the server


$server_name ="localhost";
$user = "root";
$password = "";


$con = mysqli_connect($server_name, $user, $password);



if(!$con){
  die("We are failed to connect to the database".mysqli_connect_error());
}
else{"We successfully connected to the database.";

}

# Second -  Create a database in the mqsqli from the server while using  PHP.

$sql = "CREATE DATABASE dbpratice";
$results = mysqli_query($con, $sql);

if($results){
    die("Successfully create a database.<br>");
}
else{
    echo "We are sorry we can  create a database". mysqli_error($con);

;}









?>
