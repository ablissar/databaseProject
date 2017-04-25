<body>
    <header>
        <div class='title'>
            <?php echo $title; ?>
        </div>
        <div class='name'>
            Adam Bliss
        </div>
    </header>
    <div class="nav_buttons_top">
        <?php
        echo form_open('', '');
        $data = array(
            'name'      => 'add_student',
            'value'     => 'Add a student.',
            'class'     => 'nav_button'
        );
        echo form_submit($data);

        $data = array(
            'name'      => 'add_course',
            'value'     => 'Add a course.',
            'class'     => 'nav_button'
        );
        echo form_submit($data);

        $data = array(
            'name'      => 'add_enrollment',
            'value'     => 'Enroll a student in a course.',
            'class'     => 'nav_button'
        );
        echo form_submit($data);
        ?>
    </div>
    <div class="nav_buttons_bottom">
        <?php
        $data = array(
            'name'      => 'view_students',
            'value'     => 'View all students.',
            'class'     => 'nav_button'
        );
        echo form_submit($data);

        $data = array(
            'name'      => 'view_courses_by_department',
            'value'     => 'View courses by department.',
            'class'     => 'nav_button'
        );
        echo form_submit($data);

        $data = array(
            'name'      => 'view_student_schedule',
            'value'     => 'View student schedule.',
            'class'     => 'nav_button'
        );
        echo form_submit($data);

        echo form_close();
        ?>
    </div>
</body>
