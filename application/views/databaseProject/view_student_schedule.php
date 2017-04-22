<body>
    <?php
        echo form_open('databaseProject/view_student_schedule');

        echo "Student ID: ";
        echo form_input('student_id');

        echo form_submit('submit', 'View Schedule');
        echo form_submit('home', 'Home Page');
        echo form_close();

        foreach ($schedule as $course): ?>
            <h3><?php //echo $course['title']; ?></h3>
            <?php
            echo $course['deptCode'];
            echo $course['courseNum'];
        endforeach;
    ?>
</body>
