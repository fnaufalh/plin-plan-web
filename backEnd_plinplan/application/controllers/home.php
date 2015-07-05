<?php 
    class home extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('m_home');
            if(empty($this->session->userdata('isLogin'))){
                redirect(base_url());
            }
        }
        public function index(){
            $result['idUser'] = $this->m_home->countUser();
            $result['idPost'] = $this->m_home->countPost();
            $result['idPesan'] = $this->m_home->countPesan();
            $result['idReport'] = $this->m_home->countReport();
//            print_r($result['id']);
            $this->load->view('header');
            $this->load->view('home',$result);
        }
    }
?>