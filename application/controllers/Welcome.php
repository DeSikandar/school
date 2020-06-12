<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home');
		$this->load->model('User');
		$this->load->helper('text');
		// $this->User->check_session(1);
        // $this->User->check_session();
	}


	public function index()
	{
		$data['slide']=$this->Home->get_slider();
		$data['category']=$this->Home->get_category();
		$data['course_s']=$this->Home->get_pop_course();
		$data['testmoni']=$this->User->get_testmoni();


		$this->load->view('lyout/header',$data);
		$this->load->view('index',$data);
		$this->load->view('lyout/footer',$data);
	}
	public function about_us(){

		$this->load->view('lyout/header');
		$this->load->view('about_us');
		$this->load->view('lyout/footer');

	}

	public function gallery(){
		$data['gallery']=$this->Home->get_gallery();
		$this->load->view('lyout/header',$data);
		$this->load->view('gallery',$data);
		$this->load->view('lyout/footer',$data);

	}

	public function Blog($name=""){
		if($name!==""){

		$data['blog']=$this->Home->get_blogs(urldecode($name));
		$this->load->view('lyout/header',$data);
		$this->load->view('blogs',$data);
		$this->load->view('lyout/footer',$data);
		}else{
		$data['blog']=$this->Home->get_blog();
		$this->load->view('lyout/header',$data);
		$this->load->view('blog',$data);
		$this->load->view('lyout/footer',$data);
		}

	}

	public function search(){
		$value=$this->input->get("s");
		$data['search']=$this->Home->search($value);
		$data['category']=$this->Home->get_category();
		$data['course']=$this->Home->get_all();

		$this->load->view('lyout/header',$data);
		$this->load->view('search',$data);
		$this->load->view('lyout/footer',$data);


	}

	public function chanel_singup(){
		$data=array();
		$this->load->view('lyout/header',$data);
		$this->load->view('register_chanell',$data);
		$this->load->view('lyout/footer',$data);
		// echo "channel parter";
	}
	public function chanel_dataup(){
		// `name`, `account_type`, `account_number`, `ifs`, `bank_nmae`, `branch`, `m_number`, `email`, `wnumber`, `password`
		$data=array(
			"name"=>$this->input->post("name"),
			"account_type"=>$this->input->post("banktype"),
			"account_number"=>$this->input->post("accountnumber"),
			"ifs"=>$this->input->post("ifs"),
			"bank_nmae"=>$this->input->post("bankname"),
			"branch"=>$this->input->post("branch"),
			"m_number"=>$this->input->post("mobile"),
			"email"=>$this->input->post("email"),
			"wnumber"=>$this->input->post("wnumber"),
			"password"=>sha1($this->input->post("passowrd"))


		);
		$s=$this->Home->data_insert("chanell",$data);
		$data2=array(
			"username"=>$this->input->post("email"),
			"password"=>sha1($this->input->post("passowrd")),
			"user_type"=>"channel"
		);
		$s1=$this->Home->insert_login($data2);
		if($s && $s1){
			redirect("sign_in");
		}


	}
	public function student_singup(){
		$data['contry']=$this->Home->get_country();
		$this->load->view('lyout/header',$data);
		$this->load->view('register_student',$data);
		$this->load->view('lyout/footer',$data);
	}
	public function student_postup(){
		// `name`, `dob`, `country`, `state`, `city`, `Address`, `Zip`, `mobile_number`, `email`, `wnumber`, `password`

		$data=array(
			"name"=>$this->input->post("name"),
			"dob"=>$this->input->post("dob"),
			"country"=>$this->input->post("country"),
			"state"=>$this->input->post("state"),
			"city"=>$this->input->post("city"),
			"Address"=>$this->input->post("address"),
			"Zip"=>$this->input->post("zip"),

			"mobile_number"=>$this->input->post("mobile"),
			"email"=>$this->input->post("email"),
			"wnumber"=>$this->input->post("wnumber"),
			"password"=>sha1($this->input->post("password"))

		);
		$data2=array(
			"username"=>$this->input->post("email"),
			"password"=>sha1($this->input->post("passowrd")),
			"user_type"=>"student"
		);
		$s1=$this->Home->insert_login($data2);

		$s=$this->Home->insert_student($data);
		if($s && $s1){
			redirect("sign_in");
		}

	}
	public function sign_in(){
		$data=array();
		$this->load->view('lyout/header',$data);
		$this->load->view('login',$data);
		$this->load->view('lyout/footer',$data);
	}

	public function sing_inpost(){
		$data = [];
		if (isset($_POST['submit'])) {
            unset($_POST['submit']);

            $login = $this->Home->userlogin($_POST);
            if ($login) {
                //session
                redirect('dashboard/');
            } else {
                $data['msg'] = 'Invalid login.';
            }
        }
		$this->load->view('sign_in', $data, FALSE);


	}

	public function get_state(){
		$county=$this->input->post("county");
		$data=$this->Home->get_sate($county);
		echo Json_encode($data);
		// print_r($county);
	}
	public function get_city(){
		$state=$this->input->post("state");
		$data=$this->Home->get_city($state);
		echo Json_encode($data);
	}





}
