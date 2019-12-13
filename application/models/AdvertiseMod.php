<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdvertiseMod extends CI_Model{

    public function getAllAdvertise(){

        $query = $this->db->get_where('advertises');
        $result=$query->result();
        if($result){
            return $result;
        }else{
            return false;
        }
        
    }

    public function saveAdvertise($data){
        if($data){
            $response = $this->db->insert('advertises', $data); 
            if($response){
                return true;
            }else{
                return false;
            }
        }
    }

    
}
?>