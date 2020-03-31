<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	public function index()
	{
		
		$dataa['judul'] = 'TILON';
		$this->load->view('templates/header', $dataa);
		$this->load->view('admin/home');
		$this->load->view('templates/footer');
	}
	public function pelanggaran()
	{
		$data['judul'] = 'Data Pelanggaran';
		$this->load->view('templates/header',$data);
		$this->load->view('admin/Pelanggaran');
		$this->load->view('templates/footer');
	}
	public function polisi()
	{
		$data['judul'] ='Data Polisi';
		$data['polisi'] = $this->m_data->tampil_data()->result();		
		$this->load->view('templates/header',$data);
		$this->load->view('admin/polisi',$data);
		$this->load->view('templates/footer');
	}
	public function admin()
	{
		$data['judul'] ='Data Admin';
		$data['admin'] = $this->m_data->tampil_admin()->result();		
		$this->load->view('templates/header',$data);
		$this->load->view('admin/admin',$data);
		$this->load->view('templates/footer');
	}

	public function daftarpolisi()
	{
		$data['judul'] = 'Pendaftaran Polisi';
		$this->load->view('templates/header',$data);
		$this->load->view('admin/daftarpolisi');		
		$this->load->view('templates/footer');
	}
	public function daftaradmin()
	{
		$data['judul'] = 'Pendaftaran Admin';
		$this->load->view('templates/header',$data);
		$this->load->view('admin/daftaradmin',$data);
		$this->load->view('templates/footer');
	}
}

?>
