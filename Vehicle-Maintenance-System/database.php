<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vehicle_service_db"; 
try{
$conn = mysqli_connect($servername, $username, $password, $dbname);
}
catch(mysqli_sql_exception){
    echo"Could not connect...";
}

if($conn){
    echo"Connected.";
}

?>
