
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
  /*Style for search button and columns from result */
  .column1{
  background-color: #067aff;
  color: #fffbf2;
  float: left;
  width: 10%;
  height: 100%;
  }
  .column2{
  float: left;
  width: 60%;
  height: 100%;
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
<body>
  <br>
    <form style="text-align: center;" action="" Method="POST">
        <input type="text" name="searchID" placeholder="Enter ID here" style="text-align: center; font-size: 18px" required>
        <input type= "submit" name="search" value="Search" style="text-align: center; font-size: 18px"/><br/>
        <?php
        include("database.php");
        if(isset($_POST['search'])){
          $search_id=$_POST['searchID'];
          if ($search_id == 'preview'){
            $search_query = "Select customerID, Name, dateJoined, Age, Email, Phone from customers LIMIT 10";}
            else{
          $search_query = "Select customerID, Name, dateJoined, Age, Email, Phone from customers where customerID = $search_id";
            }
          $search_result = mysqli_query($conn, $search_query);
          if ($myreader = mysqli_fetch_array($search_result)){
                ?>
            <br>
            <div class="column1">
                <input type="text" class="ll" value="ID" disabled>
                <input type="text" class="ll" value="Name" disabled>
                <input type="text" class="ll" value="dateJoined" disabled>
                <input type="text" class="ll" value="Age" disabled>
                <input type="text" class="ll" value="Email" disabled>
                <input type="text" class="ll" value="Phone" disabled>
            </div>
            <div class="column2">
              <input type="text" class="tt" value="<?php echo($myreader['customerID']); ?>" disabled>
              <input type="text" class="tt" value="<?php echo($myreader['Name']); ?>" disabled>
              <input type="text" class="tt" value="<?php echo($myreader['dateJoined']); ?>" disabled>
              <input type="text" class="tt" value="<?php echo($myreader['Age']); ?>" disabled>
              <input type="text" class="tt" value="<?php echo($myreader['Email']); ?>" disabled>
              <input type="text" class="tt" value="<?php echo($myreader['Phone']); ?>" disabled>
            </div>

      <?php 
          }
          else {
              echo "No data found.";
          }
        }
        
          ?>
          </form>
          <form method="post" action="input-sample-data.php">
        <fieldset>
            <div>
                <label for= "createSample">Would you like to create sample data?</label>
                <input type="submit" id="createSample" name="createSample" value="Yes">
</form>
                <br>
            </div>
        </fieldset>
</body>      
</HTML>

