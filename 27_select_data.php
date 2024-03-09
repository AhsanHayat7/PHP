<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "contacts";

    // Create a connection
$conn = mysqli_connect($server_name, $user_name, $password, $database);

    // Die if a connection was not successful
if(!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
    }
else{ echo "Connection was successfull.<br>";}


$sql = "SELECT * FROM `contact_us`";

$results = mysqli_query($conn, $sql);

// find the number of record return.

$num =  mysqli_num_rows($results);

echo $num;
echo " Record found in the database.<br>";

//Display the row returned by the sql query.
if($num>0){
    //$row = mysqli_fetch_assoc($results);
    //echo var_dump($row);
    //echo "<br>";
    //$row = mysqli_fetch_assoc($results);
    //echo var_dump($row);


    // We can fetch in a better way using the while loop

while ($row = mysqli_fetch_assoc($results)){
    echo $row['S.no'] . " Hello " . $row['name'] . " Welcome to " . $row['dt'];
      echo "<br>";

    }
}

?>
