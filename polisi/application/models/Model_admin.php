<?php  

class Model_admin extends CI_Model{
    public function tampil_data(){
        return $this->db->get('pelanggaran');
    }
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
}