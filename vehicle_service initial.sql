/* Create the database and select it for use*/
CREATE DATABASE vehicle_service_db;
USE vehicle_service_db;

/* Create tables and initialize datatypes/ constraints */
CREATE TABLE Customers (
  customerID INT NOT NULL PRIMARY KEY,
  Name VARCHAR(45) NULL,
  dateJoined DATE NULL,
  Age INT NULL,
  Email VARCHAR(45) NULL,
  Phone VARCHAR(14) NULL
  );

CREATE TABLE Vehicles (
  vehicleID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  vehicleType INT NULL,
  Model VARCHAR(45) NULL,
  Make VARCHAR(45) NULL,
  Year VARCHAR(4) NULL,
  customerID INT NULL,
    FOREIGN KEY (customerID) REFERENCES Customers(customerID)
);

CREATE TABLE Mechanics (
  mechanicID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Name VARCHAR(45) NULL,
  Specialization VARCHAR(45) NULL,
  hourlyRate INT NULL,
  Phone VARCHAR(14) NULL
);
  
CREATE TABLE Service (
  serviceID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  vehicleID INT NULL,
  serviceDate DATE NULL,
  typeOfService VARCHAR(45) NULL,
  status VARCHAR(45) NULL,
  totalCost INT NULL,
    FOREIGN KEY (vehicleID) REFERENCES Vehicles(vehicleID)
);

CREATE TABLE serviceDetails (
 serviceDetailID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  serviceID INT NULL,
  mechanicID INT NULL,
  LaborCost INT NULL,
  PartsUsed VARCHAR(100) NULL,
  Description VARCHAR(60) NULL,
    FOREIGN KEY (serviceID) REFERENCES Service(serviceID),
    FOREIGN KEY (mechanicID) REFERENCES Mechanics (mechanicID)
);

CREATE TABLE Billing (
  BillID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  serviceID INT NULL,
  billingDate DATE NULL,
  amtPaid INT NULL,
  paymentMethod VARCHAR(45) NULL,
    FOREIGN KEY (serviceID) REFERENCES Service(serviceID)
);

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

SELECT Billing.BillID, Billing.billingDate, Service.serviceDate, Service.totalCost
FROM Billing
FULL JOIN Service
ON Billing.serviceID = Service.serviceID;


