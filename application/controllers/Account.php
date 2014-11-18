<?php defined('BASEPATH') OR exit('No direct script access allowed');
	session_start();
	class Account extends CI_Controller {
		public function __construct() {
        parent::__construct();  
        $this->load->model('User');  
      }

      public function Register() {
      	$Data['Title']   = "Register"; 
      	$Data['Session'] = $this->session->userdata('logged_in');

      	$this->load->view('components/header', $Data);
      	$this->load->view('components/navbar', $Data);
      	$this->load->view('Register'); 
      	$this->load->view('components/footer');
      }

      public function insertDB() {
      	$this->User->Insert();
      	redirect('/');
      }

      public function logout() {
      	$this->session->unset_userdata('logged_in');
      	session_destroy();
      	redirect($_SERVER['HTTP_REFERER'], 'refresh');
    	}
	}