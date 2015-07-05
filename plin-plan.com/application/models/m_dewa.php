<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_dewa extends CI_Model{
	private $_table		= 'dewa';
	
	private $_id		= 'id';
	private $_username	= 'username';
	private $_password	= 'password';
	private $_nama		= 'nama';
	private $_level_user= 'level_user';
	
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
				$this->_username		=> $form['username'],
				$this->_password		=> do_hash(
												do_hash('plinplan', 'md5').
												do_hash($form['password']).
												do_hash('plinplan', 'md5'),
											'md5'),
				$this->_nama			=> $form['nama'],
				$this->_level_user		=> $form['level_user'],
		);
		$this->db->insert($this->_table, $forms);
		return $this->db->affected_rows();
	}
	
	public function update($form = array()){
		$forms = array(
				$this->_username		=> $form['username'],
				$this->_password		=> do_hash(
												do_hash('plinplan', 'md5').
												do_hash($form['nama_lengkap']).
												do_hash('plinplan', 'md5'),
											'md5'),
				$this->_nama			=> $form['nama'],
				$this->_level_user		=> $form['level_user'],
		);
		$this->db->where($this->_id, $form['id']);
		$this->db->update($this->_table, $forms);
	}
	
	public function delete($id){
		$this->db->where($this->_id, $id);
		$this->db->delete($this->_table);
	}
}