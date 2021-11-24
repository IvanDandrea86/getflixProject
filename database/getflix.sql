



CREATE DATABASE IF NOT EXISTS GetFlix;
USE GetFlix;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+01:00";


-- Structure of the "Users" table

CREATE TABLE `Users` (
  `Id` binary(18) NOT NULL PRIMARY KEY,
  `Username` varchar(255) NOT NULL UNIQUE,
  `Email` varchar(100) NOT NULL UNIQUE,
  `Password` varchar(255) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `Registration` datetime,
) ENGINE = InnoDB DEFAULT CHARSET = utf8;


-- Loading the data from the Users table

INSERT INTO Users (Id, Username, Email, Password, Lastname, Firstname, Registration) VALUES
(UUID(), 'tigercub++', 'annejungers@hotmail.com', '$2y$10$QJq6//fZZeUhrcedi8FSB.RPfrprMXYdFX4AAauCK7AWBdgwFwhea', 'Anne', 'Jungers'),
(UUID(), 'nikobackend', 'gael.layeux@gmail.com', '$2y$10$tyhyBwdXMqJ3DwZPebNwieDnA7IURCkV6FPsKkzqKm2vhGBIwB6re','nicolas', 'valiacas'),
(UUID(), 'ivanthemanager', 'nicolas.valiacas@icloud.com', '$2y$10$g9SIsLwdyWcjk85THo3xtO4TscnHhmUyaaQpmUeY68rLFQMDtkxju', 'ivan', 'dandrea'),
(UUID(), 'sofianfrontend', 'sofian.mattheus@gmail.com', '$2y$10$tyhyBwdXMqJ3DwZPebNwieDnA7IURCkV6FPsKkzqKm2vhGBIwB6re', 'sofian','mattheus');

--
-- Structure of the "comments" table
--

CREATE TABLE `comments` (
  `Id_comments` binary(36) NOT NULL, PRIMARY KEY,
  `Comment` text NOT NULL,
  `Rating` int(5) NOT NULL,
  `Movie_Id` int(10) NOT NULL,
  `User_Id` binary(18) NOT NULL,
  CONSTRAINT 'comment_user'
     FOREIGN KEY (User_Id) REFERENCES Users(Id)   
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Loading data for the "comments" table
--
/*
INSERT INTO `comments` (`Id_comments`, `Comment`, `Rating`, `Movie_Id`, `UserId`) VALUES
(UUID_SHORT(), 'Excellent film. I feel now so in love with my boyfriend for making me watch this!', 5, 15, 15),
(UUID_SHORT(), 'Absolutely horrifying! Looks like it was filmed in the 70s.', 1, 14, 2);
(UUID_SHORT(), 'Excellent if you want to learn how to kill people.', 3, 11, 10);

*/

