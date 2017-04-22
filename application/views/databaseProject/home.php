<body>
    <header>
        <h1 class="header">Adam Bliss Project Home</h1>
    </header>
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
            'value'     => 'View all courses for a given department.',
            'class'     => 'nav_button'
        );
        echo form_submit($data);

        $data = array(
            'name'      => 'view_student_schedule',
            'value'     => 'View all courses for a given student.',
            'class'     => 'nav_button'
        );
        echo form_submit($data);

        echo form_close();
    ?>
</body>
