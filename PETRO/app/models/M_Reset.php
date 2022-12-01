<?php

class M_Rest extends Model{
    protected $table = 'fuel_pumper';
    public function check($data){
        $Email = $_SESSION['Email'];
        $result = $this->connection();
        if($data['new']==$data['confirm']){
            $sql="update $this->table set Amount ='".$data['new']."' where order_id = '".$Email."'";
            $query=$result->query($sql);
            return true;
        }
        else{
            return false;
        }
    }
}