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
    //print_r($data); exit;

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
  $data['countries'] = $this->CountryMod->getAllCountry();
  $this->load->view('country_list',$data);  
}

function country_add($id=null){
  $data = $this->input->post(); 
  //print_r($id); exit;

  $this->load->model('CountryMod');
  if($id == null){ // add new data
    if($this->input->server('REQUEST_METHOD') == 'POST'){
      $data = $this->input->post();
      $result = $this->CountryMod->saveCountry($data);
      if($result){
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Save successfully</div>');
      }else{
        $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Something went wrong</div>');
      }
    }
  $this->load->view('country_add');  

  }else{ // update data
    
      if($this->input->server('REQUEST_METHOD') == 'POST'){
        $data = $this->input->post();
        $data['country_id'] = $id; 
        $result = $this->CountryMod->updateCountry($data);
        
        if($result){
          $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Save successfully</div>');
        }else{
          $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Something went wrong</div>');
        }
    }

    $data['databaseData'] = $this->CountryMod->getCountryById($id);
    $this->load->view('country_add',$data);
  }
}

function country_remove($id=null){

  $this->load->model('CountryMod');
  if($id != null){ // add new data
      $result = $this->CountryMod->removeCountry($id);
        
      if($result){
          redirect('master/country_list', 'refresh');

      }
  }
}
/* Country */

/* State */ 

function state_list(){
  $this->load->model('StateMod');
  $data['states'] = $this->StateMod->getAllState();
  $this->load->view('state_list',$data);  
}

function state_add($id=null){
  $data = $this->input->post(); 
  //print_r($data); exit;

  $this->load->model('StateMod');
  if($id == null){ // add new data
    if($this->input->server('REQUEST_METHOD') == 'POST'){
      $data = $this->input->post();
      $result = $this->StateMod->saveState($data);
      if($result){
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Save successfully</div>');
      }else{
        $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Something went wrong</div>');
      }
    }
  $this->load->view('state_add');  

  }else{ // update data
    
      if($this->input->server('REQUEST_METHOD') == 'POST'){
        $data = $this->input->post();
        $data['state_id'] = $id; 
        $result = $this->StateMod->updateState($data);
        
        if($result){
          $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Save successfully</div>');
        }else{
          $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Something went wrong</div>');
        }
    }

    $data['databaseData'] = $this->StateMod->getStateById($id);
    $this->load->view('state_add',$data);
  }
}

function state_remove($id=null){

  $this->load->model('StateMod');
  if($id != null){ // add new data
      $result = $this->StateMod->removeState($id);
        
      if($result){
          redirect('master/state_list', 'refresh');

      }
  }
}

/* State  */

/* City */


function city_list(){
  $this->load->model('CityMod');
  $data['cities'] = $this->CityMod->getAllCity();
  $this->load->view('city_list',$data);  
}

function city_add($id=null){
  $this->load->model('StateMod');
  $data = $this->input->post(); 
  $data['states'] = $this->StateMod->getStateOption();
  // print_r($data['states']);
  // die();
  $this->load->model('CityMod');
  if($id == null){ // add new data
    if($this->input->server('REQUEST_METHOD') == 'POST'){
      $data = $this->input->post();
      $result = $this->CityMod->saveCity($data);
      if($result){
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Save successfully</div>');
      }else{
        $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Something went wrong</div>');
      }
    }
  $this->load->view('city_add',$data);  

  }else{ // update data
    
      if($this->input->server('REQUEST_METHOD') == 'POST'){
        $data = $this->input->post();
        $data['city_id'] = $id; 
        $result = $this->CityMod->updateCity($data);
        
        if($result){
          $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Save successfully</div>');
        }else{
          $this->session->set_flashdata('error', '<div class="alert alert-danger" role="alert">Something went wrong</div>');
        }
    }

    $data['databaseData'] = $this->CityMod->getCityById($id);
    $this->load->view('city_add',$data);
  }
}

function city_remove($id=null){

  $this->load->model('CityMod');
  if($id != null){ // add new data
      $result = $this->CityMod->removeCity($id);
        
      if($result){
          redirect('master/city_list', 'refresh');

      }
  }
}

/* City */
}
