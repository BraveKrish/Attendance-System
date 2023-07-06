create table registration(
    id int not null,
    name varchar(30) not null,
    email varchar(30) not null,
    username varchar(30) not null,
    password varchar(30) not null,
    PRIMARY KEY(id)
);

CREATE TABLE `teacher_tbl` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `doj` date DEFAULT NULL,
  `teacher_grade_id` int(11) DEFAULT NULL
);

create table student_tbl(
    id int AUTO_INCREMENT not null,
    student_id int not null,
    student_name varchar(30) not null,
    roll_no int(10) not null,
    dob date not null,
    student_grade_id int(10),
    PRIMARY KEY(id)   
);

create table grade_tbl(
    id int AUTO_INCREMENT not null,
    grade_id int not null,
    grade_name varchar(20),
    PRIMARY KEY(id)
);

create table attendance_tbl(
    id int AUTO_INCREMENT not null,
    attendance_id int not null,
    student_id int(11) not null,
    attendance_status varchar(20) not null,
    attendance_date date DEFAULT null,
    teacher_id int(11) not null,
    PRIMARY KEY(id)
);

create table admin_tbl(
    admin_id int AUTO_INCREMENT not null,
    admin_username varchar(30) not null,
    admin_password varchar(30) not null,
    PRIMARY KEY(admin_id)

);
CREATE TABLE `attendance_sys`.`faculty` ( `faculty_id` INT NOT NULL AUTO_INCREMENT , `faculty_name` VARCHAR(30) NOT NULL , `duration` VARCHAR(30) NOT NULL , PRI

create table students_tbl(

    std_id int AUTO_INCREMENT not null,
    roll bigint(20) not null UNIQUE,
    student_name varchar(30) not null,
    faculty varchar(30) not null,
    semester varchar(30) not null,
    PRIMARY KEY(std_id)
);