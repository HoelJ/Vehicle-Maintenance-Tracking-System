<?php

    include("database.php");

?>

<HTML>



<head>
    <title>New Vehicle</title>
    <h1 style="text-align: center; font-size: 75px;">New Vehicle</h1>
</head>

<body>
    <form method="post" action="new-vehicle-record.php">
        <label style="font-size: 35px">Vehicle Identification Number:</label>
        <input type="text" name="VIN" required>
    <br>
        <label style="font-size: 35px">Vehicle Type</label>
        <input type="text" name="vehicle_type" required>
    <br>
        <label style="font-size: 35px">Model</label>
        <input type="text" name="model" required>
    <br>
        <label style="font-size: 35px">Make</label>
        <input type="text" name="make" required>
    <br>
        <label style="font-size: 35px">Year</label>
        <input type="text" name="year" required>
    <br>
        <label style="font-size: 35px">Customer ID</label>
        <input type="text" name="cust_ID" required>
    <br>
        <input type="submit" value="Confirm">
    </form>

         <a href="Home_Page.php" class="button-style">Go back</a>

</body>


</HTML>

