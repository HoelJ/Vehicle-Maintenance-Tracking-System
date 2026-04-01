<?php

include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service_ID = $_POST['service_ID'];
    $vin = $_POST['VIN'];
    $service_date = $_POST['service_date'];
    $service_type = $_POST['service_type'];
    $service_status = $_POST['service_status'];
    $service_cost = $_POST['service_cost'];

    $sql = "INSERT INTO service (serviceID, vehicleID, serviceDate, typeOfService, status, totalCost)
            VALUES ('$service_ID','$vin','$service_date','$service_type','$service_status','$service_cost');";
    try{
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<h3 style='text-align:center; color:green; font-size:25px'>Service added successfully!</h3>";
        echo "<br>";
        echo '<a href="new-service-form.php">Go back</a>';
    }

    } catch(mysqli_sql_exception $exception) {
        echo "<h3 style='text-align:center; color:red; font-size:25px'>Error: " . $exception->getMessage(); "</h3>";
        echo "<br>";
        echo "<a href='new-service-form.php'>Go back</a>";
    }
}
mysqli_close($conn);
?>