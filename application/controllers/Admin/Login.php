<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
        $this->User->check_session(1);
    }
    

    // public function login_view(){
	// 	$this->load->view('admin/login');
		
	// }
	
	public function login(){
	
		
		$data = [];
		if (isset($_POST['submit'])) {
            unset($_POST['submit']);
           
            $login = $this->User->login($_POST);
            if ($login) {
                //session                  
                redirect('admin');
            } else {
                $data['msg'] = 'Invalid login.';
            }
        }
		$this->load->view('admin/login', $data, FALSE);
	}

}