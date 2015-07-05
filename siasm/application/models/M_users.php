<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model{
	private $_table = 'users';
	
	private $_id			= 'id';
	private $_username		= 'username';
	private $_password		= 'passwrd';
	private $_level_user_id	= 'level_user_id';
	
	public function __construct(){
		parent::__construct();
	}
	
	public function list_users($kolom = '*', $where = array()){
		if($where != NULL)
			$this->db->where($where);
		$this->db->select($kolom);
		return $this->db->get($this->_table)->result_array();
	}
	
	public function add_user($form = array()){
		$forms = array(
				$this->_username => $form['username'],
				$this->_password => do_hash($form['password'], 'md5'),
				$this->_level_user_id => $form['level']	
		);
		$this->db->insert($this->_table, $forms);
	}
	
	public function edit_user($form = array()){
		$forms = array();
		if($form['password'] == NULL || $form['password'] == ''){
			$forms[$this->_level_user_id]	= $form['level'];
		}else{
			$forms[$this->_password]		= do_hash($form['password'], 'md5');
			$forms[$this->_level_user_id]	= $form['level'];
		}
		$this->db->where($this->_id, $form['id']);
		$this->db->update($this->_table, $forms);
	}
}