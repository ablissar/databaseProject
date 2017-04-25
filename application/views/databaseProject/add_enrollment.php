<body>
    <header><?php echo $title; ?></header>
    <div class='form'>
        <?php echo form_open('databaseProject/add_course'); ?>
        <div class='form_entry'>
            <?php
            echo "New Department Code: ";
            echo form_input('new_department_code');
            ?>
        </div>

        <div class='form_entry'>
            <?php
            echo "New Course Number: ";
            echo form_input('new_course_number');
            ?>
        </div>

        <div class='form_entry'>
            <?php
            echo "New Student ID: ";
            echo form_input('new_student_id');
            ?>
        </div>

    </div>
    <div class='form_buttons'>
        <?php
        echo form_submit(array(
            'name' => 'submit',
            'value' => 'Add Student',
            'class' => 'form_submit_button'));
        echo form_submit(array(
            'name' => 'home',
            'value' => 'Home Page',
            'class' => 'home_page_button'));
        echo form_close();
        ?>
    </div>

    <?php echo $status;?>
</body>
