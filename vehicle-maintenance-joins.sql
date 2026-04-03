/* joins for data retrieval*/
SELECT Model, Make
FROM Vehicles
NATURAL JOIN Customers;

SELECT Mechanics.mechanicID, Mechanics.Name, serviceDetails.serviceDetailID, serviceDetails.PartsUsed
FROM Mechanics
LEFT JOIN serviceDetails
ON Mechanics.mechanicID = serviceDetails.mechanicID;

SELECT Mechanics.Name, Mechanics.mechanicID, serviceDetails.PartsUsed
FROM Mechanics
RIGHT JOIN serviceDetails
ON Mechanics.mechanicID = serviceDetails.mechanicID;

SELECT Service.serviceID, Service.typeOfService, Vehicles.vehicleType 
FROM Vehicles
JOIN Service
ON Vehicles.vehicleID = Service.vehicleID;


/*Substitute for Full Join because Full Join was not working correctly*/
SELECT Billing.BillID, Billing.billingDate, Service.serviceDate, Service.totalCost
FROM Billing
LEFT JOIN Service ON Billing.serviceID = Service.serviceID

UNION

SELECT Billing.BillID, Billing.billingDate, Service.serviceDate, Service.totalCost
FROM Billing
RIGHT JOIN Service ON Billing.serviceID = Service.serviceID;

