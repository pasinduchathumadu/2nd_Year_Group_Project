<?php

class M_Change_password extends Model
{
    protected $table = 'fuel_pumper';
    public function change($data){
        $pump_id = $_SESSION['pump_id'];
        $current = $data['current_password'];
        $new = $data['new_password'];
        $confirm = $data['confirm_password'];
        $result=$this->connection();
        $sql="select * from $this->table where pumper_id = '".$pump_id."'";
        $query = $result->query($sql);
        while($row = $query->fetch_array()){
            $original_password=$row['password'];
            if($original_password!=$current){
                $error="Existing Password is not match!";
                return $error;

            }
            else{
                if($new==$confirm){
                    $sql="update $this->table set password ='".$new."' where pumper_id = '".$pump_id."'";
                    $query=$result->query($sql);
                    $error="Successfully Changed the password";
                    return $error;
                }
                else{
                    $error="Password didn't matched!";
                    return $error;
                }
            }
        }

    }
}