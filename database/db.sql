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


INSERT INTO Users VALUES ( UUID_SHORT(),'root','root@root.it','azerty','','',NULL,NULL,'2021-01-01 00:00:00');
INSERT INTO Users VALUES ( UUID_SHORT(),'Ivanivan','ivan@getflix.com','azerty','','',NULL,NULL,'2021-11-29 10:00:00');
INSERT INTO Users VALUES ( UUID_SHORT(),'Niconico','nico@getflix.com','azerty','','',NULL,NULL,'2021-10-30 21:00:00');
INSERT INTO Users VALUES ( UUID_SHORT(),'Anneanne','anne@getflix.com','azerty','','',NULL,NULL,'2021-9-28 18:00:00');
INSERT INTO Users VALUES ( UUID_SHORT(),'Sofian','sofian@getflix.com','azerty','','',NULL,NULL,'2021-9-28 18:00:00');

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

INSERT INTO films VALUES(11,"Star Wars",50);

--
--
CREATE TABLE comments (
  Id_comments binary(36) NOT NULL PRIMARY KEY,
  Comment_text varchar(255) NOT NULL,
  Date_comment datetime,
  Rating int(5) NOT NULL,
  Movie_ref int(10) NOT NULL,
  User_id bigint(18) NOT NULL,  
  CONSTRAINT  fk_type
    FOREIGN KEY(User_id) 
        REFERENCES Users (Id)
          ON DELETE RESTRICT
          ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- INSERT INTO comments VALUES(UUID(),"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil rerum libero veritatis ratione numquam illum. Perferendis animi, distinctio rem sequi ad unde voluptatem blanditiis, repellat doloribus harum laboriosam labore autem.",
--    "2021-9-28 18:00:00",10,50,99541559912955905);
--    INSERT INTO comments VALUES(UUID(),"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil rerum libero veritatis ratione numquam illum. Perferendis animi, distinctio rem sequi ad unde voluptatem blanditiis, repellat doloribus harum laboriosam labore autem.
--    ","2021-9-28 18:00:00",10,50,99541881901285377);

CREATE TABLE password_reset_temp (
  email varchar(250) NOT NULL,
  key_temp varchar(250) NOT NULL,
  expDate datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


