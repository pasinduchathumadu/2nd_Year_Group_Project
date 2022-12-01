<?php


class M_User extends Model
{
    protected $table = 'order_details';
    public function order_verify($data){
        $order_id='';
        $check_id = $data['order_no'];
        $result=$this->connection();
        $sql="select * from $this->table where order_id = '".$check_id."'";
        $check= $result->query($sql);
        while($row = $check->fetch_assoc())
            $order_id = $row['order_id'];
        if($order_id===$check_id){
                $_SESSION['order_id']=$order_id;
                return true;
        }
        else{
                return false;
        }

    }
}