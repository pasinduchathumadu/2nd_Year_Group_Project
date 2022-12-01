<?php

class M_Working extends Model
{
    protected $table = 'complete_order';
    public function details_working($data){
        $pumper_id = $_SESSION['pump_id'];
        $result = $this->connection();
        $sql="select *from $this->table where pumper_id = '".$pumper_id."'";
        $query = $result->query($sql);
        
        if($query->num_rows>0){
                $data=[
                    'result'=>$query,
                    'error'=>'',
                ];
                return $data;
        }
        else{
            return false;
        }
    }
}