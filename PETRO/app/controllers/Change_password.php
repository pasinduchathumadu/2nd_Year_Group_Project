<?php

class Change_password extends Controller
{
    public function __construct(){
        $this->change=$this->model('M_Change_password');
    }
    public function index(){
        $this->view('change_password');
    }

    public function change(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);

            $data=[
                'current_password'=>trim($_POST['current_password']),
                'new_password'=>trim($_POST['new_password']),
                'confirm_password'=>trim($_POST['confirm_password']),
                'err'=>'',

            ];
            $result=$this->change->change($data);
            $data['err']=$result;
            $this->view('change_password',$data);
        }
    }
}