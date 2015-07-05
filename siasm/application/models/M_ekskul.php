<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ekskul extends CI_Model{
	function tambah(){
	$nama_ekskul = $this->input->post('nama_ekskul');
	$data = array('nama_ekskul'=>$nama_ekskul);
	$this->db->insert('ekskul',$data);
	}

	function bacadata(){
		$baca = $this->db->get('ekskul');
		if($baca->num_rows() > 0){
			foreach ($baca->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}

	function deletedata($id){
		$data = array('id'=>$id);
		$this->db->delete('ekskul',$data);
	}

	function listdata($id){
		$this->db->select('*');
		$this->db->where('id',$id);
		return $this->db->get('ekskul')->result_array();
	}

	function update($form = array()){
		$forms = array(
			'nama_ekskul'=>$form['nama_ekskul']
			);
		$this->db->where('id',$form['id']);
		$this->db->update('ekskul', $forms);
	}
	
	public function list_ekskul($kolom = '*', $where = array()){
		if($where != NULL)
			$this->db->where($where);
		$this->db->select($kolom);
		return $this->db->get('ekskul')->result_array();
	}
}