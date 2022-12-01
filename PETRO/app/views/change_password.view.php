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
        <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/change.css" text="text/css">
        <title>Fuel_Pumper</title>
        <script type="text/javascript">
        function test_str() {
            var res;
            var str =
                document.getElementById("t1").value;
            if (str.match(/[a-z]/g) && str.match(
                    /[A-Z]/g) && str.match(
                    /[0-9]/g) && str.match(
                    /[^a-zA-Z\d]/g) && str.length >= 8)
                res = "TRUE";
            else
                alert("Boundary rules are not matched!Check the conditions.");
        }
    </script>
    </head>
    <body>
        <div class="change">
            <form  method="POST" action="<?php echo ROOT ?>/Change_password/change">
                <p>Existing password<br />
                <input type="password" name="current_password" required /></p>
                <p>New password<br/>
                <input type="password" name="new_password" id="t1" required/>
                </p>
                <p>Confirm password<br />
                <input type="password" name="confirm_password" required/>
                </p>
                <div class="list">
                    <ul type="Square">
                            <li>At least 1 uppercase character.</li>
                            <li>At least 1 lowercase character.</li>
                            <li>At least 1 digit.</li>
                            <li>At least 1 special character.</li>
                            <li>Minimum 8 characters.</li>

                    </ul>
                </div>
                <button><a href="<?php echo ROOT ?>/Profile" class="same">Back</a></button>
                <button name="submit" type="submit" onclick="test_str()">Save Password</button>
            </form>
        </div>
    <div class="footer">
        <label class="error"><?php echo $data['err'] ?></label>
    </div>
    </body>
</html>