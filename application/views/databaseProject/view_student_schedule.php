<body>
    <?php
        echo form_open('databaseProject/view_student_schedule');

        echo "Student ID: ";
        echo form_input('student_id');

        echo form_submit('submit', 'View Schedule');
        echo form_submit('home', 'Home Page');
        echo form_close();

        foreach ($schedule as $course): ?>
            <h3><?php echo $course[0]['title']; ?></h3>
            <?php
            echo $course[0]['deptCode'];
            echo $course[0]['courseNum'];
            echo $course[0]['creditHours'];
            //print_r($course);
        endforeach;
    ?>
</body>
