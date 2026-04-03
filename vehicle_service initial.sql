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
  vehicleID VARCHAR(45) NOT NULL PRIMARY KEY,
  vehicleType VARCHAR(45) NULL,
  Model VARCHAR(45) NULL,
  Make VARCHAR(45) NULL,
  Year VARCHAR(4) NULL,
  customerID INT NULL,
    FOREIGN KEY (customerID) REFERENCES Customers(customerID)
);

CREATE TABLE Mechanics (
  mechanicID INT NOT NULL PRIMARY KEY,
  Name VARCHAR(45) NULL,
  Specialization VARCHAR(45) NULL,
  hourlyRate INT NULL,
  Phone VARCHAR(14) NULL
);
  
CREATE TABLE Service (
  serviceID INT NOT NULL PRIMARY KEY,
  vehicleID VARCHAR(45) NOT NULL,
  serviceDate DATE NULL,
  typeOfService VARCHAR(45) NULL,
  status VARCHAR(45) NULL,
  totalCost INT NULL,
    FOREIGN KEY (vehicleID) REFERENCES Vehicles(vehicleID)
);

CREATE TABLE serviceDetails (
 serviceDetailID INT NOT NULL PRIMARY KEY,
  serviceID INT NULL,
  mechanicID INT NULL,
  LaborCost INT NULL,
  PartsUsed VARCHAR(100) NULL,
  Description VARCHAR(60) NULL,
    FOREIGN KEY (serviceID) REFERENCES Service(serviceID),
    FOREIGN KEY (mechanicID) REFERENCES Mechanics (mechanicID)
);

CREATE TABLE Billing (
  BillID INT NOT NULL PRIMARY KEY,
  serviceID INT NULL,
  billingDate DATE NULL,
  amtPaid INT NULL,
  paymentMethod VARCHAR(45) NULL,
    FOREIGN KEY (serviceID) REFERENCES Service(serviceID)
);
