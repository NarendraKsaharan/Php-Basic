
Start MySql from Xampp 

http://localhost/phpmyadmin


CREATE DATABASE `school_management`;

Select database from left side list

Click on create table -> enter table name and column count
Column name and datatype and size 

Click on Go to Create table


INSERT INTO `students`(`name`, `email`, `phone`, `age`, `father_name`) VALUES('Praveen', 'praveen@gmail.com', '+919928589039', 30, 'Father name');

INSERT INTO `students`(`name`, `email`, `phone`, `age`, `father_name`) VALUES('P-2', 'p2@gmail.com', '+91992858', 21, 'F-2'), ('P-3', 'p3@gmail.com', '+91992858', 31, 'F-3');


SELECT * FROM `students`;