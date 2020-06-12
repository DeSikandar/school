<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
		$this->load->model('Home');
		$this->User->check_session();
		$this->load->helper('text');
	}

	public function index()
	{
		$this->load->view('admin/layout/header');
        $this->load->view('admin/layout/sidebar');
        $this->load->view('admin/index');
		$this->load->view('admin/layout/footer');
	}

	public function slider()
	{
		$data['slide']=$this->User->get_slider();
		// print_r($data);
		$this->load->view('admin/layout/header',$data);
        $this->load->view('admin/layout/sidebar',$data);
        $this->load->view('admin/slider',$data,FALSE);
		$this->load->view('admin/layout/footer',$data);
		# code...
	}

	public function upload(){
		$config['upload_path']   = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->upload->initialize($config);
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('slider')) {
		   $error = array('error' => $this->upload->display_errors());
		   print_r($error);
		//    $this->load->view('upload_form', $error);
		}

		else {
		   $data = array('upload_data' => $this->upload->data());
			$name=$data['upload_data']['file_name'];
			$ur=base_url()."uploads/";
			$path=$ur.$name;


			$da=$this->User->slider_upload($path);
			if($da){
				redirect('admin/slider');
			}
		   //    $this->load->view('upload_success', $data);
		}
	}

	public function category(){
		$data['category']=$this->User->get_category();
		$data['course']=$this->User->get_course();
		// print_r($data);
		$this->load->view('admin/layout/header',$data);
        $this->load->view('admin/layout/sidebar',$data);
        $this->load->view('admin/category',$data,FALSE);
		$this->load->view('admin/layout/footer',$data);
	}

	public function add_category(){
		#add category
		$seo=$this->input->post("seo_url");
		$cname=$this->input->post("cname");
		$category_detail=$this->input->post("cdetail");

		$config['upload_path']   = './uploads/category';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite'] = FALSE;
		$config['remove_spaces'] = TRUE;

		$this->upload->initialize($config);
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('cimage')) {
		   $error = array('error' => $this->upload->display_errors());
		   print_r($error);
		//    $this->load->view('upload_form', $error);
		}

		else {
		   $data = array('upload_data' => $this->upload->data());
			$name=$data['upload_data']['file_name'];
			$ur=base_url()."uploads/category/";
			$path=$ur.$name;

			$data=array(
				"slug"=>$seo,
				"category_name"=>$cname,
				"category_detail"=>$category_detail,
				"category_image"=>$path
			);
			$d=$this->User->insert_category($data);
			if($d){
				redirect("admin/category");
			}

		}






	}
	public function join(){

		#join cours to category
		$cat_id=$this->input->post('cat_id');
		$coru_id=$this->input->post('course_id');
		$data=array(
			"course_id"=>$coru_id,
			"category_id"=>$cat_id
		);

		$ds=$this->User->insert_join_cat($data);
		if($ds){
			redirect("admin/category");
		}


	}

	public function testimonials(){
		// $data['category']=$this->User->get_category();
		$data['testmoni']=$this->User->get_testmoni();
		// print_r($data);
		$this->load->view('admin/layout/header',$data);
        $this->load->view('admin/layout/sidebar',$data);
        $this->load->view('admin/testimonials',$data,FALSE);
		$this->load->view('admin/layout/footer',$data);
		
	}
	public function testimonials_add(){
		$data=array(
			"descriptions"=>$this->input->post('description'),
			"name"=>$this->input->post("cname"),
			"position"=>$this->input->post("comp")
		
		);

		$s=$this->User->insert_testmoni($data);
		if($s){
			redirect("admin/testimonials");
		}

	}

	public function blog(){
		$data['blog']=$this->Home->get_blog();
		// print_r($data);
		$this->load->view('admin/layout/header',$data);
        $this->load->view('admin/layout/sidebar',$data);
        $this->load->view('admin/blog',$data,FALSE);
		$this->load->view('admin/layout/footer',$data);


	}
	public function blog_add(){
		$data=array(
			"slug_url"=>$this->input->post('slug_url'),
			"title"=>$this->input->post('title'),
			"descriptions"=>$this->input->post('descriptions'),
		);
		$s=$this->Home->insert_blog($data);
		if($s){
			redirect("admin/blog");
		}

	}

	public function gallery(){

		$data['slide']=$this->User->get_gallery();

		
		$this->load->view('admin/layout/header',$data);
        $this->load->view('admin/layout/sidebar',$data);
        $this->load->view('admin/gallery',$data,FALSE);
		$this->load->view('admin/layout/footer',$data);

	}

	public function g_upload(){

		$config['upload_path']   = './uploads/gallery';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->upload->initialize($config);
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('slider')) {
		   $error = array('error' => $this->upload->display_errors());
		   print_r($error);
		//    $this->load->view('upload_form', $error);
		}

		else {
		   $data = array('upload_data' => $this->upload->data());
			$name=$data['upload_data']['file_name'];
			$ur=base_url()."uploads/gallery/";
			$path=$ur.$name;
			$data=array(
				"url"=>$path
			);


			$fd=$this->User->insert_gallery($data);

			if($fd){
				redirect('admin/gallery');
			}
		   //    $this->load->view('upload_success', $data);
		}

	}

	public function course(){

		#course
		$data['course']=$this->User->get_course();
		$data['category']=$this->User->get_category();
		// print_r($data);
		$this->load->view('admin/layout/header',$data);
        $this->load->view('admin/layout/sidebar',$data);
        $this->load->view('admin/course',$data,FALSE);
		$this->load->view('admin/layout/footer',$data);


	}

	public function c_add(){
		$seo=$this->input->post("seo_url");
		$course=$this->input->post("cname");
		$cover=$this->input->post("cshort");
		$cdetail=$this->input->post("cfull");
		$category=$this->input->post("category");
		$lang=$this->input->post("lang");
		$price=$this->input->post("price");
		$duration=$this->input->post("duration");
		$target = $this->input->post('q');
		$se=$this->input->post('a');
		$po=$this->input->post('po');
		// print_r($target);
		// print_r($se);



		$config['upload_path']   = './uploads/course/';
		$config['allowed_types'] = 'mp4|avi|mkv';

		$config['overwrite'] = FALSE;
		$config['remove_spaces'] = TRUE;
		$video_name = random_string('numeric', 5);
		$config['file_name'] = $video_name;

		$this->upload->initialize($config);
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('cvideo')) {
		   $error = array('error' => $this->upload->display_errors());
		   print_r($error);

		}

		else {
		   $data = array('upload_data' => $this->upload->data());
			$name=$data['upload_data']['file_name'];
			$ur=base_url()."uploads/course/";
			$path=$ur.$name;

			$data=array(
				"seo_url"=>$seo,
				"course_name"=>$course,
				"course_overview"=>$cover,
				"course_detail"=>$cdetail,
				"short_video"=>$path,
				"language"=>$lang,
				"price"=>$price,
				"duration"=>$duration,
				"popular"=>$po
				
			);

			$id=$this->User->insert_course($data);
			$data2=array(
				"course_id"=>$id,
				"category_id"=>$category
			);

		foreach (array_combine($target, $se) as $fq => $fa)
		{
			echo $fq."<br>";
			echo $fa."<br>";

			$da=array(
			"fq"=>$fq,
			"fa"=>$fa,
			"course_id"=>$id
				);
			$s=$this->User->faq($da);


			}


			$ds=$this->User->insert_join_cat($data2);


			if($ds){
				redirect("admin/course");
			}
		}






	}





}
