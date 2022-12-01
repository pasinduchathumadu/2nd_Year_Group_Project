<?php

class Profile extends Controller{
    public function __construct(){
        $this->profile=$this->model('M_Profile');
    }
    public function index(){
        $data=[
            'pumper_id'=>$_SESSION['pump_id'],
            'Email'=>'',

        ];
        $result=$this->profile->pumper_details($data);
        if($result){
            $this->view('profile',$result);
        }
    }
}