<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Prestasi extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_prestasi', 'prestasi');
		if(empty($this->session->userdata('logged_in'))){
			redirect(base_url());
		}
	}
	
	public function index(){
		$data['prestasi'] = $this->prestasi->list_prestasi();
		$this->load->model('m_siswa');
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('prestasi/index', $data);
		$this->load->view('template_footer');
	}
	
	public function tambah($action = NULL){
		$data['is_edit'] = false;
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('prestasi/_form', $data);
		$this->load->view('template_footer');
		
		if($action === 'submit'){
			
			if(isset($_POST)){
				$form['id_siswa'] = $this->input->post('_id_siswa');
				$form['nama_prestasi'] = $this->input->post('_nama_prestasi');
				$form['tingkat'] = $this->input->post('_tingkat');
				$form['tahun'] = $this->input->post('_tahun');
				$form['peringkat'] = $this->input->post('_peringkat');
				$this->prestasi->add_prestasi($form);
				redirect('prestasi');
			}
			
		}
	}
	
	public function edit($id, $action = NULL){
		$data['is_edit'] = true;
		$data['prestasi'] = $this->prestasi->list_prestasi('*', array('id'=>$id));
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('prestasi/_form', $data);
		$this->load->view('template_footer');
		
		if($action === 'submit'){
			
			if(isset($_POST)){
				$form['id'] = $this->input->post('_id');
				$form['id_siswa'] = $this->input->post('_id_siswa');
				$form['nama_prestasi'] = $this->input->post('_nama_prestasi');
				$form['tingkat'] = $this->input->post('_tingkat');
				$form['tahun'] = $this->input->post('_tahun');
				$form['peringkat'] = $this->input->post('_peringkat');
				$this->prestasi->edit_prestasi($form);
				redirect('prestasi');
			}
			
		}
	}
}