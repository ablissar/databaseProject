<body>
    <?php
        echo form_open('', '');
        echo "New Student ID: ";
        echo form_input('new_student_id');
        echo "New Student Name: ";
        echo form_input('new_student_name');
        echo "New Student Major: ";
        echo form_input('new_student_major');
        echo form_submit('home', 'Home Page');
        echo form_close();
    ?>
</body>
