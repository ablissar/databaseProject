<body>
    <header class="header">
        Adam Bliss Project Home <br />
    </header>
    <?php
        echo form_open('', '');

    ?>



                <?php
                    $data = array(
                        'name'      => 'add_student',
                        'value'     => 'Add a student.',
                        'class'     => 'nav_button'
                    );
                    echo form_submit($data);
                ?>

                <?php
                    $data = array(
                        'name'      => 'add_course',
                        'value'     => 'Add a course.',
                        'class'     => 'nav_button'
                    );
                    echo form_submit($data);
                ?>

                <?php
                    $data = array(
                        'name'      => 'add_enrollment',
                        'value'     => 'Enroll a student in a course.',
                        'class'     => 'nav_button'
                    );
                    echo form_submit($data);
                ?>

                <?php
                    $data = array(
                        'name'      => 'view_students',
                        'value'     => 'View all students.',
                        'class'     => 'nav_button'
                    );
                    echo form_submit($data);
                ?>

                <?php
                    $data = array(
                        'name'      => 'view_courses_by_department',
                        'value'     => 'View all courses for a given department.',
                        'class'     => 'nav_button'
                    );
                    echo form_submit($data);
                ?>

                <?php
                    $data = array(
                        'name'      => 'view_student_schedule',
                        'value'     => 'View all courses for a given student.',
                        'class'     => 'nav_button'
                    );
                    echo form_submit($data);
                ?>

    <?php echo form_close(); ?>
</body>
