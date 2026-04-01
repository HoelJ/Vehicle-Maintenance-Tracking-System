<HTML>


<head>
    <title>New Service</title>
    <h1 style="text-align: center; font-size: 75px;">New Service</h1>
</head>

<body>
    <form method="post" action="new-service-record.php">
        <label style="font-size: 35px">Service ID</label>
        <input type="text" name="service_ID">
    <br>
        <label style="font-size: 35px">Vehicle Identification Number</label>
        <input type="text" name="VIN">
    <br>
        <label style="font-size: 35px">Service Date (YYYY-MM-DD)</label>
        <input type="text" name="service_date">
    <br>
        <label style="font-size: 35px">Type of Service</label>
        <input type="text" name="service_type">
    <br>
        <label style="font-size: 35px">Status</label>
        <input type="text" name="service_status">
    <br>
        <label style="font-size: 35px">Cost of Service</label>
        <input type="text" name="service_cost">
    <br>
        <input type="submit" value="Confirm">
    </form>

        <a href="Home_Page.php" class="button-style">Go back</a>

</body>


</HTML>