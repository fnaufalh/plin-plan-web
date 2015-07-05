<?php 
    class user extends CI_Controller{
        public function __construct(){
            parent::__construct;
            $this->load->model('m_user');
            if(empty($this->session->userdata('isLogin'))){
                redirect(base_url());
            }
        }
        public function index(){
            
        }
    }
?>