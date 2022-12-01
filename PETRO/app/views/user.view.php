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
        <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/main1.css" text="text/css">
        <title>Fuel Pumper</title>
    </head>
    <body>
            <div class="header">
                <div class="header1">
                <img src="<?php echo ROOT ?>/image/petro.jpg" width="200" height="100">
                </div><br>
                <div class="header1"><label class="middle">User_Account<a href="<?php echo ROOT ?>/Profile"><img class="image"src="<?php echo ROOT ?>/image/profile1.jpg"  height="90" width="90"/></a></label>
            </div>
            </div>
            <br><br><br><br><br>
            <div class="main2">
                <form action="<?php echo ROOT ?>/User/order_verify" method="post"><br>
                    <label class="main3">Order Validations</label><br><br><br>
                    <label class="main4">Enter the Order Number:</label>
                    <input class="textarea" type="text" id="order_id" name="order_id" required><br><br><br>
                    <button type="submit" name="submit">Next</button>
                </form>
            </div>
            <div class="footer_1">
            <label class="error"><?php echo $data['err'] ?></label>
            </div>
            <div class="footer_2">
                <div class="left">
                    Date:<?php echo $data['date']?>
                </div>
                <div class="right">
                    Login:<?php echo $data['time']?>
                </div>
            </div>
    </body>
</html>