<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CityMod extends CI_Model{
    
    public function saveCity($data){
        if($data){
            $response = $this->db->insert('cities', $data); 
            if($response){
                return true;
            }else{
                return false;
            }
        }
    }

    public function updateCity($data){
        if($data){
            $this->db->where('city_id', $data['city_id']);
            $response = $this->db->update('cities', $data); 
            if($response){
                return true;
            }else{
                return false;
            }
        }
    }

    public function removeCity($id){
        if($id){
            $this->db->where('city_id', $id);
             $data = array('city_status'=>0);
            $response = $this->db->update('cities', $data); 
            if($response){
                return true;
            }else{
                return false;
            }
        }
    }

    public function getAllCity(){

        $query = $this->db->get_where('cities', array('city_status' => 1));
        $result=$query->result();
        if($result){
            return $result;
        }else{
            return false;
        }
        
    }

    public function getCityOption(){
        $results = array();
        $this->db->select("city_id,city_name"); 
        $query = $this->db->get_where('cities', array('city_status' => 1));
        $result=$query->result();
       
        if($result){
            foreach ($result as $key => $value) {
                $results[$value->city_id] = $value->city_name;
            }
            return $results;
        }else{
            return false;
        }
        
    }

    public function getCityById($id){

        $query = $this->db->get_where('cities', array('city_id' => $id,'city_status' => 1));
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