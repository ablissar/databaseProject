<body>
    <header>
        Adam Bliss Project Home
    </header>
    <div class="center_column">
        <div class="nav_buttons">
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
    </div>
</body>
