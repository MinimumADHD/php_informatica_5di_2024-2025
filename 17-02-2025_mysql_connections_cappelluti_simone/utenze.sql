DROP DATABASE IF EXISTS utenze;
CREATE DATABASE utenze;
USE utenze;

CREATE TABLE utente(
    fname VARCHAR(25),
    lname VARCHAR(25),
    city VARCHAR(30),
    bdate DATE,
    ID INT PRIMARY KEY AUTO_INCREMENT
);

INSERT INTO utente(fname, lname, city, bdate)
VALUES
("Simone", "Cappelluti", "Parabiago", "2006-11-14");

SELECT *
FROM utente;