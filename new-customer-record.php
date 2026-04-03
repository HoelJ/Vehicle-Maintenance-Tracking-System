<?php

include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isReturning = $_POST['isReturning'];
    $cust_ID = $_POST['cust_ID'];
    $cust_name = $_POST['cust_name'];
    $date_joined = $_POST['date_joined'];
    $cust_age = $_POST['cust_age'];
    $cust_email = $_POST['cust_email'];
    $cust_phone = $_POST['cust_phone'];
    $selected_option = $_POST['isReturning'];

/*check to see if user chose an option for new or returning*/
    if (isset($_POST['isReturning']) && isset($_POST['cust_ID'])) {
/*if returning, execute update query*/
        if ($selected_option === "Yes" ) {
    
            $sql = "UPDATE customers SET Name=?, dateJoined=?, Age=?, Email=?, Phone=? WHERE customerID=?";
            try{
                $stmt= $conn->prepare($sql);
                $stmt->bind_param("ssissi", $cust_name, $date_joined, $cust_age, $cust_email, $cust_phone, $cust_ID);
                if ($stmt->execute()) {
                    echo "<h3 style='text-align:center; color:green; font-size:25px'>Customer record updated successfully!</h3>";
                    echo '<a href="Home_Page.php">Go back</a>';
                }
            } catch(mysqli_sql_exception $exception) {
                    echo "<h3 style='text-align:center; color:red; font-size:25px'>Error: " . $exception->getMessage(); "</h3>";
                    echo "<br>";
                    echo "<a href='Home_Page.php'>Go back</a>";
    }
        } else {
/*if new, execute insert query */
    $sql = "INSERT INTO customers (customerID, Name, dateJoined, Age, Email, Phone)
            VALUES ('$cust_ID','$cust_name','$date_joined','$cust_age','$cust_email','$cust_phone');";
        try {          
        $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<h3 style='text-align:center; color:green; font-size:25px'>Customer added successfully!</h3>";
                echo '<a href="Home_Page.php">Go back</a>';
            }
            } catch(mysqli_sql_exception $exception) {
                echo "<h3 style='text-align:center; color:red; font-size:25px'>Error: " . $exception->getMessage(); "</h3>";
                echo "<br>";
                echo "<a href='Home_Page.php'>Go back</a>";
            }

        }
/*if no option was selected, prompt for reinput*/
    } else {
        echo "Please select an option.";
        echo "<br>";
        echo "<a href='Home_Page.php'>Go back</a>";
    }
}
mysqli_close($conn);
?>