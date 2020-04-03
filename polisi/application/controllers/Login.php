<?php 

/**
 * 
 */
class Login extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->library('form_validation');
        # code...
    }
    function index(){
        $this->load->view('admin/v_login');

    }
    function aksi_login(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $where=array(
            'username' => $username,
            'password' => md5($password));
        $cek=$this->m_login->cek_login("admin",$where)->num_rows();
        if($cek > 0){

            $data_session = array(
                'nama' => $username,
                'status' => "login");

            $this->session->set_userdata($data_session);

            redirect(base_url("home"));

        }else{
            echo "Username dan Password salah";
        }
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run() != false){
            echo "Form validation oke";
        }else{
            $this->load->view('admin/v_login');
        }


        }
        function logout(){
            $this->session->session_destroy();
            redirect(base_url('login'));
        }
    }

 ?>