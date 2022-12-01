<?php

class M_profile extends Model{
    protected $table='fuel_pumper';

    public function pumper_details($data){
        $pumper_id = $data['pumper_id'];
        $result=$this->connection();
        $sql = "select * from $this->table where pumper_id='".$pumper_id."'";
        $query=$result->query($sql);
        while($row = $query->fetch_array()){
            $Email= $row['Email'];
            $First_name = $row['First_name'];
            $Last_name = $row['Last_name'];
            $password = $row['password'];
        }
        $arr=array(
            'pumper_id' => $pumper_id,
            'Email'=>$Email,
            'First_name'=>$First_name,
            'Last_name'=>$Last_name,
            'password'=> $password,
        );
        return $arr;


    }
}