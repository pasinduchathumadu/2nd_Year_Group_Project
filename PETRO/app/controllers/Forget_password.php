<?php
    class Forget_password extends Controller
    {
        public function __construct(){
            $this->forget=$this->model('M_Forget_password');
        }

        public function index(){
            $this->view('forget_password');

        }
        public function details(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $_POST=filter_input_array(INPUT_POST,FILTER_UNSAFE_RAW);
                $data=[
                    'Email'=>trim($_POST['email']),
                    'err'=>'',
                ];
                $result=$this->forget->details($data);
                if($result['loading']=='2'){
                    $data=[
                        'error'=>"Message Is not Send!"
                    ];
                    $this->view('forget_password',$data);

                }
                if($result['loading']=='1'){
                    $_SESSION['Email']=$result['Email'];
                    header('location:http://localhost/PETRO/public/Verify');
                }
                else{
                    $data=[
                        'error'=>"This Email Is not in the System!",
                    ];
                    $this->view('forget_password',$data);

                    }

                }
            
        }
    }