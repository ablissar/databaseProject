<body>
    <header><?php echo $title; ?></header>
    <div class='form'>
        <?php echo form_open('databaseProject/add_enrollment'); ?>
        <div class='form_entry'>
            <?php
            echo "Department Code: ";
            echo form_input('new_department_code');
            ?>
        </div>

        <div class='form_entry'>
            <?php
            echo  "Course Number: ";
            echo form_input('new_course_number');
            ?>
        </div>

        <div class='form_entry'>
            <?php
            echo "Student ID: ";
            echo form_input('new_student_id');
            ?>
        </div>

        <div class='error_message'>
            <?php echo $status; ?>
        </div>
    </div>
    <div class='form_buttons'>
        <?php
        echo form_submit(array(
            'name' => 'submit',
            'value' => 'Add Enrollment',
            'class' => 'form_submit_button'));
        echo form_submit(array(
            'name' => 'home',
            'value' => 'Home Page',
            'class' => 'home_page_button'));
        echo form_close();
        ?>
    </div>
</body>
