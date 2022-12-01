<?php
    $flag='';
    if(empty($data['error'])){
        $flag=true;
    }
    else{
        $flag=false;
    }
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo ROOT ?>/CSS/working.css" text="text/css">
        <title>Fuel Pumper</title>
    </head>
    <body>
    <div class="header">
        <img src="<?php echo ROOT ?>/image/petro.jpg" width="200" height="100">
    </div>
    <div class="work">
    <h2 class="middle">Fuel Pump History table</h2>
        <table>
        <thead>
        <tr>
            <th>Order ID</th>
            <th>Date</th>
            <th>Time</th>
            <th>Fuel Type</th>
            <th>Category</th>
            <th>No of Liters</th>
            <th>Payment</th>
            <th>Balance</th>
        </tr>
        </thead>
        <tbody>
    <?php
    if($flag==true){
        if (mysqli_num_rows($data['result']) > 0) {
            while($row = mysqli_fetch_assoc($data['result'])) {
            echo "<tr>
            <td>".$row['order_id']."</td>
            <td>".$row['pump_date']."</td>
            <td>".$row['time']."</td>
            <td>".$row['Fuel_Type']."</td>
            <td>".$row['class']."</td>
            <td>".$row['pumped_liters']."</td>
            <td>".$row['pay']."</td>
            <td>".$row['balance']."</td>
            </tr>";
            }
        }
    }
    else{
         echo $data['error'];
    }
    ?>

    </tbody>
    </table>
    </div>
    <div class="same1">
        <button type="submit"><a href="<?php echo ROOT ?>/Profile/" class="same">Back</a></button>
    </div>
    </body>
</html>