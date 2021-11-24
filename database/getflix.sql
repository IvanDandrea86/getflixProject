CREATE DATABASE IF NOT EXISTS GetFlix;
USE GetFlix;

-- Structure of the "Users" table

CREATE TABLE Users (
  Id binary(18) NOT NULL PRIMARY KEY,
  Username varchar(255) NOT NULL UNIQUE,
  Email varchar(100) NOT NULL UNIQUE,
  User_Password varchar(255) NOT NULL,
  LastName varchar(255) DEFAULT NULL,
  FirstName varchar(255) DEFAULT NULL,
  Registration datetime,
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

--
-- Structure of the "comments" table
--

CREATE TABLE comments (
  Id_comments binary(36) NOT NULL PRIMARY KEY,
  Comment text NOT NULL,
  Rating int(5) NOT NULL,
  Movie_Id int(10) NOT NULL,
  User_Id binary(18) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Loading data for the "comments" table
--

