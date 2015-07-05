<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_level_user extends CI_Model{
	private $_table			= 'level_user';
	
	private $_id			= 'id';
	private $_level			= 'level';
	private $_value			= 'value';
	
	public function __construct(){
		parent::__construct();
	}
	
	public function list_level($kolom = '*', $where = array()){
		if($where != NULL)
			$this->db->where($where);
		$this->db->select($kolom);
		return $this->db->get($this->_table)->result_array();
	}
	
	public function select_col_level(){
		$this->db->select('id, level');
		return $this->db->get($this->_table)->result();
	}
	
	public function add_level($form = array()){
		$forms = array(
				$this->_level => $form['level'],
				$this->_value => $form['value']
		);
		$this->db->insert($this->_table, $forms);
	}
	
	public function edit_level($form = array()){
		$forms = array(
				$this->_level => $form['level'],
				$this->_value => $form['value']
		);
		$this->db->where($this->_id, $form['id']);
		$this->db->update($this->_table, $forms);
	}
	
	public function delete($id){
		$this->db->where($this->_id, $id);
		$this->db->delete($this->_table);
	}
}