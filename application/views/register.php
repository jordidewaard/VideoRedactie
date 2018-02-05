<!doctype html>
<html>
<head>
    <title>Videosets</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<style>

    body{
        background:#d9edf7;
    }
    .custom-bottom-margin{
        padding-bottom:30px;
    }

    .error-msg{
        margin:5px auto;
        width:30%;
        background:#db3737;
        color:#ffffff;
    }
</style>
<body >

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Videosets Toevoegen</h2>
        </div>
    </div>

    <div class="row">

        <?php
        echo validation_errors();

        if(isset($errorMsg))
        {
            echo '<div class="error-msg">';
            echo $errorMsg;
            echo '</div>';
            unset($errorMsg);
        }
        ?>

        <form action="<?php echo site_url()."register/new_user_registration"?>" method="post">
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="name">Voornaam</label>
                <div class="col-sm-5">
                    <input type="text" name="username" class="form-control" value="<?php echo set_value('first_name'); ?>" placeholder="Voeg Naam Toe" id="fname">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="email">E-Mail adres</label>
                <div class="col-sm-5">
                    <input type="email" name="email_value" class="form-control" value="<?php echo set_value('email');?>" placeholder="Voeg E-mail adres toe" id="email">
                </div>
            </div>
            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="confirm_email">Herhaal E-Mail Adres</label>
                <div class="col-sm-5">
                    <input type="text"  name="confirm_email" class="form-control" value="<?php echo set_value('confirm_email');?>" placeholder="Herhaal E-mail Adres" id="confirm_email">
                </div>
            </div>

            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="password">Wachtwoord</label>
                <div class="col-sm-5">
                    <input type="password" name="password" class="form-control" value="<?php echo set_value('password');?>" placeholder="Voeg Wachtwoord In" id="password">
                </div>
            </div>

            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right" for="phone">Telefoonnummer</label>
                <div class="col-sm-5">
                    <input type="text" name="phone" class="form-control" value="<?php echo set_value('phone');?>" placeholder="Voeg Telefoonnummer toe" id="phone">
                </div>
            </div>

            <div class="form-group custom-bottom-margin">
                <label class="control-label col-sm-4 text-right"></label>
                <div class="col-sm-5">
                    <button class="btn btn-primary" type="submit"> Enter</button>
                </div>
            </div>


        </form>
    </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>

</html>
