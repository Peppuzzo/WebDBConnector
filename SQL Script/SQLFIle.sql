/*
	Script the repository WebDBConnector -> https://github.com/Peppuzzo/WebDBConnector
	Autor: Giuseppe Calabrese
	Tabelle interessate : Student, Subject, Preference
    Last modify: 10/07/2024
*/

-- Create database
CREATE DATABASE WebDBConnector;

USE DatabaseScuola;

-- Check if the 'Student' table already exists
DROP TABLE IF EXISTS Student;

CREATE TABLE Student (
    ID INT AUTO_INCREMENT,
    Name VARCHAR(200) NOT NULL,
    Surname VARCHAR(180) NOT NULL,
    Age INT NOT NULL,
    City VARCHAR(150) NOT NULL,
    PRIMARY KEY (ID)
);


-- Check if the 'Subject' table already exists
DROP TABLE IF EXISTS Subject;

CREATE TABLE Subject (
    ID INT AUTO_INCREMENT,
    Name VARCHAR(100) NOT NULL,
    PRIMARY KEY (ID)
);


-- Check if the 'Preference' table already exists
DROP TABLE IF EXISTS Preference;

CREATE TABLE Preference(
Id_Student int not null,
Id_Subject int not null,
primary key(Id_Student, Id_Subject),
foreign key (Id_Student) references Student(ID),
foreign key (Id_Subject) references Subject(ID)
);

-- Insertion of occurrences on the table Student:

INSERT INTO Student(Name, Surname, Age, City) VALUES
	("Giuseppe", "calabrese", 23, "Palermo"),
    ("Mario", "Rossi", 34, "Milano"),
    ("Spongebob", "Squarepants", 29, "Bikini Bottom"),
    ("Luigi", "Bianchi", 54, "Roma"),
    ("Donald", "Trump", 78, "New York"),
    ("Donald", "Trump", 78, "New York"),
    ("Pietro", "Marzetti", 41, "Benevento"),
    ("Paolo", "Maldini", 56, "Milano");


-- Insertion of occurrences on the table Student:

INSERT INTO Subject(Name) VALUES
	("Programming"),
    ("Algorithms and data structures"),
    ("Fundamentals of computer science"),
    ("software engineering"),
    ("Italian"),
    ("History"),
    ("Spanish"),
    ("Biology"),
    ("Physics"),
    ("Chemistry");


-- Insertion of occurrences on the table Preference:

INSERT INTO Preference (Id_Student, Id_Subject) VALUES
    (1, 1),
    (1, 5),
    (2, 2),
    (2, 6),
    (3, 3),
    (3, 8),
    (4, 4),
    (4, 9),
    (5, 10),
    (5, 7),
    (6, 7),
    (7, 8),
    (7, 3),
    (8, 9),
    (8, 6);






