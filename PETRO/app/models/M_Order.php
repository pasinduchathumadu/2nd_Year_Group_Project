<?php

class M_Order extends Model{

    protected $table = 'order_details';
    public function order_validation($data){
        $result = $this->connection();
        $order_id=$_SESSION['order_id'];
        $sql="select *from $this->table where order_id='".$order_id."'";
        $query = $result->query($sql);
        if($query->num_rows>0){
            while($row = $query->fetch_array()){
                $vehicle_no = $row['vehicle_no'];
                $Fuel_Type = $row['Fuel_Type'];
                $class = $row['class'];
                $Amount = $row['Amount'];
                $payment = $row['payment'];
                $method = $row['method'];
            }
            $arr =array(
                'vehicle_no'=> $vehicle_no,
                'Fuel_Type' => $Fuel_Type,
                'class' => $class,
                'Amount' => $Amount,
                'payment' =>$payment,
                'method'=> $method,
                'loading'=>'1',
                'err'=>'',
            );
            return $arr;

        }
        else{
            return false;
        }
    }
    public function order_complete($data){
        $pumped_liters=$data['pumped'];
        $result = $this->connection();
        $order_id=$_SESSION['order_id'];
        $pump_id=$_SESSION['pump_id'];
        $sql="select *from $this->table where order_id='".$order_id."'";
        $query = $result->query($sql);
        if($query->num_rows>0){
            while($row = $query->fetch_array()){
                $vehicle_no = $row['vehicle_no'];
                $Fuel_Type = $row['Fuel_Type'];
                $class = $row['class'];
                $Amount = $row['Amount'];
                $payment = $row['payment'];
                $method = $row['method'];
            }
            $remaining_liters=$Amount-$pumped_liters;
            if($remaining_liters>=0){
                $sql="update $this->table set Amount ='".$remaining_liters."' where order_id = '".$order_id."'";
                $query=$result->query($sql);
                $sql="select *from $this->table where order_id='".$order_id."'";
                $query=$result->query($sql);
                while($row =$query->fetch_array()){
                    $category=$row['class'];
                    $payment=$row['payment'];
                }
                if($category==92){
                    $price=380*$pumped_liters;
                }
                elseif($category==95){
                    $price=450*$pumped_liters;
                }
                if($method=='ONLINE'){
                    $balance=$payment-$price;

                }
                else{
                    $balance=0.00;
                }
                $arr =array(
                    'vehicle_no'=> $vehicle_no,
                    'Fuel_Type' => $Fuel_Type,
                    'class' => $class,
                    'Amount' => $remaining_liters,
                    'payment' =>$payment,
                    'method'=> $method,
                    'balance'=>$balance,
                    'pumped_liters'=>$pumped_liters,
                    'price'=>$price,
                    'remaining_liters'=>$remaining_liters,
                    'loading'=>'0',
                    'err'=>'YOU ORDER HAS BEEN SUCCESSFULLY COMPLETED!'
                );
                date_default_timezone_set('Asia/Kolkata');
                $date = date('y-m-d');
                $time = date('H:i');
                $sql="insert into complete_order(order_id,pumper_id,Fuel_Type,class,Remaining,pumped_liters,pay,balance,time,pump_date)values('$order_id','$pump_id','$Fuel_Type','$category','$remaining_liters','$pumped_liters','$price','$balance','$time','$date')";
                $query=$result->query($sql);
                $sql="update $this->table set payment ='".$balance."' where order_id = '".$order_id."'";
                $query=$result->query($sql);
                return $arr;

            }
            else{
                $arr=array(
                    'vehicle_no'=> $vehicle_no,
                    'Fuel_Type' => $Fuel_Type,
                    'class' => $class,
                    'Amount' => '0',
                    'payment' =>$payment,
                    'method'=> $method,
                    'loading'=>'1',
                    'err'=>'This Process can not be done!',
                );
                return $arr;

            }

        }

    }
}