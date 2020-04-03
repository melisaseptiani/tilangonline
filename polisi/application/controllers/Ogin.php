<?php
/**
 *
 */
class Ogin extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('M_login');
        $this->load->library('form_validation');
	}


	function index(){
        $this->load->view('indek');

    }
    function aksi_login(){
        $username=$this->input->post('email');
        $password=$this->input->post('password');
        $where=array(
            'emailpolisi' => $username,
            'password' => $password);
        $cek=$this->M_login->view_where("polisi",$where)->num_rows();
        $datapolisi=$this->M_login->view_where("polisi",$where)->result_array();
        if($cek > 0){

            $data_session = array(
                'nama' => $datapolisi[0]['namapolisi'],
                'status' => "login");

            $this->session->set_userdata($data_session);
            print_r($data_session);
            redirect(base_url("Dashboard"));

        }else{
            $this->session->set_flashdata('error',"Username atau Password salah");
            redirect(base_url());

        }
        // $this->form_validation->set_rules('username','Username','required');
        // $this->form_validation->set_rules('password','Password','required');

        // if($this->form_validation->run() != false){
        //     echo "Form validation oke";
        // }else{
        //     $this->load->view('indek');
        // }


        }
        function logout(){
            $this->session->sess_destroy();
            redirect(base_url('Ogin'));
        }
    }



 ?>
