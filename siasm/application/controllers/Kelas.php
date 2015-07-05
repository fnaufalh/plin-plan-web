<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Kelas extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('m_kelas', 'kelas');
		if(empty($this->session->userdata('logged_in'))){
			redirect(base_url());
		}
	}
	
	public function index(){
		$data['kelas'] = $this->kelas->list_kelas();
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('kelas/index', $data);
		$this->load->view('template_footer');
	}
	
	public function tambah($action = NULL){
		$this->load->model('m_guru', 'guru');
		
		$data['wali'] = $this->guru->list_guru('id, nama_lengkap');
		
		$data['is_edit'] = false;
		
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('kelas/_form', $data);
		$this->load->view('template_footer');
		
		if($action === 'submit'){
			
			if(isset($_POST)){
				$form['guru_id']	= $this->input->post('_guru_id', TRUE);
				$form['kelas']		= $this->input->post('_kelas', TRUE);
				$form['ruangan']	= $this->input->post('_ruangan', TRUE);
				$this->kelas->add_kelas($form);
				redirect('kelas');
			}
			
		}
	}
	
	public function edit($id, $action = NULL){
		$this->load->model('m_guru', 'guru');
		
		$data['is_edit'] = true;
		$data['wali'] = $this->guru->list_guru('id, nama_lengkap');
		$data['kelas'] = $this->kelas->list_kelas('*', array('id'=>$id));
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('kelas/_form', $data);
		$this->load->view('template_footer');
		if($action == 'submit'){
			if($_POST){
				if(isset($_POST)){
					$form['id']			= $this->input->post('_id', TRUE);
					$form['guru_id']	= $this->input->post('_guru_id', TRUE);
					$form['kelas']		= $this->input->post('_kelas', TRUE);
					$form['ruangan']	= $this->input->post('_ruangan', TRUE);
					$this->kelas->edit_kelas($form);
					redirect('kelas');
				}
			}
		}
	}
	
	public function hapus($id){
		$this->kelas->delete_kelas($id);
		redirect('kelas');
	}
	
}