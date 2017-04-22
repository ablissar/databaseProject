<body>
    <?php
        echo form_open('databaseProject/add_course');

        echo "New Department Code: ";
        echo form_input('new_department_code');

        echo "New Course Number: ";
        echo form_input('new_course_number');

        echo "New Course Title: ";
        echo form_input('new_course_title');

        echo "New Credit Hours: ";
        echo form_input('new_credit_hours');

        echo form_submit('submit', 'Add Course');
        echo form_submit('home', 'Home Page');
        echo form_close();
        echo $status;
    ?>
</body>
