<body>
    <?php
        echo form_open('databaseProject/view_courses_by_department');

        echo "Department Code: ";
        echo form_input('department_code');

        echo form_submit('submit', 'View Courses');
        echo form_submit('home', 'Home Page');
        echo form_close();

        foreach ($courses as $course): ?>
            <h3><?php echo $course['title']; ?></h3>
            <?php
            echo $course['deptCode'];
            echo $course['courseNum'];
            echo $course['creditHours'];
        endforeach;
    ?>
</body>
