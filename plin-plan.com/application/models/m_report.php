<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_dewa extends CI_Model{
	private $_table		= 'report';
	
	private $_id				= 'id';
	private $_id_post			= 'id_post';
	private $_id_user			= 'id_user';
	private $_tanggal_report	= 'tanggal_report';
	
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
				$this->_id_post			=> $form['id_post'],
				$this->_id_user			=> $form['id_user'],
				$this->_komentar		=> $form['komentar'],
				$this->_tangal_report	=> $form['tanggal_report'],
		);
		$this->db->insert($this->_table, $forms);
	}
	
	public function update($form = array()){
		$forms = array(
				$this->_id_post			=> $form['id_post'],
				$this->_id_user			=> $form['id_user'],
				$this->_komentar		=> $form['komentar'],
				$this->_tangal_report	=> $form['tanggal_report'],
		);
		$this->db->where($this->_id, $form['id']);
		$this->db->update($this->_table, $forms);
	}
	
	public function delete($id){
		$this->db->where($this->_id, $id);
		$this->db->delete($this->_table);
	}
}