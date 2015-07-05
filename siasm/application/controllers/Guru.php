<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Guru extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('m_guru', 'guru');
		if(empty($this->session->userdata('logged_in'))){
			redirect(base_url());
		}
	}
	
	public function index(){
		$data['guru'] = $this->guru->list_guru();
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('guru/index', $data);
		$this->load->view('template_footer');
	}
	
	public function tambah($action = NULL){
		$data['is_edit'] = false;
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('guru/_form', $data);
		$this->load->view('template_footer');
		
		if($action === 'submit'){
			
			if(isset($_POST)){
				$form['nip']			= $this->input->post('_nip', TRUE);
				$form['nama_lengkap']	= $this->input->post('_nama', TRUE);
				$form['alamat']			= $this->input->post('_alamat', TRUE);
				$form['kota_sekarang']	= $this->input->post('_kota_sekarang', TRUE);
				$form['kota_lahir']		= $this->input->post('_kota_lahir', TRUE);
				$form['tanggal_lahir']	= $this->input->post('_tanggal_lahir', TRUE);
				#$form['wali_kelas']		= $this->input->post('_wali_kelas', TRUE);
				$this->guru->add_guru($form);
				redirect('guru');
			}
			
		}
	}
	
	public function edit($id, $action = NULL){
		$data['is_edit'] = true;
		$data['guru'] = $this->guru->list_guru('*', array('id'=>$id));
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('guru/_form', $data);
		$this->load->view('template_footer');
		if($action == 'submit'){
			if($_POST){
				if(isset($_POST)){
					$form['id']				= $this->input->post('_id', TRUE);
					$form['nip']			= $this->input->post('_nip', TRUE);
					$form['nama_lengkap']	= $this->input->post('_nama', TRUE);
					$form['alamat']			= $this->input->post('_alamat', TRUE);
					$form['kota_sekarang']	= $this->input->post('_kota_sekarang', TRUE);
					$form['kota_lahir']		= $this->input->post('_kota_lahir', TRUE);
					$form['tanggal_lahir']	= $this->input->post('_tanggal_lahir', TRUE);
					$this->guru->edit_guru($form);
					redirect('guru');
				}
			}
		}
	}
	
}