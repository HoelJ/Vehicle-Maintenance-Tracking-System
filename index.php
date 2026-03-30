<!DOCTYPE HTML>
<html>
<head>
    <title>Vehicle Maintenance Tracking System</title>
    <style>
        table {
            border-collapse: separate;
            border-spacing: 50px 0;
            margin-left: auto;
            margin-right: auto;
            width: 80%;
        }
        .button {
            background-color: #067aff;
            color: white;
            display: inline-block;
            width: 200px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            border-radius: 16px;
            text-decoration: none;
            padding: 10px;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

<h1 style="text-align: center; font-size: 50px">Vehicle Maintenance Tracking System</h1>
<h2 style="text-align: center; font-size: 35px">What would you like to do?</h2>

<table style="text-align: center; font-size: 20px">
  <tr>
    <td>
        <h2>Vehicles</h2>
    </td>
    <td>
        <h2>Services</h2>
    </td>
  </tr>
  <tr>
    <td>
        <a href="new-vehicle-form.php" class="button">Go to Vehicle Form</a>
    </td>
    <td>
        <a href="new-service-form.php" class="button">Go to Service Form</a>
    </td>
  </tr>
</table>

</body>
</html>