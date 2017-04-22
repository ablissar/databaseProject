<body>
    <?php
        echo form_open('databaseProject/add_enrollment');

        echo "New Department Code: ";
        echo form_input('new_department_code');

        echo "New Course Number: ";
        echo form_input('new_course_number');

        echo "New Student ID: ";
        echo form_input('new_student_id');

        echo form_submit('submit', 'Add Enrollment');
        echo form_submit('home', 'Home Page');
        echo form_close();
        echo $status;
    ?>
</body>
