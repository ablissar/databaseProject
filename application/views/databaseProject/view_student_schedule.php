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
        <?php echo form_open('databaseProject/view_student_schedule'); ?>
        <div class='form_entry'>
            <?php
            echo "Student ID: ";
            echo form_input('student_id');
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
            'value' => 'View Schedule',
            'class' => 'form_submit_button'));
        echo form_submit(array(
            'name' => 'home',
            'value' => 'Home Page',
            'class' => 'home_page_button'));
        echo form_close();
        ?>
    </div>
    <table>
        <?php if(!empty($schedule)) { ?>
        <tr>
            <th>Course Title</th>
            <th class='short_row'>Department</th>
            <th class='short_row'>Course Number</th>
            <th class='short_row'>Credit Hours</th>
        </tr>

        <?php foreach ($schedule as $course): ?>
            <tr>
                <td><?php echo $course[0]['title']; ?></td>
                <td><?php echo $course[0]['deptCode']; ?></td>
                <td><?php echo $course[0]['courseNum']; ?></td>
                <td><?php echo $course[0]['creditHours']; ?></td>
            </tr>
        <?php endforeach; }?>
    </table>
</body>
