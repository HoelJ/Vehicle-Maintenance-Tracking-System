<?php

include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vin = $_POST['VIN'];
    $vehicle_type = $_POST['vehicle_type'];
    $model = $_POST['model'];
    $make = $_POST['make'];
    $year = $_POST['year'];
    $cust_ID = $_POST['cust_ID'];

    $sql = "INSERT INTO Vehicles (vehicleID, vehicleType, Model, Make, Year, customerID)
            VALUES ('$vin','$vehicle_type','$model','$make','$year','$cust_ID');";
    try{
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<h3 style='text-align:center; color:green; font-size:25px'>Vehicle added successfully!</h3>";
        echo "<br>";
        echo '<a href="new-vehicle-form.php">Go back</a>';
    }

    } catch(mysqli_sql_exception $exception) {
        echo "<h3 style='text-align:center; color:red; font-size:25px'>Error: " . $exception->getMessage(); "</h3>";
        echo "<br>";
        echo "<a href='new-vehicle-form.php'>Go back</a>";
    }
}
mysqli_close($conn);
?>