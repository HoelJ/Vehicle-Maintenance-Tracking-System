<?php

    include("database.php");

?>

<HTML>



<head>
    <title>Vehicle</title>
    <h1 style="text-align: center; font-size: 75px;">Vehicle</h1>
</head>

<body>
    <form method="post" action="new-vehicle-record.php">
        <form method="post" action="new-customer-record.php">
        <fieldset>
            <legend>Returning?</legend>
            <div>
                <input type="radio" id="ifReturning" name="isReturning" value="Yes" required>
                <label for= "ifReturning"> Yes</label><br>
                <input type="radio" id="ifNew" name="isReturning" value="No" required>
                <label for= "ifNew"> No</label><br>
            </div>
        </fieldset>
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
        <input type="submit" value="Confirm">
    </form>

         <a href="Home_Page.php" class="button-style">Go back</a>

</body>


</HTML>

