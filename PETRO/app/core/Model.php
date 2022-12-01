<?php

class Model extends Database
{
    public function connection(){
      $result=$this->connect();
      return $result;
    }
    public function login_pumper($data){
        $Email=$data['Email'];
        $Password = $data['password'];
        $sql="select * from $this->table where password ='".$Password."' AND Email='".$Email."'";
        $result=$this->connect()->query($sql);
        return $result;
    }
    public function pumper_register($data){
      $pumper_id  =$data['pumper_id'];
      $Email      =$data['Email'];
      $First_name = $data['First_name'];
      $Last_name  = $data['Last_name'];
      $Password   =$data['password'];
      $confirm_password=$data['confirm_password'];

      $sql="select * from fuel_pumper where Email='".$Email."'";
      $result=$this->connect()->query($sql);

      if($result->num_rows>0)
      {
        $error_message="This Email is Already Exist!";
        return $error_message;
      }
      else
      {
        if($confirm_password==$Password){
          $sql="insert into $this->table (pumper_id,First_name,Last_name,Email,password)values('$pumper_id','$First_name','$Last_name','$Email','$Password')";
          $result=$this->connect()->query($sql);
          $error_message="";
          return $error_message;
        }
        else
        {
          $error_message="Password didn't matched!";
          return $error_message;
        }

      }
    }
    public function mail($model){
      require_once '../app/core/'.$model.'.php';

      return new $model();
  }
}