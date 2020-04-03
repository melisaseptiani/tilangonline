<?php 
   class Comment extends CI_Controller {
	
      public function index() { 
         //Load session library 
         $this->load->library('session');
			
         //redirect to home page 
         $this->load->view('form'); 
      } 
  
      public function add() { 
         //Load session library 
         $this->load->library('session'); 
         $this->load->helper('url'); 
   
         //add flash data
         $nama=$this->input->post('chika');
         $this->session->set_flashdata('data', $nama); 
   
         //redirect to
         redirect('comment/hasil'); 
      } 
      public function hasil(){
         $this->load->view('comment');
      }
   } 
?>