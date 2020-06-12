<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {


    function login($post = array()) {
        $this->db->select('id');
        $this->db->from('admin');
        $this->db->where('email', $post['email']);
        $this->db->where('password', sha1($post['password']));
        $this->db->where('status', 1);
        $this->db->limit(1);
        $query = $this->db->get();

        //echo $this->db->last_query(); die;

        if ($query->num_rows() == 1) {
            $userdata = $query->row_array();
            $this->session->set_userdata(array(
                'id' => $userdata['id'],                
                'loged_in' => true
            ));

            return true;
        } else {
            return false;
        }
    }

   
    function check_session($is_index = '') {
        if (!$this->session->userdata("loged_in") && !$is_index) {
            redirect(base_url("admin/login"));
        } else if ($this->session->userdata("loged_in") && $is_index) {
            redirect(base_url('admin'));
        }
    }

    function slider_upload($path=""){
        $data=array(
            "url"=>$path
        );
        $this->db->insert("slider",$data);
        // $this->db->select("url");
        // $this->db->from('slider');
        // $dat=$this->db->get();
        // return $dat;
        return 1;

    }

    function insert_gallery($data){
        $this->db->insert("gallery",$data);
        return 1;
    }


    function get_slider(){
        $dat=$this->db->get("slider")->result_array();
        return $dat;
    }
    
    function insert_testmoni($data){
        $this->db->insert("testimonials",$data);
        return 1;
    }

    function get_testmoni(){
        $data=$this->db->get("testimonials")->result_array();
        return $data;
    }
    
    function get_gallery(){
        $dat=$this->db->get("gallery")->result_array();
        return $dat;
    }

    function insert_category($data){

        $this->db->insert("category",$data);
        return 1;
    }
    function get_category(){
        $data=$this->db->get("category")->result_array();
        return $data;
    }

    function insert_course($data){
        $this->db->insert("course",$data);
        $id=$this->db->insert_id();
        return $id;
    }

    function get_course(){
        $data=$this->db->get("course")->result_array();
        return $data;
    }

    function insert_join_cat($data){
        $this->db->insert("category_course",$data);
        return 1;
    }

    function faq($data){
        $this->db->insert("faq",$data);
        return 1;
    }


}



?>