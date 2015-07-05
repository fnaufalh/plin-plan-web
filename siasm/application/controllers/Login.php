<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_users');
	}
	
	public function index(){
		if($this->session->userdata('logged_in')){
			redirect('users');
		}else{
			$this->load->view('login');
		}
	}
	
	function validate(){
		if($this->input->post('login')){
			$form['username'] = $this->input->post('_usnm');
			$form['password'] = do_hash($this->input->post('_pw'), 'md5');
			
			$query = $this->m_users->list_users('*', array('username' => $form['username'], 'passwrd' => $form['password']));
			if($query != NULL){
				foreach ($query AS $row){
					$data_session = array(
							'id'			=> $row['id'],
							'username'		=> $row['username'],
							'level_user'	=> $row['level_user_id'],
					);
				}
				$this->session->set_userdata('logged_in', $data_session);
				redirect('users', 'refresh');
			}else{
				redirect('login', 'refresh');
			}
		}else{
			redirect('login');
		}
	}
	
	function empty_login(){
		$this->session->unset_userdata('logged_in');
		redirect('login');
	}
}