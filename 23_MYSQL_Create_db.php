<?php

echo "Welcome to the stage where we are ready to connect to the database.<br>";


/* ways to connect to a MYSQL database
1. MYSQLi extension_loaded
2.PDP (php data object)
*/

# Connecting to a database
$server_name = "localhost";
$user_name = "root";
$password = "";

// Create a connections

$conn = mysqli_connect($server_name, $user_name, $password);

//Die if a connection was not successfull


if(!$conn){
    die("Sorry we are falied to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was Sucessfull.<br>";
}

# check for the database creations success

$sql = "CREATE DATABASE dbahsan";
$results = mysqli_query($conn, $sql);

if($results){
    die("The db was created successfully!.<br>");
}
else{
    echo "The db was not created sucessfully because of this error->". mysqli_error($conn);
}













?>
