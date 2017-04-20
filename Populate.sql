-- Adam Bliss
-- 010732199
-- Final Project

-- Populates tables created in in Init.sql with starting data.

INSERT INTO Student (studentID, studentName, major)
VALUES  (000000001,     'Charles Darwin',      'Biology'       ),
        (000000002,     'Socrates',            'Philosophy'    ),
        (000000003,     'Galileo Galilei',     'Astronomy'     );

INSERT INTO Course (deptCode, courseNum, title, creditHours)
VALUES  ('BIOL',    3213,       'Evolutionary Theory',              3),
        ('PHIL',    2363,       'Introduction to Questions',  3),
        ('ASTR',    4233,       'Advanced Heliocentrism',           3);

INSERT INTO Enrollment (studentID, courseID)
VALUES  (000000001,     1),
        (000000002,     2),
        (000000003,     3);
