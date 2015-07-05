<?php 
    class login extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('m_users');
        }
        public function index(){
            if($this->session->userdata('isLogin')){
                redirect('home');
            }else{
                $this->load->view('login');
            }
        }
        function validate(){
            //print_r($_POST);
            if($this->input->post('login')){
                $post['username'] = $this->input->post('username');
                $post['password'] = $this->input->post('passwd');//do_hash($this->input->post('passwd'), 'md5');

                $query = $this->m_users->list_users('*', array('username' => $post['username'], 'password' => $post['password']));
                if($query != NULL){
                    foreach ($query AS $row){
                        $data_session = array(
                                'id'			=> $row['id'],
                                'username'		=> $row['nama_depan'],
                                'level_user'	=> $row['level_user_id'],
                        );
                    }
                    $this->session->set_userdata('isLogin', $data_session);
                    redirect('home', 'refresh');
                }else{
                    redirect('login', 'refresh');
                }
            }else{
                redirect('login');
            }
        }
        function logout(){
            $this->session->unset_userdata('isLogin');
            redirect('login');
        }
    }
?>