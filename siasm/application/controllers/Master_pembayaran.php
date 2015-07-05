<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Master_pembayaran extends CI_Controller{
	function index(){
		$data['is_edit'] = false;
		$this->load->model('m_master_pembayaran');
		$data['hasil'] = $this->m_master_pembayaran->bacadata();
		$this->load->view('master_pembayaran',$data);
	}

	function tambahdata(){
		if($this->input->post('submit')){
			$this->load->model('m_master_pembayaran');
			$this->m_master_pembayaran->tambah();
			redirect('master_pembayaran/index');
		}
		$this->load->view('master_pembayaran');
	}

	function deletedata($id){
			$this->load->model('m_master_pembayaran');
			$this->m_master_pembayaran->deletedata($id);
			redirect('master_pembayaran');
	}

	function update($id){
		$this->load->model('m_master_pembayaran');
		$data['is_edit'] = true;
		$data['master_pembayaran'] = $this->m_master_pembayaran->listdata($id);
		$this->load->view('master_pembayaran',$data);
		if(isset($_POST) && $this->input->post('submit') != null){
			$form['id'] = $this->input->post('id');
			$form['nama_pembayaran'] = $this->input->post('nama_pembayaran');
			$form['harga'] = $this->input->post('harga');
			$this->m_master_pembayaran->update($form);
			redirect('master_pembayaran');
		}
	}
}