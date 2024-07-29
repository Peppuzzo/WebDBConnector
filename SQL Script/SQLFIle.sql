/*
	Script the repository WebDBConnector -> https://github.com/Peppuzzo/WebDBConnector
	Author: Giuseppe Calabrese
	Interesting table : Student, Subject, Preference
  Last modify: 10/07/2024
*/

-- Create database
CREATE DATABASE WebDBConnector;

USE WebDBConnector;

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
