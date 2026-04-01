
<HTML>
<style>
  /* Style for table containing buttons*/
table {
  border-collapse: separate;
  border-spacing: 50px 0;
  margin-left: auto;
  margin-right: auto;
  width: 80%;
}
.inline-heading {
    display: inline-block;
    vertical-align: top;
    margin-right: 10px;
    
}
/* Creating style for buttons navigate to forms */
.button {
  background-color: #067aff;
  color: #fffbf2;
  display: inline-block;
  width: 200px;
  length: 200px
  font-size: 16px;
  cursor: pointer; /* Change mouse cursor on hover */
  transition: background-color 0.3s;
  border-radius: 16px;
  text-decoration: none;
  padding: 20px;
  font-weight: 500; /*Slightly bold text*/
}
</style>
<head>
<h1 style="text-align: center; font-size: 50px">Vehicle Maintenance Tracking System</h1>
</head>
<h2 style="text-align: center; font-size: 35px">What would you like to do?</h2>
<table style="text-align: center; font-size: 20px">
  <tr>
    <td>
    <h2>Vehicles</h2>
    </td>
    <td>
    <h2>Services</h2>
    </td>
    <td>
      <h2>Customers</h2>
    </td>
  </tr>
  <tr>
    <td>
    <a href="new-vehicle-form.php" class="button">Go to Vehicle Form</a>
    </td>
    <td>
    <a href="new-service-form.php" class="button">Go to Service Form</a>
    </td>
    <td>
    <a href="new-customer-form.php" class="button">Go to Customer Form</a>
    </td>
  </tr>
</table>
    
</div>
</HTML>

<?php

?>