<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Siswa extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('m_siswa', 'siswa');
		if(empty($this->session->userdata('logged_in'))){
			redirect(base_url());
		}
	}
	
	public function index(){
		$data['siswa'] = $this->siswa->list_siswa();
		$this->load->model('m_kelas', 'kelas');
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('siswa/index', $data);
		$this->load->view('template_footer');
	}
	
	public function tambah($action = NULL){
		$this->load->model('m_kelas', 'kelas');
		
		$data['kelas'] = $this->kelas->list_kelas();
		$data['is_edit'] = false;
		
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('siswa/_form', $data);
		$this->load->view('template_footer');
		
		if($action === 'submit'){
			if(isset($_POST)){
				$form['nis'] = $this->input->post('_nis', TRUE);
				$form['nama_lengkap'] = $this->input->post('_nama_lengkap', TRUE);
				$form['alamat'] = $this->input->post('_alamat', TRUE);
				$form['kota_sekarang'] = $this->input->post('_kota_sekarang', TRUE);
				$form['kota_lahir'] = $this->input->post('_kota_lahir', TRUE);
				$form['tanggal_lahir'] = $this->input->post('_tanggal_lahir', TRUE);
				$form['tahun_masuk'] = $this->input->post('_tahun_masuk', TRUE);
				$form['kelas_id'] = $this->input->post('_kelas_id', TRUE);
				$this->siswa->add_siswa($form);
				redirect('siswa');
			}
		}
	}
	
	public function edit($id, $action = NULL){
		$this->load->model('m_kelas', 'kelas');
		
		$data['kelas'] = $this->kelas->list_kelas();
		$data['is_edit'] = true;
		$data['siswa'] = $this->siswa->list_siswa('*', array('id'=>$id));
		
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('siswa/_form', $data);
		$this->load->view('template_footer');
		
		if($action === 'submit'){
			if(isset($_POST)){
				$form['id'] = $this->input->post('_id', TRUE);
				$form['nis'] = $this->input->post('_nis', TRUE);
				$form['nama_lengkap'] = $this->input->post('_nama_lengkap', TRUE);
				$form['alamat'] = $this->input->post('_alamat', TRUE);
				$form['kota_sekarang'] = $this->input->post('_kota_sekarang', TRUE);
				$form['kota_lahir'] = $this->input->post('_kota_lahir', TRUE);
				$form['tanggal_lahir'] = $this->input->post('_tanggal_lahir', TRUE);
				$form['tahun_masuk'] = $this->input->post('_tahun_masuk', TRUE);
				$form['kelas_id'] = $this->input->post('_kelas_id', TRUE);
				$this->siswa->edit_siswa($form);
				redirect('siswa');
			}
		}
	}
	
	public function delete($id){
		$this->siswa->delete_siswa($id);
		redirect('siswa');
	}
}