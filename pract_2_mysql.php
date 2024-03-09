<?php

echo "Welcome to the satge where you can connect to the database.<br>";




$server_name ="localhost";
$user = "root";
$password = "";
$database = "dbpratice";


$con = mysqli_connect($server_name, $user, $password, $database);



if(!$con){
  die("We are failed to connect to the database".mysqli_connect_error());
}
else{"We successfully connected to the database.";

}
# while using the server create a table in the database using PHP.

# create a table in the database.

$sql = "CREATE TABLE `Mcdonalds` (`S.no` INT(11) NOT NULL AUTO_INCREMENT , `soft_drinks` VARCHAR(11) NOT NULL , `fast_food` VARCHAR(11) NOT NULL , `ice_cream` VARCHAR(11) NOT NULL , PRIMARY KEY (`S.no`))";

$results = mysqli_query($con, $sql);

if($results){
    die("Successfully create a database.<br>");
}
else{
    echo "We are sorry we can  create a database". mysqli_error($con);
;}

# nice coding.
# congragtulations

?>
