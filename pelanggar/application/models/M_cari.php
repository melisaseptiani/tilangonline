<?php

class M_cari extends CI_Model{
	public function view($table)
	{
		$query = $this->db->get($table);
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
	public function search_pelanggaran($kode)
	{
		$this->db->select("*");
		$this->db->from("pelanggaran");
		$this->db->like('idpelanggaran', $kode);
		return $this->db->get();
	}
}
