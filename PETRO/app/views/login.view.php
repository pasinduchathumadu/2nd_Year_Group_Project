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
        <title>Fuel Pumper</title>
    </head>
    <body>
            <div class="header">
                <h1 class="sub_a">Fuel Pumper</h1>
            </div>
            <div class="main1">
            <form action="<?php echo ROOT ?>/Login/login" method="post">
                <div class="header1"><label>Login Form</label><br><br></div><br>
                <input class="textarea" type="email" id="email" name="email" placeholder="Email" required><br><br>
                <input class="textarea" type="password" id="password" name="password" placeholder="Password" required><br><br>
                <label class="error"><?php echo $data['err'] ?></label><br>
                <button type="submit" name="submit">Login</button><br><br><br>
                <div class="column">
                    <div class="col">
                    <h3>Didn't have an account?<br><a href="<?php echo ROOT ?>/Signup">Register Now.</h3></a>
                    </div>
                    <div class="col2">
                        <h3>Forgot the password? <br><a href="<?php echo ROOT ?>/Forget_password"> Click here.</h3></a>
                    </div>
                </div><br><br>
            </form>
        </div>
    </body>
</html>