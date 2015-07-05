<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Ekskul extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_ekskul', 'ekskul');
		if(empty($this->session->userdata('logged_in'))){
			redirect(base_url());
		}
	}
	
	public function index(){
		$data['ekskul'] = $this->ekskul->list_ekskul();
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('ekskul/index', $data);
		$this->load->view('template_footer');
	}
	
	public function tambah($action = NULL){
		$data['is_edit'] = false;
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('ekskul/_form', $data);
		$this->load->view('template_footer');
		
		if($action === 'submit'){
			
			if(isset($_POST)){
				$form['nama_ekskul']	= $this->input->post('_nama', TRUE);
				$this->ekskul->add_ekskul($form);
				redirect('ekskul');
			}
			
		}
	}
	
	public function edit($id, $action = NULL){
		$data['is_edit'] = true;
		$data['ekskul'] = $this->ekskul->list_ekskul('*', array('id'=>$id));
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('ekskul/_form', $data);
		$this->load->view('template_footer');
		if($action == 'submit'){
			if($_POST){
				if(isset($_POST)){
					$form['id']				= $this->input->post('_id', TRUE);
					$form['nama_ekskul']	= $this->input->post('_nama', TRUE);
					$this->ekskul->edit_ekskul($form);
					redirect('ekskul');
				}
			}
		}
	}
}