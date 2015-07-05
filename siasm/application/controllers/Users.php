<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_users');
		if(empty($this->session->userdata('logged_in'))){
			redirect(base_url());
		}
	}
	
	public function index(){
		$data['users'] = $this->m_users->list_users('id, username, level_user_id');
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('users/index', $data);
		$this->load->view('template_footer');
	}
	
	public function tambah($action = NULL){
		$this->load->model('m_level_user');
		$data['level'] = $this->m_level_user->select_col_level();
		$data['is_edit'] = FALSE;
		
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('users/_form', $data);
		$this->load->view('template_footer');
		if($action === 'submit'){
			
			if(isset($_POST)){
				$form['username']	= $this->input->post('_un', TRUE);
				$form['password']	= $this->input->post('_pswrd', TRUE);
				$form['level']		= $this->input->post('_lvl', TRUE);
				$this->m_users->add_user($form);
				redirect('users');
			}
			
		}
	}
	
	public function edit($key, $action = NULL){
		$this->load->model('m_level_user');
		$data['level'] = $this->m_level_user->select_col_level();
		$data['is_edit'] = TRUE;
		$data['users'] = $this->m_users->list_users('', array('id' => $key));
		
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('users/_form', $data);
		$this->load->view('template_footer');
		if($action == 'submit'){
			
			if(isset($_POST)){
				$form['id']			= $this->input->post('_id', TRUE);
				//$form['username']	= $this->input->post('_un', TRUE);
				$form['password']	= $this->input->post('_pswrd', TRUE);
				$form['level']		= $this->input->post('_lvl', TRUE);
				$this->m_users->edit_user($form);
				redirect('users');
			}
			
		}
	}
}