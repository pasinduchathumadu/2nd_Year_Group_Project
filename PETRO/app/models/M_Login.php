<?php

class M_Login extends Model{
    protected $table = 'fuel_pumper';

    public function login($data)
    {
        $result1=$this->login_pumper($data);

        if($result1->num_rows>0){
            while($row = $result1->fetch_assoc()){
                $pump_id = $row["pumper_id"];
                $_SESSION['pump_id']=$pump_id;//have any result
                return true;
               }//render the page
        }
        else{
           return false;
        }
    }



}