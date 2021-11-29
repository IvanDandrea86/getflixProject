CREATE DATABASE IF NOT EXISTS db;
USE db;

-- Structure of the "Users" table

CREATE TABLE Users (
  Id bigint(18) NOT NULL PRIMARY KEY,
  Username varchar(255) NOT NULL UNIQUE,
  Email varchar(100) NOT NULL UNIQUE,
  User_Password varchar(255) NOT NULL,
  LastName varchar(255) DEFAULT NULL,
  FirstName varchar(255) DEFAULT NULL,
  Bio varchar(255) DEFAULT NULL,
  User_location varchar(255) DEFAULT NULL,
  Registration datetime
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

--
-- Structure of the "comments" table
--
-- Loading data for the "comments" table
--

CREATE TABLE films (
  Movie_Id int(10) NOT NULL PRIMARY KEY,
  title varchar(255) NOT NULL,
  video_id int(10) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE comments (
  Id_comments binary(36) NOT NULL PRIMARY KEY,
  Comment text NOT NULL,
  Rating int(5) NOT NULL,
  Movie_ref int(10) NOT NULL,
  User_id bigint(18) NOT NULL,  
  CONSTRAINT  fk_type
    FOREIGN KEY(User_id) 
        REFERENCES Users (Id)
          ON DELETE RESTRICT
          ON UPDATE RESTRICT,
  CONSTRAINT fk_type2
    FOREIGN KEY(Movie_ref)
      REFERENCES films (Movie_Id)
        ON DELETE RESTRICT
        ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--


