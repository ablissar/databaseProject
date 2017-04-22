<body>
    <h2><?php echo $title; ?></h2>

    <?php foreach ($students as $student): ?>
        <h3><?php echo $student['studentName']; ?></h3>
        <?php echo $student['studentID']; ?>
        <?php echo $student['major']; ?>
    <?php endforeach; ?>

    <?php echo form_open('', ''); ?>
    <?php echo form_submit('home', 'Home Page'); ?>
    <?php echo form_close(); ?>
</body>
