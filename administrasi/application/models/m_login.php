<?php 

class M_login extends CI_Model{	
	function cek_login($data){		
		
	$this->db->where('username',$data['username']);
    $this->db->where('password',$data['password']);
    $query  = $this->db->get('admin');
    return $query;
	}	
}