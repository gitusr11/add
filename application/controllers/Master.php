<?php
class Master extends CI_Controller{
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }

  function index(){
    //Allowing akses to admin only
      if($this->session->userdata('level')==='1'){
          $this->load->view('dashboard_view');
      }else{
          echo "Access Denied";
      }
  }

/*Category*/
  function category_list(){
    $this->load->model('CategoryMod');
    $data['categories'] = $this->CategoryMod->getAllCategory();
    $this->load->view('category_list',$data);  
  }

  function category_add($id=null){
    $data = $this->input->post(); 
    //print_r($id); exit;

    $this->load->model('CategoryMod');
    if($id == null){ // add new data
      if($this->input->server('REQUEST_METHOD') == 'POST'){
        $data = $this->input->post();
        $result = $this->CategoryMod->saveCategory($data);
        if($result){
          $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Save successfully</div>');
        }else{
          $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Something went wrong</div>');
        }
      }
    $this->load->view('category_add');  

    }else{ // update data
      
        if($this->input->server('REQUEST_METHOD') == 'POST'){
          $data = $this->input->post();
          $data['category_id'] = $id; 
          $result = $this->CategoryMod->updateCategory($data);
          
          if($result){
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Save successfully</div>');
          }else{
            $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Something went wrong</div>');
          }
      }

      $data['databaseData'] = $this->CategoryMod->getCategoryById($id);
      $this->load->view('category_add',$data);
    }
  }

  function category_remove($id=null){

    $this->load->model('CategoryMod');
    if($id != null){ // add new data
        $result = $this->CategoryMod->removeCategory($id);
          
        if($result){
            redirect('master/category_list', 'refresh');

        }
    }
  }

/*Category*/

//  <-------------------------->

/* Country */

function country_list(){
  $this->load->model('CountryMod');
  $data['countries'] = $this->CountryMod->getAllCategory();
  $this->load->view('category_list',$data);  
}

function category_add($id=null){
  $data = $this->input->post(); 
  //print_r($id); exit;

  $this->load->model('CategoryMod');
  if($id == null){ // add new data
    if($this->input->server('REQUEST_METHOD') == 'POST'){
      $data = $this->input->post();
      $result = $this->CategoryMod->saveCategory($data);
      if($result){
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Save successfully</div>');
      }else{
        $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Something went wrong</div>');
      }
    }
  $this->load->view('category_add');  

  }else{ // update data
    
      if($this->input->server('REQUEST_METHOD') == 'POST'){
        $data = $this->input->post();
        $data['category_id'] = $id; 
        $result = $this->CategoryMod->updateCategory($data);
        
        if($result){
          $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Save successfully</div>');
        }else{
          $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Something went wrong</div>');
        }
    }

    $data['databaseData'] = $this->CategoryMod->getCategoryById($id);
    $this->load->view('category_add',$data);
  }
}

function category_remove($id=null){

  $this->load->model('CategoryMod');
  if($id != null){ // add new data
      $result = $this->CategoryMod->removeCategory($id);
        
      if($result){
          redirect('master/category_list', 'refresh');

      }
  }
}

/* Country */

}
