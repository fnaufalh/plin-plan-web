<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_master_pembayaran extends CI_Model{
	function tambah(){
	$nama_pembayaran = $this->input->post('nama_pembayaran');
	$harga = $this->input->post('harga');
	$data = array('nama_pembayaran'=>$nama_pembayaran,
		'harga'=>$harga);
	$this->db->insert('master_pembayaran',$data);
	}

	function bacadata(){
		$baca = $this->db->get('master_pembayaran');
		if($baca->num_rows() > 0){
			foreach ($baca->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}

	function deletedata($id){
		$data = array('id'=>$id);
		$this->db->delete('master_pembayaran',$data);
	}

	function listdata($id){
		$this->db->select('*');
		$this->db->where('id',$id);
		return $this->db->get('master_pembayaran')->result_array();
	}

	function update($form = array()){
		$forms = array(
			'nama_pembayaran'=>$form['nama_pembayaran'],
			'harga'=>$form['harga']
			);
		$this->db->where('id',$form['id']);
		$this->db->update('master_pembayaran', $forms);
	}
}