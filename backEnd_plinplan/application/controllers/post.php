<?php 
    class post extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('m_post');
            if(empty($this->session->userdata('isLogin'))){
                redirect(base_url());
            }
        }
        public function index(){
            $this->load->view('header');
            $this->load->view('post');
        }
    }
?>