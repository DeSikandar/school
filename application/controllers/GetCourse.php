<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetCourse extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home');
		$this->load->helper('text');
        // $this->User->check_session();
	}


	public function index($name="")
	{

		

		$data['slide']=$this->Home->get_slider();
		$data['category']=$this->Home->get_category();
		$data['course']=$this->Home->get_course($name);
		

		$this->load->view('lyout/header',$data);
		$this->load->view('course_view',$data);
		$this->load->view('lyout/footer',$data);

		
	}

	public function get_all_course(){
		$data['category']=$this->Home->get_category();
		$data['course']=$this->Home->get_all();

		$this->load->view('lyout/header',$data);
		$this->load->view('course_view',$data);
		$this->load->view('lyout/footer',$data);

	}

	public function coursename($cours=""){
		
		
		// $data['slide']=$this->Home->get_slider();
		// $data['']=$this->Home->get_category();
		$cours=urldecode($cours);
		$data['course']=$this->Home->get_courseby_name($cours);

		$cours_id=$data['course']['id'];
		$data['faq']=$this->Home->get_faq_from_course($cours_id);
		$getc=$this->Home->get_simlary($cours);
		$cat_id=$getc['category_id'];
		$data['sim']=$this->Home->get_category_course($cat_id);
		

		$this->load->view('lyout/header',$data);
		$this->load->view('course_details',$data);
		$this->load->view('lyout/footer',$data);

		
	}

	

}
