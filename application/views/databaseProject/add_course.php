<body>
    <header>
        <div class='title'>
            <?php echo $title; ?>
        </div>
        <div class='name'>
            Adam Bliss
        </div>
    </header>
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
            echo "New Course Title: ";
            echo form_input('new_course_title');
            ?>
        </div>

        <div class='form_entry'>
            <?php
            echo "New Credit Hours: ";
            echo form_input('new_credit_hours');
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
            'value' => 'Add Course',
            'class' => 'form_submit_button'));
        echo form_submit(array(
            'name' => 'home',
            'value' => 'Home Page',
            'class' => 'home_page_button'));
        echo form_close();
        ?>
    </div>
</body>
