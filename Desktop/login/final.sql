DROP DATABASE IF EXISTS final;

CREATE DATABASE finaldb;

USE finaldb;

CREATE TABLE auth
(
   userid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   username varchar(60),
   password varchar(60),
   firstName varchar(60), 
   lastName varchar(60), 
   email varchar(60), 
   phone varchar(60)
);

INSERT INTO auth (username, password, firstName, lastName, email, phone) VALUES ('Paul123','Deitel123','Paul','Deitel','Paul@csun.edu','123-456-7890');
INSERT INTO auth (username, password, firstName, lastName, email, phone) VALUES ('Harvey456','Deitel456','Harvey','Deitel','Harvey@csun.edu','123-456-7891');
INSERT INTO auth (username, password, firstName, lastName, email, phone) VALUES ('Abbey789','Deitel789','Abbey','Deitel','Abbey@csun.edu','123-456-7892');

-----




