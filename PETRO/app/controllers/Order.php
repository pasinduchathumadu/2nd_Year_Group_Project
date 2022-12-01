<?php

class Order extends Controller
{
    public function __construct(){
        $this->order=$this->model('M_Order');
    }
    public function index(){
        $data=[
            'order_id'=>$_SESSION['order_id'],
        ];
        $result=($this->order->order_validation($data));
        if($result){
            $this->view('order',$result);
        }
        else{
            $this->view('order',$data);
        }
    }
    public function order_complete(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $data=[
                'pumped'=>trim($_POST['pumped']),
                'err'=>'',
            ];
            $result=($this->order->order_complete($data));
            if($result){
                $this->view('order',$result);
            }
        }
    }
}