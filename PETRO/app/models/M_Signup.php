<?php

class M_Signup extends Model
{
    protected $table='fuel_pumper';
    public function register($data){
        $result1=$this->pumper_register($data);
        return $result1;
    }
}