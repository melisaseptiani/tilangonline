<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('polisi');
	}
	public function view()
	{
		$this->db->select('*');
		$this->db->from('mapping');
		$this->db->order_by('no_lokasi','ASC');
		$query = $this->db->get();
		return $query;
	}
	public function view_where($table,$where)
	{
		return $this->db->get_where($table,$where);
	}
	public function insert($data,$table)
	{
		$this->db->insert($table,$data);
	}
	public function update($data,$where,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function delete($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}