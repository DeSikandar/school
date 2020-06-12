<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Home');
    $this->load->model('User');
    $this->load->helper('text');
    $this->Home->usercheck_session();
    // $session = session();
        // $this->User->check_session();
  }

  public function index(){
    echo "hello user";
    // print_r($_SESSION);
    $name = $this->session->userdata('type');
    if($name=="student"){
      redirect("dashboard/student");
    }

  }

  public function student(){
    echo "student";
  }

  public function usre_logout(){
    	$this->session->sess_destroy();
      redirect("sign_in");
  }
}

?>
