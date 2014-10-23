<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 	class Home extends CI_Controller {
    
    function __construct() {
      parent::__construct();
      $this->load->model('db_setup','Setup');
    }

    public function index() {
    	$this->Setup->CreateDB(); 
    	$this->Setup->CreateTB(); 

    	$this->load->view('Notice_DB');
    }
  }
?>
