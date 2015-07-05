<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_prestasi extends CI_Model{
	
	private $_table			= 'prestasi';
	
	private $_id			= 'id';
	private $_id_siswa		= 'id_siswa';
	private $_nama_prestasi	= 'nama_prestasi';
	private $_tingkat		= 'tingkat';
	private $_tahun			= 'tahun';
	private $_peringkat		= 'peringkat';
	
	public function __construct(){
		parent::__construct();
	}
	
	public function list_prestasi($kolom = '*', $where = array()){
		if($where != NULL)
			$this->db->where($where);
		$this->db->select($kolom);
		return $this->db->get($this->_table)->result_array();
	}
	
	public function add_prestasi($form = array()){
		$forms = array(
				$this->_id_siswa => $form['id_siswa'],
				$this->_nama_prestasi => $form['nama_prestasi'],
				$this->_tingkat => $form['tingkat'],
				$this->_tahun => $form['tahun'],
				$this->_peringkat => $form['peringkat']
		);
		$this->db->insert($this->_table, $forms);
	}
	
	public function edit_prestasi($form = array()){
		$forms = array(
				$this->_id_siswa => $form['id_siswa'],
				$this->_nama_prestasi => $form['nama_prestasi'],
				$this->_tingkat => $form['tingkat'],
				$this->_tahun => $form['tahun'],
				$this->_peringkat => $form['peringkat']
		);
		$this->db->where($this->_id, $form['id']);
		$this->db->update($this->_table, $forms);
	}
	
	public function delete_prestasi($id){
		$this->db->where($this->_id, $id);
		$this->db->delete($this->_table);
	}
}