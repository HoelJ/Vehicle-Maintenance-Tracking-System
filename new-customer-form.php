<HTML>


<head>
    <title>New Customer</title>
    <h1 style="text-align: center; font-size: 75px;">New Customer</h1>
</head>
<body>
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
        
        <label style="font-size: 35px">Customer ID</label>
        <input type="text" name="cust_ID">
    <br>
        <label style="font-size: 35px">Name</label>
        <input type="text" name="cust_name" required>
    <br>
        <label style="font-size: 35px">Date Joined (YYYY-MM-DD)</label>
        <input type="text" name="date_joined" required>
    <br>
        <label style="font-size: 35px">Age</label>
        <input type="text" name="cust_age" required>
    <br>
        <label style="font-size: 35px">Email</label>
        <input type="text" name="cust_email" required>
    <br>
        <label style="font-size: 35px">Phone Number</label>
        <input type="text" name="cust_phone" required>
    <br>
        <input type="submit" value="Confirm">
    </form>

        <a href="Home_Page.php" class="button-style">Go back</a>

</body>


</HTML>