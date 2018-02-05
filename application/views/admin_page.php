<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
    $email = ($this->session->userdata['logged_in']['email']);
} else {
    header("location: login");
}
?>
<head>
    <title>Admin Pagina</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="profile">
    <?php
    echo "Hallo <b id='welkom'><i>" . $username . "</i> !</b>";
    echo "<br/>";
    echo "<br/>";
    echo "Welkom op de admin page";
    echo "<br/>";
    echo "<br/>";
    echo "Je gebruikersnaam is " . $username;
    echo "<br/>";
    echo "Je email-adres is " . $email;
    echo "<br/>";
    ?>

    <br><a href="<?php echo base_url(); ?>users">Users Editen</a></br>

    <b id="logout"><a href="logout">Logout</a></b>
</div>



<br/>
</body>
</html>