<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class xxM_level_user extends CI_Model{
	private $_table			= 'level_user';
	
	private $_id			= 'id';
	private $_level			= 'level';
	private $_value			= 'value';
	
	public function __construct(){
		parent::__construct();
	}
	
	public function list_level($where = NULL){
		return $this->db->get($this->_table);
	}
	
	public function select_col_level(){
		$this->db->select('id, level');
		return $this->db->get($this->_table)->result();
	}
}