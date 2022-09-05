<?php
class Chart extends CI_Controller{
    function index(){
        //load chart_model from model
        $this->load->model('chart_model');
        
        $data = $this->chart_model->account_data()->result();
        $x['data'] = json_encode($data);
        $this->load->view('chart_view',$x);
    }
}