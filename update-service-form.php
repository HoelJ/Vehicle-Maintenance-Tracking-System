<!DOCTYPE HTML>
<html>
<head>
    <title>Update Service</title>
</head>
<body>

<h1 style="text-align:center; font-size:50px;">Update Service</h1>

<form method="post" action="update-service-form.php" style="text-align:center; font-size:20px;">
    <label>Service ID:</label>
    <input type="number" name="serviceID" required><br><br>

    <label>Service Type:</label>
    <input type="text" name="service_type" required><br><br>

    <label>Status:</label>
    <select name="status" required>
        <option value="Scheduled">Scheduled</option>
        <option value="In Progress">In Progress</option>
        <option value="Completed">Completed</option>
    </select><br><br>

    <input type="submit" name="update" value="Update Service" style="padding:10px 20px; font-size:16px;">
</form>

<br>
<div style="text-align:center;">
    <a href="index.php" class="button" style="padding:10px 20px; text-decoration:none; background-color:#067aff; color:white; border-radius:16px;">Go Back</a>
</div>

</body>
</html>