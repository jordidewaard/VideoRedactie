<!DOCTYPE html>
<html>
<head>
    <title>Voeg Videosets toe</title>
    <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>public/css/styles.css" rel="stylesheet">
</head>
<body>
<div id="container">
    <?php echo form_open('contactForm'); ?>
    <h1>Videosets uitgeven</h1>
    <?php echo form_label('Video Set Name :'); ?>
    <?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?>
    <?php echo form_label('Video Set ID :'); ?>
    <?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?>
    <?php echo form_label('Video Set Assigned to User ID :'); ?>
    <?php echo form_input(array('id' => 'dmobile', 'name' => 'dmobile')); ?>
    <?php echo form_label('Video Set Stored Location :'); ?>
    <?php echo form_input(array('id' => 'daddress', 'name' => 'daddress')); ?>
    <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
    <?php echo form_close(); ?>
</div>
</body>
</html>