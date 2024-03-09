<?php


$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "contacts";

$conn = mysqli_connect($server_name, $user_name, $password, $database);

# die if the connections is not successfull
if(!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{ echo "Connection was successfull.<br>";
}

$sql = "DELETE FROM `contact_us` WHERE `concern` ='karachi'LIMIT  4";
$results = mysqli_query($conn, $sql);
$aff  = mysqli_affected_rows($conn);
echo "<br>Number of effected rows: $aff<br>";

if($results){
    echo "Delete successfully";
}
else{$err = mysqli_error($conn);
    echo "Not Delete successfully due to this error-->$err";
}
?>
