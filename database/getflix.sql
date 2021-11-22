
CREATE DATABASE IF NOT EXISTS getflix;
USE getflix;

CREATE TABLE `Users` (
  `PersonID` binary(36) NOT NULL PRIMARY KEY,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(100) NOT NULL UNIQUE,
  `Password` varchar(255) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL
) 
