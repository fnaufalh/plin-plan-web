<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_ekskul extends CI_Model{
	
	private $_table			= 'ekskul';
	
	private $_id			= 'id';
	private $_nama_ekskul	= 'nama_ekskul';
	
	public function __construct(){
		parent::__construct();
	}
	
	public function list_ekskul($kolom = '*', $where = array()){
		if($where != NULL)
			$this->db->where($where);
		$this->db->select($kolom);
		return $this->db->get($this->_table)->result_array();
	}
	
	public function add_ekskul($form = array()){
		$forms = array(
				$this->_nama_ekskul => $form['nama_ekskul']
		);
		$this->db->insert($this->_table, $forms);
	}
	
	public function edit_ekskul($form = array()){
		$forms = array(
				$this->_nama_ekskul => $form['nama_ekskul']
		);
		$this->db->where($this->_id, $form['id']);
		$this->db->update($this->_table, $forms);
	}
	
	public function delete_ekskul($id){
		$this->db->where($this->_id, $id);
		$this->db->delete($this->_table);
	}
}