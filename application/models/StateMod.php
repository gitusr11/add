<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StateMod extends CI_Model{
    
    public function saveState($data){
        if($data){
            $response = $this->db->insert('states', $data); 
            if($response){
                return true;
            }else{
                return false;
            }
        }
    }

    public function updateState($data){
        if($data){
            $this->db->where('state_id', $data['state_id']);
            $response = $this->db->update('states', $data); 
            if($response){
                return true;
            }else{
                return false;
            }
        }
    }

    public function removeState($id){
        if($id){
            $this->db->where('state_id', $id);
             $data = array('state_status'=>0);
            $response = $this->db->update('states', $data); 
            if($response){
                return true;
            }else{
                return false;
            }
        }
    }

    public function getAllState(){

        $query = $this->db->get_where('states', array('state_status' => 1));
        $result=$query->result();
        if($result){
            return $result;
        }else{
            return false;
        }
        
    }


    public function getStateOption(){
        $results = array();
        $this->db->select("state_id,state_name"); 
        $query = $this->db->get_where('states', array('state_status' => 1));
        $result=$query->result_array();
        return $result;
       
        // if($result){
        //     foreach ($result as $key => $value) {
        //         $results[$value->state_id] = $value->state_name;
        //     }
        //     return $results;
        // }else{
        //     return false;
        // }
    }

    public function getStateById($id){

        $query = $this->db->get_where('states', array('state_id' => $id,'state_status' => 1));
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