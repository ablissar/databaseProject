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
        <?php echo form_open('databaseProject/view_courses_by_department'); ?>
        <div class='form_entry'>
            <?php
            echo "Department Code: ";
            echo form_dropdown('department_code', array_column($department_codes, 'deptCode', 'deptCode'));
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
            'value' => 'View Courses',
            'class' => 'form_submit_button'));
        echo form_submit(array(
            'name' => 'home',
            'value' => 'Home Page',
            'class' => 'home_page_button'));
        echo form_close();
        ?>
    </div>
    <table>
        <?php if(!empty($courses)) { ?>
        <tr>
            <th>Course Title</th>
            <th class='short_row'>Department</th>
            <th class='short_row'>Course Number</th>
            <th class='short_row'>Credit Hours</th>
        </tr>

        <?php foreach ($courses as $course): ?>
            <tr>
                <td><?php echo $course['title']; ?></td>
                <td><?php echo $course['deptCode']; ?></td>
                <td><?php echo $course['courseNum']; ?></td>
                <td><?php echo $course['creditHours']; ?></td>
            </tr>
        <?php endforeach; }?>
    </table>
</body>
