<body>
    <header><?php echo $title; ?></header>

    <table>
        <tr>
            <th>Name</th>
            <th>ID Number</th>
            <th>Major</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student['studentName']; ?></td>
                <td><?php echo $student['studentID']; ?></td>
                <td><?php echo $student['major']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class='form_buttons_table'>
        <?php
        echo form_open('', '');
        echo form_submit(array(
            'name' => 'home',
            'value' => 'Home Page',
            'class' => 'home_page_button'));
        echo form_close();
        ?>
    </div>
</body>
