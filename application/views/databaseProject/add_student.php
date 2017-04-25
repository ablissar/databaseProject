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
        <?php echo form_open('databaseProject/add_student'); ?>
        <div class='form_entry'>
            <?php
            echo "New Student ID: ";
            echo form_input('new_student_id');
            ?>
        </div>

        <div class='form_entry'>
            <?php
            echo "New Student Name: ";
            echo form_input('new_student_name');
            ?>
        </div>

        <div class='form_entry'>
            <?php
            echo "New Student Major: ";
            echo form_input('new_student_major');
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
            'value' => 'Add Student',
            'class' => 'form_submit_button'));
        echo form_submit(array(
            'name' => 'home',
            'value' => 'Home Page',
            'class' => 'home_page_button'));
        echo form_close();
        ?>
    </div>
</body>
