<?php 
    class profile extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('M_user_plinplan');
        }
        public function index(){
            $this->load->view('header');
            $this->edit();
            $this->load->view('footer');
        }
        public function edit(){
            $query = $this->M_user_plinplan->getData(array('id' => $this->session->userdata['isLogin']['id']));
//            echo $this->db->last_query(); die();
            $data['edit'] = array();
            foreach ($query AS $row){
                $data['edit']['nama_depan'] = $row['nama_depan'];
                $data['edit']['nama_belakang'] = $row['nama_belakang'];
                $data['edit']['email'] = $row['email'];
                $data['edit']['noTelp'] = $row['noTelp'];
                $data['edit']['tgl_lahir'] = $row['tgl_lahir'];
                $data['edit']['biodata'] = $row['biodata'];
            }
//            print_r($data);
            $this->load->view('edit-profile',$data);
            
            if($this->input->post('submit')){
                $update = array(
                    'id' => $this->session->userdata['isLogin']['id'],
                    'nama_depan' => $this->input->post('nama_depan'),
                    'nama_belakang' => $this->input->post('nama_belakang'),
                    'email' => $this->input->post('email'),
                    'foto' => $this->input->post('foto'),
                    'noTelp' => $this->input->post('noTelp'),
                    'tgl_lahir' => $this->input->post('tgl_lahir'),
                    'biodata' => $this->input->post('biodata')
                );
                $this->M_user_plinplan->update($update);
                redirect('profile');
            }
        }
        public function gantiPassword(){
            $query = $this->M_user_plinplan->getData(array('id' => $this->session->userdata['isLogin']['id']));
//            echo $this->db->last_query(); die();
            $data['edit'] = array();
            foreach ($query AS $row){
                $data['edit']['password'] = $row['password'];
            }
            $this->load->view('header');
            $this->load->view('ganti-password',$data);
            $this->load->view('footer');
            
            if($this->input->post('submit')){
                $update = array(
                    'id' => $this->session->userdata['isLogin']['id'],
                    'password'  =>  $this->input->post('new-pass')
                );
                $this->M_user_plinplan->updatePassword($update);
                redirect('profile');
            }
            
        }
        public function gantiFoto(){
            $this->load->view('header');
            $this->load->view('ganti-foto');
            $this->load->view('footer');
        }
    }
?>