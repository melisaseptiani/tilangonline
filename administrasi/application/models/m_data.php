<?php
class M_data extends CI_Model
{

	function tampil_data(){
		return $this->db->get('polisi');
	}
	function tampil_admin(){
		return $this->db->get('admin');
 	}
 	function tampil_pelanggaran(){
		return $this->db->get('pelanggaran');
 	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function input_admin($data,$table){
		$this->db->insert($table,$data);
	}	
	function editadmin($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function updateadmin($where,$table,$data){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}

?>