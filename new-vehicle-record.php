<?php

include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vin = $_POST['VIN'];
    $vehicle_type = $_POST['vehicle_type'];
    $model = $_POST['model'];
    $make = $_POST['make'];
    $year = $_POST['year'];
    $selected_option = $_POST['isReturning'];

    if (isset($_POST['isReturning']) && isset($_POST['VIN'])) {
        if ($selected_option === "Yes" ) {
    
            $sql = "UPDATE vehicles SET vehicleType=?, Model=?, Make=?, Year=? WHERE vehicleID=?";
            try{
                $stmt= $conn->prepare($sql);
                $stmt->bind_param("sssss", $vehicle_type, $model, $make, $year, $vin);
                if ($stmt->execute()) {
                    echo "<h3 style='text-align:center; color:green; font-size:25px'>Vehicle information updated successfully!</h3>";
                    echo '<a href="Home_Page.php">Go back</a>';
                }
            } catch(mysqli_sql_exception $exception) {
                    echo "<h3 style='text-align:center; color:red; font-size:25px'>Error: " . $exception->getMessage(); "</h3>";
                    echo "<br>";
                    echo "<a href='Home_Page.php'>Go back</a>";
    }
        } else {
    $sql = "INSERT INTO vehicles (vehicleID, vehicleType, Model, Make, Year)
            VALUES ('$vin','$vehicle_type','$model','$make','$year');";
    try{
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<h3 style='text-align:center; color:green; font-size:25px'>Vehicle added successfully!</h3>";
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