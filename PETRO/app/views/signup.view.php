<?php
if(empty($data['err'])){
    $data['err']=null;
}
?>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/main.css" text="text/css">
        <title>Fuel_Pumper</title>
    </head>
    <body>
            <div class="header">
                <h1 class="sub_a">Fuel Pumper</h1>
            </div>
            <div class="main1">
            <form action="<?php echo ROOT ?>/Signup/register" method="POST">
                <div class="header1"><label>Create an account</label><br><br></div>
                <input class="textarea" type="email" id="Email" name="Email" placeholder="Email" required><br><br>
                <input class="textarea" type="text" id="pump_id" name="pump_id" placeholder="Pumper ID" required><br><br>
                <input class="textarea1" type="text" id="First_name" name="First_name" placeholder="First Name"  required><input class="textarea1" type="text" id="Last_name" name="Last_name" placeholder="Last Name"  required><br><br>
                <input class="textarea" type="password" id="password" name="password" minlength="6" placeholder="Atleast 6 digit of the password required" required><br><br>
                <input class="textarea" type="password" id="confirm_password" name="confirm_password" placeholder="Confirm the Password" required><br><br>
                <button type="submit" name="submit">Register</button>
                <label class="login"><a href="<?php echo ROOT ?>/Login/" class="same">Change to Login</a></label>
            </form>
            <br><label class="error"><?php echo $data['err'] ?></label>
        </div>
    </body>
</html>