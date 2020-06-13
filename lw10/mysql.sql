#CREATING TABLES
CREATE
  database university;
USE
  university;

CREATE 
  TABLE faculty 
    (
      faculty_id INT AUTO_INCREMENT NOT NULL,
      name VARCHAR(255) NOT NULL,
      PRIMARY KEY (id)
    );

CREATE
  TABLE group
    (
      group_id INT AUTO_INCREMENT NOT NULL,
      name VARCHAR(255) NOT NULL,
      faculty_id INT NOT NULL,
      PRIMARY KEY (id),
      FOREIGN KEY (faculty_id) REFERENCES faculty(id)
    );

CREATE
  TABLE student
    (
      student_id INT AUTO_INCREMENT NOT NULL,
      first_name VARCHAR(255) NOT NULL,
      last_name VARCHAR(255) NOT NULL,
      age INT NOT NULL,
      group_id INT NOT NULL,
      PRIMARY KEY (id),
      FOREIGN KEY (group_id) REFERENCES group(id)
    );

#Initialization
INSERT INTO 
  faculty(name)
VALUES
  ('Faculty of Information Technologies and Computer Engineering'),
  ('Faculty of Economics'),
  ('Faculty of Radiomechanics');
INSERT INTO
  group(name, faculty_ids)
VALUES
  ('PS-11', 1),
  ('PS-12', 1),
  ('PS-13', 1),
  ('PI-11', 2),
  ('PI-12', 2),
  ('PI-13', 2),
  ('RM-11', 3),
  ('RM-12', 3),
  ('RM-13', 3);
INSERT INTO
  student(first_name, last_name, age, group_id)
VALUES
  ('Andrey', 'Ivanov', 18, 1),
  ('Ilja', 'Artemov', 19, 1),
  ('Mikhail', 'Senkin', 18, 1),
  ('Anastasiya', 'Toptygina', 20, 1),
  ('Anton', 'Mirski', 19, 1),
  ('Marina', 'Mikeeva', 18, 2),
  ('Dasha', 'Sarinina', 18, 2),
  ('Pavel', 'Artemov', 21, 2),
  ('Vasilyi', 'Petrov', 18, 2),
  ('Vasy', 'Repkin', 19, 2),
  ('Misha', 'Bananov', 18, 3),
  ('Stepan', 'Vishnev', 18, 3),
  ('Danila', 'Kaktusov', 19, 3),
  ('Nastya', 'Yagodkina', 19, 3),
  ('Slava', 'Antonov', 19, 3),
  ('Konstantin', 'Polyanin', 19, 4),
  ('Andrey', 'Grechkin', 19, 4),
  ('Kolya', 'Rybikin', 18, 4),
  ('Artem', 'Ivanov', 18, 4),
  ('Andrey', 'Toptygin', 20, 4),
  ('Pavel', 'Kackov', 19, 5),
  ('Dasha', 'Belorysova', 19, 5),
  ('Valeryi', 'Belkin', 18, 5),
  ('Anton', 'Valerov', 18, 5),
  ('Kirill', 'Greshnev', 19, 5),
  ('Tolya', 'Plevov', 18, 6),
  ('Andrey', 'Gromov', 19, 6),
  ('Misha', 'Laptev', 18, 6),
  ('Oleg', 'Tinkoff', 19, 6),
  ('Nastya', 'Lapteva', 19, 6),
  ('Darya', 'Streina', 21, 7),
  ('Dana', 'Mirnaya', 19, 7),
  ('Masha', 'Yaskina', 19, 7),
  ('Maria', 'Toptygina', 19, 7),
  ('Igor', 'Novoselov', 18, 7),
  ('Alexey', 'Veslov', 18, 8),
  ('Gleb', 'Imbirev', 19, 8),
  ('Pavel', 'Karpov', 18, 8),
  ('Kristina', 'Ivanova', 19, 8),
  ('Marta', 'Sidelnikova', 19, 8),
  ('Gleb', 'Fedotov', 19, 9),
  ('Ivan', 'Zaicev', 18, 9),
  ('Danila', 'Stantsov', 19, 9),
  ('Stepan', 'Fomin', 18, 9),
  ('Nikita', 'Jurin', 19, 9);


#4.1
SELECT 
    *
FROM
  student
WHERE
  age = 19;


#4.2
SELECT 
  group.name AS 'Group',
  student.* 
FROM 
  student
JOIN
  group 
ON
  student.group_id = group.group_id
WHERE
  group.name = 'PS-11';


#4.3
SELECT
  faculty.name AS 'Faculty',
  student.*
FROM
  student
JOIN
  group
ON
  student.group_id = group.group_id
JOIN
  faculty
ON
  group.faculty_id = faculty.faculty_id
WHERE
  faculty.name = 'Faculty of Information Technologies and Computer Engineering';

#4.4
SELECT
  faculty.name,
  group.name,
  student.first_name,
  student.last_name
FROM
  student
JOIN
  group
ON
  student.group_id = group.group_id
JOIN
  faculty
ON
  group.faculty_id = faculty.faculty_id
WHERE
  student.first_name = 'Ivan' AND student.last_name = 'Zaicev'; 