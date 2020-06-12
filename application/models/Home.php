<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Model {
    function get_slider(){
        $dat=$this->db->get("slider")->result_array();
        return $dat;
    }

    function get_category(){
        $data=$this->db->get("category")->result_array();
        return $data;
    }

    function get_course($catgory){
        $quer="select * from course LEFT JOIN category_course on course.id=category_course.course_id LEFT JOIN category on category_course.category_id=category.id WHERE category.slug=?";
        $data=$this->db->query($quer,array($catgory))->result_array();
        return $data;
    }
    function get_all(){
        $quer="select * from course LEFT JOIN category_course on course.id=category_course.course_id LEFT JOIN category on category_course.category_id=category.id ";
        $data=$this->db->query($quer)->result_array();
        return $data;
    }


    function get_courseby_name($name){
        $quer="SELECT * FROM `course` WHERE seo_url=?";
        $data=$this->db->query($quer,array($name))->result_array();
        return $data[0];
    }

    function get_faq_from_course($id){
        $quer="SELECT * FROM `faq` WHERE course_id=?";
        $data=$this->db->query($quer,array($id))->result_array();
        return $data;
    }

    function get_simlary($cur){
        $quer="SELECT category_course.category_id FROM `course` LEFT JOIN category_course on course.id=category_course.course_id where seo_url=?";
        $data=$this->db->query($quer,array($cur))->result_array();
        return $data[0];
    }

    function get_category_course($id){
        $quer="SELECT * FROM course LEFT JOIN category_course on course.id=category_course.course_id WHERE category_course.category_id=?";
        $data=$this->db->query($quer,array($id))->result_array();
        return $data;
    }
    function get_pop_course(){
        $quer="SELECT * FROM course Where popular='on'";
        $data=$this->db->query($quer)->result_array();
        return $data;
    }

    function get_gallery(){
        $data=$this->db->get("gallery")->result_array();
        return $data;
    }
    function insert_blog($data){
        $this->db->insert("blog",$data);
        return 1;
    }
    function get_blog(){
        $data=$this->db->get("blog")->result_array();
        return $data;
    }

    function get_blogs($name){
        $quer="SELECT * FROM blog WHERE slug_url=?";
        $data=$this->db->query($quer,array($name))->result_array()[0];
        return $data;


    }
    function get_country(){
      $data=$this->db->get("countries")->result_array();
      return $data;
    }
    function get_sate($id){

    $quer="select * from states where country_id=?";
    $data=$this->db->query($quer,array($id))->result_array();
    return $data;
    }
    function get_city($id){

    $quer="select * from cities where state_id=?";
    $data=$this->db->query($quer,array($id))->result_array();
    return $data;
    }

    function insert_student($data){
      $this->db->insert("student",$data);
      return 1;
    }
    function insert_login($data){
      $this->db->insert("user",$data);
      return 1;
    }
    function data_insert($table,$data){
      $this->db->insert($table,$data);
      return 1;
    }

    function search($sear){
        $this->db->select('*');
        $this->db->from('course');
        $this->db->like('course_name', $sear);
        $query = $this->db->get()->result_array();
        return $query;
    }


    function userlogin($post = array()) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['email']);
        $this->db->where('password', sha1($post['password']));

        $this->db->limit(1);
        $query = $this->db->get();

        //echo $this->db->last_query(); die;

        if ($query->num_rows() == 1) {
            $userdata = $query->row_array();
            $this->session->set_userdata(array(
                'type' => $userdata['user_type'],
                'name'=>$userdata['username'],
                'user' => true
            ));

            return true;
        } else {
            return false;
        }
    }


    function usercheck_session($is_index = '') {
        if (!$this->session->userdata("user") && !$is_index) {
            redirect(base_url("sign_in"));
        } else if ($this->session->userdata("user") && $is_index) {
            redirect(base_url('dashboard/'));
        }
    }
}

?>
