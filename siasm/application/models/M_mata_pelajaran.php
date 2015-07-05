<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mata_pelajaran extends CI_Model{
	private $_table = 'mata_pelajaran';
	
	private $_id				= 'id';
	private $_mata_pelajaran	= 'mata_pelajaran';
	
	
	public function __construct(){
		parent::__construct();
	}
	
	public function list_mata_pelajaran($kolom = '*', $where = array()){
		if($where != NULL)
			$this->db->where($where);
		$this->db->select($kolom);
		return $this->db->get($this->_table)->result_array();
	}
	
	public function add_mata_pelajaran($form = array()){
		$forms = array(
				$this->_id => $form['id'],
				$this->_mata_pelajaran => $form['mata_pelajaran'],
		);
		$this->db->insert($this->_table, $forms);
	}

	public function delete($id){
		$this->db->where($this->_id, $id);
		$this->db->delete($this->_table);
	}
	
	public function edit_mata_pelajaran($form = array()){
		$forms = array(
				$this->_id => $form['id'],
				$this->_mata_pelajaran => $form['mata_pelajaran'],
		);
		$this->db->where($this->_id, $form['id']);
		$this->db->update($this->_table, $forms);
	}
}