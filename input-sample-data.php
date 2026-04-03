<?php

include("database.php");

    $sql = "INSERT INTO customers (customerID, Name, dateJoined, Age, Email, Phone)
            VALUES ('380916','Jimmy Saint','2026-03-08','34','SaintJ@Gmail.com','718-222-4357'),
             ('732194','Boris Jenkins','2024-09-11','78','BJenkins@Hotmail.com','917-039-6599'),
             ('100004','France Meyer','2025-03-08','19','FMrey@Icloud.com','917-444-8765'),
             ('922139','Jane Milagros','2022-01-29','23','ElMilagro@aol.com','646-210-3000'),
             ('362878','Sarah Park','2022-06-27','44','SPark23@Gmail.com','718-345-2317');
            INSERT INTO vehicles (vehicleID, vehicleType, Model, Make, Year, customerID)
            VALUES ('1FT8W4DT1HEE01309','Truck','F-450','Ford','2017','380916'),
             ('3HGGK5G52JM304907','Hatchback','Fit','Honda','2018','732194'),
             ('WAUSF78K79A099085','Sedan','A4','Audi','2009','100004'),
             ('5N1AR2MN9KC575691','SUV','Pathfinder','Nissan','2019','922139'),
             ('1GBHC24294E272819','Truck','Silverado 2500HD','Chevrolet','2004','362878');
            INSERT INTO service (serviceID, vehicleID, serviceDate, typeOfService, status, totalCost)
            VALUES ('943567','1FT8W4DT1HEE01309','2026-03-08','Windshield Wipers Replacement','In progress','50'),
             ('746923','3HGGK5G52JM304907','2025-12-23','Air Conditioner Fix','Done','760'),
             ('004839','WAUSF78K79A099085','2026-03-08','Serpentine Belt Replacement','In progress','100'),
             ('342033','5N1AR2MN9KC575691','2026-03-19','Oil Change','In progress','65'),
             ('543232','1GBHC24294E272819','2022-06-27','Transmission Swap','Done','1000');
            INSERT INTO mechanics (mechanicID, Name, Specialization, hourlyRate, Phone)
            VALUES ('000001','Simeon Pavanelli','Engine','40','347-839-2012'),
             ('000002','Giovanni de la Vega','Trucks','42','646-583-2345'),
             ('000003','Antony Cruz','Electric Vehicles','40','646-392-1038'),
             ('000004','Janny Alvarado','Glasswork','35','917-243-8888'),
             ('000005','Ciley Myrus','Tires','30','646-663-3321');
            INSERT INTO servicedetails (serviceDetailID, serviceID, mechanicID, laborCost, partsUsed, Description)
            VALUES ('555555','943567','000001','30','Windshield Wipers','Replacing Windshield Wipers'),
             ('555556','746923','000002','650','AC motor','Replacing AC Motor'),
             ('555557','004839','000003','60','Serpentine Belt','Replacing Serpentine Belt'),
             ('555558','342033','000004','45','Engine Oil','Emptying and refilling oil'),
             ('555559','543232','000005','750','Transmission Assembly Kit','Replacing transmission');
            INSERT INTO billing (BillID, serviceID, billingDate, amtPaid, paymentMethod)
            VALUES ('888881','943567','2020-04-08','50','Cash'),
             ('888882','943567','2025-12-24','760','Credit Card'),
             ('888883','004839','2026-03-08','100','Cash'),
             ('888884','342033','2026-03-20','65','Cash'),
             ('888885','543232','2022-06-28','1000','Check');";
    try{
    $result = mysqli_multi_query($conn, $sql);
        /* Do While loop to run through multiple queries*/
    do {
        if ($result = mysqli_store_result($conn)) {
            mysqli_free_result($result);
        }
    } while (mysqli_more_results($conn) && mysqli_next_result($conn));
        echo "<h3 style='text-align:center; color:green; font-size:25px'>Sample data created successfully!</h3>";
        echo "<br>";
        echo '<a href="Home_Page.php">Go back</a>';

    } catch(mysqli_sql_exception $exception) {
        echo "<h3 style='text-align:center; color:red; font-size:25px'>Error: " . $exception->getMessage(); "</h3>";
        echo "<br>";
        echo "<a href='Home_Page.php'>Go back</a>";
    }

?>