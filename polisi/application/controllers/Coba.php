<?php 
class Coba extends CI_Controller {
	public function index()
	{
		$this->load->model('M_login');
		$data['masuk'] = $this->M_login->get_data();
		$this->load->view('masuk');
	}
	}

 ?>
