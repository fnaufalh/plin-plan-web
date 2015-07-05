<?php 
    class home extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_user_plinplan');
        }
        public function index(){
            $this->load->view('header');
//            $post['email'] = $this->input->post('email');
//            $query_a = $this->M_user_plinplan->getData(array('email' => $post['email']));
//            echo json_encode($query_a);
            $this->load->view('index');
            $this->load->view('footer');
        }
    }
?>