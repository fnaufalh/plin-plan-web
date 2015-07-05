<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_kelas extends CI_Model{
	
	private $_table			= 'kelas';
	private $_id			= 'id';
	private $_guru_id		= 'guru_id';
	private $_kelas			= 'kelas';
	private $_ruangan		= 'ruangan';
	
	public function __construct(){
		parent::__construct();
	}
	
	public function list_kelas($kolom = '*', $where = array()){
		if($where != NULL){
			$this->db->where($where);
		}
		$this->db->select($kolom);
		return $this->db->get($this->_table)->result_array();
	}
	
	public function add_kelas($form = array()){
		$forms = array(
				$this->_guru_id => $form['guru_id'],
				$this->_kelas => $form['kelas'],
				$this->_ruangan => $form['ruangan'],
		);
		$this->db->insert($this->_table, $forms);
	}
	
	public function edit_kelas($form = array()){
		$forms = array(
				$this->_guru_id => $form['guru_id'],
				$this->_kelas => $form['kelas'],
				$this->_ruangan => $form['ruangan'],
		);
		$this->db->where($this->_id, $form['id']);
		$this->db->update($this->_table, $forms);
	}
	
	public function delete_kelas($id){
		$this->db->where($this->_id, $id);
		$this->db->delete($this->_table);
	}
	
	public function get_nama_kelas($id){
		$this->db->where($this->_id, $id);
		return $this->db->get($this->_table)->result_array();
	}
}