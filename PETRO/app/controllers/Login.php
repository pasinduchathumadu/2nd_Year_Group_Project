<?php

class Login extends Controller
{
    public function __construct(){
        $this->LoginModel=$this->model('M_Login');
    }
    public function index(){
        $this->view('login');
    }

    public function login()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){

            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);

            $data=[
                'Email'=>trim($_POST['email']),
                'password'=>trim($_POST['password']),
                'err'=>'',

            ];

            if($this->LoginModel->login($data)){
                header('location:http://localhost/PETRO/public/User');

            }
            else{
                $data['err']='Password or Username is Incorrect!';
                $this->view('login',$data);
            }
        }
    }
}
