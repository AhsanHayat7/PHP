<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "contacts";

$conn = mysqli_connect($server_name, $user_name, $password, $database);


if(!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{ echo "Connection was successfull.<br>";}



$sql = "SELECT * FROM `contact_us` WHERE `concern` = 'j'";

$results = mysqli_query($conn, $sql);

// Usage of WHERE Clause to fetch data from the database

$num =  mysqli_num_rows($results);

echo $num;
echo " Record found in the database.<br>";
$no = 1;
if($num>0){

while ($row = mysqli_fetch_assoc($results)){
    echo $no . " Hello " . $row['name'] . " Welcome to " . $row['dt'];
      echo "<br>";
      $no =$no +1;
    }
}

// Usage of WHERE CLAUSE to Update Data

$sql = "UPDATE `contact_us` SET `name` = 'Maskan' WHERE `contact_us`.`S.no` = 14";
$results = mysqli_query($conn, $sql);
echo var_dump($results);
$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected rows: $aff<br>";
if($results){
    echo " We updated the record successfully.<br>";
}
else{ echo " We could not updated the record successfully.";

}


?>

