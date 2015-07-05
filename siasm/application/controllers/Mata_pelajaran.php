<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mata_pelajaran extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_mata_pelajaran');
	}
	
	public function index(){
		$data['mata_pelajaran'] = $this->m_mata_pelajaran->list_mata_pelajaran();
		$this->load->view('mapel/index', $data);
	}
	
	public function tambah($action = NULL){
		$this->load->model('m_mata_pelajaran');
		$data['mata_pelajaran'] = $this->m_mata_pelajaran->list_mata_pelajaran();
		$data['is_edit'] = FALSE;
		
		$this->load->view('mapel/mapel_form', $data);
		if($action === 'submit'){
			
			if(isset($_POST)){
				$form['id']					= $this->input->post('_id', TRUE);
				$form['mata_pelajaran']		= $this->input->post('_mata_pelajaran', TRUE);
				$this->m_mata_pelajaran->add_mata_pelajaran($form);
				redirect('mata_pelajaran');
			}
		}
	}
	
	public function delete($id){
		$this->m_mata_pelajaran->delete($id);
		redirect('mata_pelajaran', 'refresh');
	}

	public function edit($key, $action = NULL){
		$data['is_edit'] = TRUE;
		$data['mata_pelajaran'] = $this->m_mata_pelajaran->list_mata_pelajaran('*', array('id'=>$key));
		$this->load->view('mapel/mapel_form', $data);

		if($action === 'submit'){
			
			if(isset($_POST)){
				$form['id']					= $this->input->post('_id', TRUE);
				$form['mata_pelajaran']		= $this->input->post('_mata_pelajaran', TRUE);
				$this->m_mata_pelajaran->edit_mata_pelajaran($form);
				redirect('mata_pelajaran');
			}
		}
	}
}