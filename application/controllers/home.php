<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  session_start(); //we need to call PHP's session object to access it through CI
    class Home extends CI_Controller {

      function __construct() {
        parent::__construct();
      }

    function index() {
      if($this->session->userdata('logged_in')) {
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $this->load->view('home_view', $data);
      } else {
        // If no session, redirect to login page
        redirect('login', 'refresh');
	    }
    }

    /* function New_user() {
      if($this->session->userdata('logged_in')) {

      } else {
        // If no session, redirect to login page.
      }
    } */
  
    function logout() {
      $this->session->unset_userdata('logged_in');
      session_destroy();
      redirect('home', 'refresh');
    }
  }

?>