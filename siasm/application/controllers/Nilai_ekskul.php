<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Nilai_ekskul extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_nilai_ekskul', 'nilai');
	}
	
	public function index(){
		$data['nilai'] = $this->nilai->list_nilai_ekskul();
		$this->load->view('nilai_ekskul/index', $data);
	}
	
	public function tambah(){
		$data['is_edit'] = false;
		$this->load->model('m_siswa', 'siswa');
		$this->load->model('m_ekskul', 'ekskul');
		$this->load->view('nilai_ekskul/_form', $data);
		if($this->input->post('submit')){
			$form['siswa_id'] = $this->input->post('_siswa_id', TRUE);
			$form['ekskul_id'] = $this->input->post('_ekskul_id', TRUE);
			$form['nilai'] = $this->input->post('_nilai', TRUE);
			$this->nilai->add_nilai_ekskul($form);
		}
	}
	
	public function edit(){
		$data['is_edit'] = false;
		$this->load->model('m_siswa', 'siswa');
		$this->load->model('m_ekskul', 'ekskul');
		$this->load->view('nilai_ekskul/_form', $data);
		if($this->input->post('submit')){
			$form['id'] = $this->input->post('_id', TRUE);
			$form['siswa_id'] = $this->input->post('_siswa_id', TRUE);
			$form['ekskul_id'] = $this->input->post('_ekskul_id', TRUE);
			$form['nilai'] = $this->input->post('_nilai', TRUE);
			$this->nilai->edit_nilai_ekskul($form);
		}
	}
	
	public function delete(){
		
	}
}