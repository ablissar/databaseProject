-- Adam Bliss
-- 010732199
-- Final Project
--
-- Initializes three MySQL tables used in final project: Student, Course, and Enrollment.

DROP DATABASE ab035;
CREATE DATABASE ab035;
USE ab035;

CREATE TABLE Student (
    studentID       INT(9)      NOT NULL,
    studentName     CHAR(30)    NOT NULL,
    major           CHAR(30)    NOT NULL,

    PRIMARY KEY (studentID),
    CHECK (studentID>=000000000 AND studentID<=9999999999)
);

CREATE TABLE Course (
    courseID        INT         NOT NULL AUTO_INCREMENT,
    deptCode        CHAR(4)     NOT NULL,
    courseNum       INT(4)      NOT NULL,
    title           CHAR(30)    NOT NULL,
    creditHours     INT(1)      NOT NULL,

    PRIMARY KEY (courseID),
    CHECK (creditHours>0 AND creditHours<10),
    CHECK (courseNum>=0000 AND courseNum<=9999)
);

CREATE TABLE Enrollment (
    enrollmentID    INT         NOT NULL AUTO_INCREMENT,
    studentID       INT(9)      NOT NULL,
    courseID        INT         NOT NULL,

    PRIMARY KEY (enrollmentID),
    FOREIGN KEY (studentId) REFERENCES Student(StudentID),
    FOREIGN KEY (courseID) REFERENCES Course(CourseID)
);
