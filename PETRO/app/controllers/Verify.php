<?php

class Verify extends Controller
{
    public function __construct(){
        $this->verify=$this->model('M_verify');
    }
    public function index(){
        $this->view('verify');
    }
    public function check(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);
            $code=trim($_POST['code']);

            $data=[
                'code'=>$code,
            ];

            $result = $this->verify->check($data);
            if($result){
                header('location:http://localhost/PETRO/public/Reset');

            }
            else{
                $data=[
                    'error'=>"THE VERIFICATION CODE IS INCORRECT!",
                ];
                $this->view('verify',$data);
            }

        }
    }
}