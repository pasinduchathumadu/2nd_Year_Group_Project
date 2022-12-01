<?php
if(empty($data['error'])){
    $data['error']=null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/forgot.css" text="text/css">
    <title>Fuel Pumper</title>
</head>
<body>
    <div class="main-1">
        <div class="header">
        <label class="header">Email Verification</label></div>
        <form action="<?php echo ROOT ?>/Forget_password/details" method="post">
            <div class="form">
                <label>Enter your email:</label><br><br>
                <input type="email"class="textarea" name="email" placeholder="E-Mail Address" required><br><br>
                <input type="submit" value="SEND" name="submit" class="button1"><br>
            </div><br>
            <div class="back">
                <button type="submit"><a href="<?php echo ROOT ?>/Login" class="same">Back</a></button>
            </div>
        </form>
        <label class="error"><?php echo $data['error'] ?></label>

    </div>
</body>
</html>