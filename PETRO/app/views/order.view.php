<?php
    if($data['loading']=='1'){
        $data['pumped_liters']=null;
        $data['remaining_liters']=null;
        $data['price']=null;
        $data['balance']=null;
    }
?>


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/order.css" text="text/css">
        <title>Fuel Pumper</title>
    </head>
    <script>
        function validateForm() {
        var x = document.forms["myForm"]["pumped"].value;
            if (x == "" || x == null) {
                alert("Amount of the pumped liters must be filled out");
                return false;
            }
            else{
                return true;
            }
        }
    </script>
    <body>
        <div class="inline">
        <img class="image"src="<?php echo ROOT ?>/image/petro.jpg"  height="90" width="200"/><div class="header">Order details </div></div><div class="header1">Order ID:<?php echo($_SESSION['order_id']); ?><span class="tab"></span></div><br>
        <div class="table1">
        <div class="main1">
        <table id='display'>

        <tr>
        <td><b>Order ID:<span class="space"><?php echo($_SESSION['order_id'])?></span></td>
        </tr>
        <tr>
        <td><b>Vehicle No:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data["vehicle_no"] ?></td>
        </tr>
        <tr>
        <td><b>Fuel Type:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data["Fuel_Type"] ?>-&nbsp;<?php echo $data["class"] ?></td>
        </tr>
        <tr>
        <td><b>Amount:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data["Amount"] ," Liters","<br>"; ?></td>
        </tr>
        <tr>
        <td><b>Payment:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RS.<?php echo $data["payment"] ?></td>
        </tr>
        <tr>
        <td><b>Method:<span class="space"><?php echo $data["method"]?></span></td>
        </tr>
        </table><br><br><br><br><br><br><br><br>
        </div>
        <div class="main2">
            <form name="myForm" action="<?php echo ROOT ?>/Order/order_complete" onsubmit="return validateForm()" method="post" required >
                <label>Enter Liters:</label>&nbsp;&nbsp;&nbsp;
                <input class="textarea" type="number" name="pumped" />
                <button type="submit" name="OK" id="ok">Complete Order</button><br><br>
            </form>
            <?php
                echo "Pumped Liters:",$data['pumped_liters'],"<br>";
                echo "Remaining Liters:",$data['remaining_liters'],"<br>";
                echo "Price:RS.",$data['price'],"<br>";
                echo "Balance:",$data['balance'],"<br>";
            ?>
            <br><br><div class="but-2">
                <button type="submit"><a href="<?php echo ROOT ?>/User" class="same">Back</a></button></div>
            </div>
        </div>
        <div class="footer">
            <label class="error"><?php echo $data['err'] ?></label>
        </div>
    </body>
</html>