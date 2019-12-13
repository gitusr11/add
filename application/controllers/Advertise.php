<?php
class Advertise extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }

  function index(){
    
    $this->load->model('AdvertiseMod');
    $data['advertises'] = $this->AdvertiseMod->getAllAdvertise();
    $this->load->view('advertise_list',$data);
    
  }

  function advertise_add(){
    //$data1 = $this->input->post();
    //print_r($data1); exit;
  //Array ( [advertise_name] => dfvdv [category_id] => 4 [position_id] => Array ( [0] => 2 [1] => 3 ) [advertise_desc] => sdsfdsffs [advertise_media] => Screenshot (2).png )
  if($this->input->server('REQUEST_METHOD') == 'POST'){
    $this->load->model('AdvertiseMod');
    $data = $this->input->post();
    unset( $data['position_id'] );

        $result = $this->AdvertiseMod->saveAdvertise($data);
        if($result){
          $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Save successfully</div>');
        }else{
          $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Something went wrong</div>');
        }
  }

    $this->load->model('CategoryMod');
    $data['category'] = $this->CategoryMod->getCategoryOption();
    $data['position'] = $this->CategoryMod->getPositionsOption();

    $this->load->view('advertise_add',$data);
    
  }



}
