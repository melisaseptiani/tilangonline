<?php
    class User_model extends CI_Model{ 

// Login User

       public function login($username, $password){
           // where untuk validasi kecocokan username & password
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $result = $this->db->get('user');
        //if else jika rows ada = 1 return result jika tidak ada false 
        if($result->num_rows() == 1){
            return $result->row(0)->id;
            } else {
               return false;
            }

        }