<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ekskul extends CI_Controller{
	function index(){
		$data['is_edit'] = false;
		$this->load->model('m_ekskul');
		$data['hasil'] = $this->m_ekskul->bacadata();
		
		$this->load->view('template_header');
		$this->load->view('menu');
		$this->load->view('ekskul',$data);
		$this->load->view('template_footer');
	}

	function tambahdata(){
		if($this->input->post('submit')){
			$this->load->model('m_ekskul');
			$this->m_ekskul->tambah();
			redirect('ekskul/index');
		}
		$this->load->view('ekskul');
	}

	function deletedata($id){
			$this->load->model('m_ekskul');
			$this->m_ekskul->deletedata($id);
			redirect('ekskul');
	}

	function update($id){
		$this->load->model('m_ekskul');
		$data['is_edit'] = true;
		$data['ekskul'] = $this->m_ekskul->listdata($id);
		$this->load->view('ekskul',$data);
		if(isset($_POST) && $this->input->post('submit') != null){
			$form['id'] = $this->input->post('id');
			$form['nama_ekskul'] = $this->input->post('nama_ekskul');
			$this->m_ekskul->update($form);
			redirect('ekskul');
		}
	}
}