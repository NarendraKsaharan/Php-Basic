CREATE DATABASE student_management;

INSERT INTO students(name, email, phone, roll_no, gender, fee) VALUES('Student 1', 'student1@gmail.com', '9876543210', 1001, 'M', 200);

INSERT INTO students(name, email, phone, roll_no, gender, fee) VALUES('Student 2', 'student2@gmail.com', '9876543210', 1002, 'F', 450), ('Student 3', 'student3@gmail.com', '9876543210', 1003, 'F', 650), ('Student 4', 'student4@gmail.com', '9876543210', 1004, 'M', 250);


SELECT * FROM `students` WHERE gender='M'

=================================================================

UPDATE students SET address='SRDR - 331403';
UPDATE students SET phone='9876543211', roll_no='1005' WHERE id=5;

DELETE FROM students WHERE id=8;

SELECT * FROM `students` where roll_no IN(1002, 1003) or name IN('');
SELECT * FROM `students` where roll_no NOT IN(1002, 1003)
SELECT * FROM `students` where email like '%gmail.in%';
SELECT name, email, phone FROM students;


SELECT count(*) total_stud FROM students;
SELECT SUM(fee) as total_fee FROM `students`
SELECT AVG(fee) as total_fee FROM `students`;
SELECT * FROM `students` limit 0,2;

SELECT * FROM `students` ORDER BY id DESC;
SELECT * FROM `students` ORDER BY fee ASC;
SELECT gender, count(*) as total FROM `students` GROUP BY gender;



