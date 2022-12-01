<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/main3.css" text="text/css">
        <title>Fuel Pumper</title>
    </head>
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            }
            else
            {
                x.type = "password";
            }
        }
    </script>
    <body>
            <h1 class="head1"><img src="<?php echo ROOT ?>/image/petro.jpg" height="60" width="140"><label class="sub2">Hi <?php echo $data['First_name'];?></label></h1>
            <div class="sub">
                <div class="row">
                    <div class="column1">
                    <img class="image"src="<?php echo ROOT ?>/image/profile1.jpg" height="190" width="190"/><br><br>
                    <div class="but1">
                        <button type="submit"><a href="<?php echo ROOT ?>/Working/" class="same">Pumping History</a></button><br><br><br>
                        <button type="submit"><a href="<?php echo ROOT ?>/Change_password/" class="same">Change Password</a></button><br><br>
                    </div>
                    </div>
                    <div class="column">
                            <label>User Account Details</label><br><br>
                            <label class="textarea">Pumper ID:<?php echo $data['pumper_id']?></label><br><br>
                            <label class="textarea">Name:<?php echo $data['First_name']?> <?php echo $data['Last_name'];?></label><br><br>
                            <label class="textarea">Email:<?php echo $data['Email'];?></label><br><br>
                            <label class="textarea">Password:<input type="password" value="<?php echo $data['password']; ?>" id="myInput" readonly="readonly" style="width:25%">&nbsp;<input type="checkbox" onclick="myFunction()"></label>
                </div>
            </div>
        <button type="submit"><a href="<?php echo ROOT ?>/User/" class="same">Back</a></button>
        <button type="submit" class="logout"><a href="<?php echo ROOT ?>/Login/" class="same">Logout</a></button>
         </div>
    </body>
</html>
