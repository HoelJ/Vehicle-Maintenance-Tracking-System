<?php

include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isReturning = $_POST['isReturning'];
    $service_ID = $_POST['service_ID'];
    $service_date = $_POST['service_date'];
    $service_type = $_POST['service_type'];
    $service_status = $_POST['service_status'];
    $service_cost = $_POST['service_cost'];
    $selected_option = $_POST['isReturning'];
    
/*if returning, execute update query*/
    if (isset($_POST['isReturning']) && isset($_POST['service_ID'])) {
        if ($selected_option === "Yes" ) {
    
            $sql = "UPDATE `service` SET serviceDate=?, typeOfService=?, `status`=?, totalCost=? WHERE serviceID=?";
            try{
                $stmt= $conn->prepare($sql);
                $stmt->bind_param("sssii", $service_date, $service_type, $service_status, $service_cost, $service_ID);
                if ($stmt->execute()) {
                    echo "<h3 style='text-align:center; color:green; font-size:25px'>Service information updated successfully!</h3>";
                    echo '<a href="Home_Page.php">Go back</a>';
                }
            } catch(mysqli_sql_exception $exception) {
                    echo "<h3 style='text-align:center; color:red; font-size:25px'>Error: " . $exception->getMessage(); "</h3>";
                    echo "<br>";
                    echo "<a href='Home_Page.php'>Go back</a>";
    }
        } else {
    $sql = "INSERT INTO service (serviceID, vehicleID, serviceDate, typeOfService, status, totalCost)
            VALUES ('$service_ID','$vin','$service_date','$service_type','$service_status','$service_cost');";
    try{
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<h3 style='text-align:center; color:green; font-size:25px'>Service added successfully!</h3>";
        echo "<br>";
        echo '<a href="Home_Page.php">Go back</a>';
    }

    } catch(mysqli_sql_exception $exception) {
        echo "<h3 style='text-align:center; color:red; font-size:25px'>Error: " . $exception->getMessage(); "</h3>";
        echo "<br>";
        echo "<a href='Home_Page.php'>Go back</a>";
    }
}
    } else {
        echo "Please select an option.";
        echo "<br>";
        echo "<a href='Home_Page.php'>Go back</a>";
    }
}
mysqli_close($conn);
?>