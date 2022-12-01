<?php

class Working extends Controller
{
    public function __construct(){
        $this->working=$this->model('M_Working');
    }
    public function index(){
        $data=[
            'pumper_id'=>$_SESSION['pump_id'],
            'error'=>'',
        ];
        $result=($this->working->details_working($data));
        if($result){
            $this->view('working',$result);
        }
        else{
            $data['error']="No Records";
            $this->view('working',$data);
        }
    }
}