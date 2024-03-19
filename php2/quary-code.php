<?php

CREATE DATABASE school_management;


id,

name
email
phone
gender
class

created_at
updated_at


INSERT INTO `students`(`name`, `email`, `gender`, `class`, `phone`) VALUES('Praveen', 'p@gmail.com', 'M', '10th', '9876543210');



INSERT INTO `students`(`name`, `email`, `gender`, `class`, `phone`) VALUES('Praveen 2', 'p2@gmail.com', 'M', '12th', '9876543210'), ('Praveen 3', 'p3@gmail.com', 'M', '10th', '9876543210');

SELECT * FROM `students`;


SELECT id, name, email, phone FROM `students`;

=============================================================================================================================================


select * from student where gender='M' or gender="F";

select * from student where gender = 'F' and name = 'Name2';

select * from student where (gender= 'F' or  gender='M') and status=1;

select * from student where gender IN('F','M');

select * from student where gender NOT IN('F','M');

select * from student where gender != 'O';

select * from student where fee>=300;

order by, group by, Limit // all three added end of query;

select * from student where gender IN('F', 'M') order by id DESC:

select * from student where gender IN('F', 'M') order by id DESC limit 0,3;

select * from student where gender IN('F', 'M') order by id DESC limit 3,3;

select * from student where gender IN('F', 'M') order by id DESC limit 6,3;

select count(*) as total_record form student; 

select name as student_name,email,phone form student; 

select avg(fee) as total_record form student;

select min(fee) as minimum_fee form student;

select max(fee) as maximum form student;

select * FORM`student` ORDER BY `fee` DESC limit 1,1

DELETE FORM student where status=0;

UPDATED student SET name='Name 18',email='name18@gmail.com',phone='678907890',address='Name 18 ADDRESS'where id=18;

select * form student where email like '%name%'
SELECT * FROM `employees` where first_name like '%b%' or first_name like '%s%' or first_name like '%d%';
=====================================================================================================================================
select * from students where gender='M' or gender="F";
select country_id, name, status from states where status=1;

#select s.*, c.name as country_name from states as s INNER JOIN countries as c ON c.id=s.country_id;

select s.*, c.name as country_name from states as s INNER JOIN countries as c ON c.id = s.country_id where s.status=1
select c1.*, c.name as country_id ,s.name as state_id from city as c1 INNER JOIN state as s ON s.id=c1.state_id INNER JOIN country as c on c.id=c1.country_id

select c1.*,s.name as state_id ,c.name as country_id from city as c1 inner join state as s on s.id=c1.state_id inner join country as c on c.id=c1.country_id;
SELECT * FROM `city` WHERE id ORDER by id desc limit 0,1;
SELECT * FROM `city` WHERE id ORDER by id desc limit 3,1;
SELECT * FROM `city` WHERE id ORDER by id desc limit 5,1;
SELECT * FROM `students` WHERE email like '%s%';
SELECT * FROM `students` WHERE gender='m';
UPDATE `students` SET `gender` = 'o' WHERE `students`.`id` = 213
UPDATE `students` SET `gender` = 'o'
SELECT * FROM `students`WHERE id ORDER by id asc limit 0,1;
SELECT * FROM `students`WHERE id ORDER by id asc limit 6,1;
SELECT name,email FROM `students`WHERE id ORDER by id asc limit 6,1;
SELECT * FROM `students` WHERE name;
SELECT name,email FROM `students`;
SELECT * FROM `students` WHERE gender='o' or gender='m';
SELECT * FROM `students` WHERE gender='o' and class='12th';
SELECT count(*) FROM `city`
UPDATE `students_records` SET `name` = 'a1' WHERE `students_records`.`id` = 6;
UPDATE `students_records` SET `name` = 'a2' WHERE `name` = 'a1';





?>