<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Level_user extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('m_level_user', 'level_user');
		if(empty($this->session->userdata('logged_in'))){
			redirect(base_url());
		}
	}
	
	public function index(){
		$data['level'] = $this->level_user->list_level();
		$this->load->view('level_user/index', $data);
	}
	
	public function tambah($action = NULL){
		$this->load->model('m_level_user');
		$data['level'] = $this->m_level_user->select_col_level();
		$data['is_edit'] = FALSE;
		
		$this->load->view('level_user/_form', $data);
		if($action === 'submit'){
			
			if(isset($_POST)){
				$form['value']	= $this->input->post('_value', TRUE);
				$form['level']	= $this->input->post('_level', TRUE);
				$this->m_level_user->add_level($form);
				redirect('level_user');
			}
			
		}
	}
	public function edit($key, $action = NULL){
		$this->load->model('m_level_user');
		$data['level'] = $this->m_level_user->select_col_level();
		$data['is_edit'] = TRUE;
		$data['level_user'] = $this->m_level_user->list_level('', array('id' => $key));
		
		$this->load->view('level_user/_form', $data);
		if($action == 'submit'){
			
			if(isset($_POST)){
				$form['id']			= $this->input->post('_id', TRUE);
				$form['value']		= $this->input->post('_value', TRUE);
				$form['level']		= $this->input->post('_level', TRUE);
				$this->m_level_user->edit_level($form);
				redirect('level_user');
			}
			
		}
	}

	public function delete($id){
		$this->level_user->delete($id);
		redirect('level_user', 'refresh');
	}
}