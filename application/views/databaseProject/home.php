<body>
    <header class="header">
        Adam Bliss Project Home <br />
    </header>
    <?php echo form_open('', ''); ?>
    <table>
        <tr>
            <td>1</td>
            <td>Add a new student.</td>
            <td><?php echo form_submit('one', 'Go'); ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Add a new course.</td>
            <td><?php echo form_submit('two', 'Go'); ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Add a new enrollment.</td>
            <td><?php echo form_submit('three', 'Go'); ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td>View all students.</td>
            <td><?php echo form_submit('four', 'Go'); ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td>View all courses from a given department.</td>
            <td><?php echo form_submit('five', 'Go'); ?></td>
        </tr>
        <tr>
            <td>6</td>
            <td>View all courses for a given student.</td>
            <td><?php echo form_submit('six', 'Go'); ?></td>
        </tr>
    </table>
    <?php echo form_close(); ?>
</body>
