<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CountryMod extends CI_Model{
    
    public function saveCountry($data){
        if($data){
            $response = $this->db->insert('countries', $data); 
            if($response){
                return true;
            }else{
                return false;
            }
        }
    }

    public function updateCountry($data){
        if($data){
            $this->db->where('country_id', $data['country_id']);
            $response = $this->db->update('countries', $data); 
            if($response){
                return true;
            }else{
                return false;
            }
        }
    }

    public function removeCountry($id){
        if($id){
            $this->db->where('category_id', $id);
             $data = array('category_status'=>0);
            $response = $this->db->update('categories', $data); 
            if($response){
                return true;
            }else{
                return false;
            }
        }
    }

    public function getAllCategory(){

        $query = $this->db->get_where('categories', array('category_status' => 1));
        $result=$query->result();
        if($result){
            return $result;
        }else{
            return false;
        }
        
    }

    public function getCategoryOption(){
        $results = array();
        $this->db->select("category_id,category_name"); 
        $query = $this->db->get_where('categories', array('category_status' => 1));
        $result=$query->result();
       
        if($result){
            foreach ($result as $key => $value) {
                $results[$value->category_id] = $value->category_name;
            }
            return $results;
        }else{
            return false;
        }
        
    }

    public function getPositionsOption(){
        $results = array();
        $this->db->select("position_id,position_name"); 
        $query = $this->db->get_where('positions', array('position_status' => 1));
        $result=$query->result();
       
        if($result){
            foreach ($result as $key => $value) {
                $results[$value->position_id] = $value->position_name;
            }
            return $results;
        }else{
            return false;
        }
        
    }

    public function getCategoryById($id){

        $query = $this->db->get_where('categories', array('category_id' => $id,'category_status' => 1));
        $result = $query->row();
       // $result=$query->result();
        if($result){
                return $result;
        }else{
            return false;
        }
        
    }

    
}
?>