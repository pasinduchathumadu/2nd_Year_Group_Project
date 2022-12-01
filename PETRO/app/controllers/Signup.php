<?php

class Signup extends Controller
{
    public function __construct(){
        $this->RegisterModel=$this->model('M_Signup');
    }
    public function index(){
        $this->view('signup');
    }
    public function register(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);

            $data=[
                'Email'=>trim($_POST['Email']),
                'pumper_id'=>trim($_POST['pump_id']),
                'First_name'=>trim($_POST['First_name']),
                'Last_name'=>trim($_POST['Last_name']),
                'password'=>trim($_POST['password']),
                'confirm_password'=>trim($_POST['confirm_password']),
                'err'=>'',

            ];

            if(empty($this->RegisterModel->register($data))){
                    header('location:http://localhost/PETRO/public/Login');
            }
            else{
                    $error_message=$this->RegisterModel->register($data);
                    $data['err']=$error_message;
                    $this->view('signup',$data);
            }

        }
    }
}