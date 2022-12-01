<?php

class M_final extends Model{
    protected $table = 'fuel_pumper';
    public function check($data){
        $Email = $data['Email'];
        $result = $this->connection();
        if($data['new']==$data['confirm']){
            $sql="update $this->table set password ='".$data['new']."' where Email = '".$Email."'";
            $query=$result->query($sql);
            return true;
        }
        else{
            return false;
        }
    }
}