<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Model_admin');
	}
	public function index(){
		$query = $this->Model_admin->tampil_data()->result();
		$data['pelanggar'] = $query;
		$this->load->view('layouts/header');
		$this->load->view('view_admin',$data);

	}
}
?>