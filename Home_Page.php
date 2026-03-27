
<!DOCTYPE HTML>
<HTML>
<style>
table {
  border-collapse: separate; /* Ensures border-spacing works */
  border-spacing: 50px 0;   /* 20px horizontal space, 0px vertical space */
  margin-left: auto;
  margin-right: auto;
  width: 80%;
}
.inline-heading {
    display: inline-block; /* Places the headings on the same line */
    vertical-align: top;   /* Optional: aligns them by the top edge */
    margin-right: 10px;    /* Optional: adds space between headings */
    
}
</style>
<h1 style="text-align: center;">Vehicle Maintenance Tracking System</h1>
<h2 style="text-align: center;">What would you like to do?</h2>
<table style="text-align: center;">
  <tr>
    <td>
    <h2>New Vehicle</h2>
    </td>
    <td>
    <h2>Update Vehicle</h2>
    </td>
    <td>
    <h2>New Service</h2>
    </td>
    <td>
    <h2>Update Service</h2>
    </td>
  </tr>
  <tr>
    <td>
    <a href="new-vehicle-form.php" class="button-style">Add a vehicle</a>
    </td>
    <td>
    <a href="update-vehicle-form.php" class="button-style">Update a vehicle</a>
    </td>
    <td>
    <a href="new-service-form.php" class="button-style">Add a service</a>
    </td>
    <td>
    <a href="update-service-form.php" class="button-style">Update a service</a>
    </td>
  </tr>
</table>
    
</div>
</HTML>

<?php

?>