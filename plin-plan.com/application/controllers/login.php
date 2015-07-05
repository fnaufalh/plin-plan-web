<?php 
    class login extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_user_plinplan');
        }
        public function index(){
            if($this->session->userdata('isLogin')){
                redirect('profile');
            }
            $post['email'] = $this->input->post('email');
            $query_a = $this->M_user_plinplan->getData(array('email' => $post['email']));
            echo json_encode($query_a);
        }
        function validate(){
            if($this->input->post('login')){
                $post['email'] = $this->input->post('email');
                $post['password'] = $this->input->post('passwd');//do_hash($this->input->post('passwd'), 'md5');
                
                $query = $this->M_user_plinplan->getData(array('email' => $post['email'], 'password' => $post['password']));
                if($query != NULL){
                    foreach ($query AS $row){
                        $data_session = array(
                                'id'			=> $row['id'],
                                'name'  		=> $row['nama_depan'],
                                'level_user'	=> $row['level_user_id'],
                        );
                    }
                    $this->session->set_userdata('isLogin', $data_session);
                    redirect('profile', 'refresh');
                }else{
                    redirect('home', 'refresh');
                }
            }
        }
        function logout(){
            $this->session->unset_userdata('isLogin');
            redirect('home');
        }
    }
?>
