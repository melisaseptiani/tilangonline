<?php 

class login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		$this->load->library('form_validation');

	}

	function index(){
		$dataa['judul'] = 'LOGIN';
		$this->load->view('admin/v_login',$dataa);
		
	}

	function aksi_login(){

	$this->form_validation->set_rules('username','Username','required|min_length[2]');
    $this->form_validation->set_rules('password','Password','required');

    if ($this->form_validation->run() == FALSE) {
      $this->index();
    }else {
      $username = $this->input->post('username',true);
      $password = $this->input->post('password',true);
      $data = array(
              'username' => $username,
              'password' => password_verify($password)
          );

      $cek	= $this->m_login->cek_login($data);
      if ($cek->num_rows() > 0) {

        $this->session->set_userdata($cek->row_array());
        $this->session->set_flashdata('flash',$this->session->username);
        redirect(base_url("home"));

      }else {
        $this->session->set_flashdata('status','Username atau Password tidak ditemukan');
        redirect(base_url('login'));
      }
    }
}
		
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
