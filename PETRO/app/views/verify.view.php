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
        <label class="header">Verification Code</label></div>
        <form action="<?php echo ROOT ?>/Verify/check" method="post">
            <div class="form">
                <label>Enter Verification code:</label><br><br>
                <input type="text" name="code" maxlength="4" size="10"><br><br>
                <input type="submit" value="Verify" name="submit" class="button1"><br>
            </div>
            <label class="error"><?php echo $data['error'] ?></label>
        </form>
</div>
</body>
</html>