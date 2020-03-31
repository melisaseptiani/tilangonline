<?php 


class Tambah extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function tampil(){
		$data['polisi'] = $this->m_data->tampil_data()->result();
		$this->load->view('admin/polisi',$data);
	}

	function tambah(){
		$this->load->view('admin/daftarpolisi');
	}

	function tambah_aksi(){
		$idpolisi = $this->input->post('idpolisi');
		$namapolisi = $this->input->post('namapolisi');
		$ttl = $this->input->post('ttl');
		$nohp = $this->input->post('nohp');
		$emailpolisi = $this->input->post('emailpolisi');
		$alamat = $this->input->post('alamat');
		$password = $this->input->post('password');

		$data = array(
			'idpolisi' => $idpolisi,
			'namapolisi' => $namapolisi,
			'ttl' => $ttl,
			'nohp' => $nohp,
			'emailpolisi' => $emailpolisi,
			'alamat' => $alamat,
			'password' => $password
			);
		$this->m_data->input_data($data,'polisi');
		redirect('tambah/tampil');
	}
	function edit($idpolisi){
	$where = array('idpolisi' => $idpolisi);
	$data['polisi '] = $this->m_data->edit_data($where,'polisi')->result();
	$this->load->view('v_edit',$data);
}
function hapus($idpolisi){
		$where = array('idpolisi' => $idpolisi);
		$this->m_data->hapus_data($where,'polisi');
		redirect('tambah/tampil');
	}


}