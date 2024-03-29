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
            $this->db->where('country_id', $id);
             $data = array('country_status'=>0);
            $response = $this->db->update('countries', $data); 
            if($response){
                return true;
            }else{
                return false;
            }
        }
    }

    public function getAllCountry(){

        $query = $this->db->get_where('countries', array('country_status' => 1));
        $result=$query->result();
        if($result){
            return $result;
        }else{
            return false;
        }
        
    }

    public function getCountryOption(){
        $results = array();
        $this->db->select("country_id,country_name"); 
        $query = $this->db->get_where('countries', array('country_status' => 1));
        $result=$query->result_array();
       return $result ;
        // if($result){
        //     foreach ($result as $key => $value) {
        //         $results[$value->country_id] = $value->country_name;
        //     }
        //     return $results;
        // }else{
        //     return false;
        // }
        
    }

    public function getCountryById($id){

        $query = $this->db->get_where('countries', array('country_id' => $id,'country_status' => 1));
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