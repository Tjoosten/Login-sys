<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Welcome extends CI_Controller {
		public function __construct() {
            parent::__construct();
            $this->load->model('user');
       	}

		public function index() {
			$Data['Title'] = "Login system for codeigniter V3-dev";
			$Data['Session'] = $this->session->userdata('logged_in');

			if($Data['Session']) {
				$Data['Username'] = $Data['Session']['username'];
			}

			$this->load->view('components/header', $Data);
			$this->load->view('components/navbar', $Data);
			$this->load->view('Front_page');
			$this->load->view('components/footer');
		}
	}