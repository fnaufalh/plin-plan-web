<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_kategori extends CI_Model{
	private $_table			= 'kategori';
	
	private $_id			= 'id';
	private $_nama_kategori	= 'nama_kategori';
	
	public function __construct(){
		parent::__construct();
	}
	
	public function getData($where = array(), $kolom = '*'){
		if($where != NULL)
			$this->db->where($where);
		$this->db->select($kolom);
		return $this->db->get($this->_table)->result_array();
	}
	
	public function insert($form = array()){
		$forms = array(
				$this->_nama_kategori => $form['nama_kategori'],
		);
		$this->db->insert($this->_table, $forms);
	}
	
	public function update($form = array()){
		$forms = array(
				$this->_nama_kategori => $form['nama_kategori'],
		);
		$this->db->where($this->_id, $form['id']);
		$this->db->update($this->_table, $forms);
	}
	
	public function delete($id){
		$this->db->where($this->_id, $id);
		$this->db->delete($this->_table);
	}
}