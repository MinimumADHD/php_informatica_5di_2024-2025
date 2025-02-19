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
("Simone", "MathiasRiva", "Milano", "2006-11-14"),
("Antonio", "Spadafora", "Catanissetta", "1965-03-22"),
("Davide", "Proficuo", "Tacc", "2006-01-02"),
("Tommaso", "Orfani", "Bho", "2006-00-00");

SELECT *
FROM utente;