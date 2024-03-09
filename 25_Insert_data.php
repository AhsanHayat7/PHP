<?php


$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "contacts";

// Create a connections.

$conn = mysqli_connect($server_name, $user_name, $password, $database);

//Die if a connection was not successfull.


if(!$conn){
    die("Sorry we are falied to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was Sucessfull.<br>";
}



# sql-query to be excecuted.
$sql = "INSERT INTO `contact_us` ( `name`, `email`, `concern`, `dt`) VALUES ( 'wasif', 'wasi@gmail.com', 'karachi', current_timestamp());";

# Add a new data to the phptrip table in the database.

$results = mysqli_query($conn, $sql);

if($results){
    die("The record has been inserted  successfully!.<br>");
}
else{
    echo "The record has not been inserted sucessfully because of this error->". mysqli_error($conn);
}

?>
