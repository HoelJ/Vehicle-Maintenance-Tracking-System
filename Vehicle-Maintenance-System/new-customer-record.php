<?php

include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cust_ID = $_POST['cust_ID'];
    $cust_name = $_POST['cust_name'];
    $date_joined = $_POST['date_joined'];
    $cust_age = $_POST['cust_age'];
    $cust_email = $_POST['cust_email'];
    $cust_phone = $_POST['cust_phone'];

    $sql = "INSERT INTO customers (customerID, Name, dateJoined, Age, Email, Phone)
            VALUES ('$cust_ID','$cust_name','$date_joined','$cust_age','$cust_email','$cust_phone');";
    try{
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<h3 style='text-align:center; color:green; font-size:25px'>Customer added successfully!</h3>";
        echo '<a href="new-service-form.php">Go back</a>';
    }

    } catch(mysqli_sql_exception $exception) {
        echo "<h3 style='text-align:center; color:red; font-size:25px'>Error: " . $exception->getMessage(); "</h3>";
        echo "<br>";
        echo "<a href='new-customer-form.php'>Go back</a>";
    }
}
mysqli_close($conn);
?>