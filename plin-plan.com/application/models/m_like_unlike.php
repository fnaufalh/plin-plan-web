<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_dewa extends CI_Model{
	private $_table				= 'like_unlike';
	
	private $_id				= 'id';
	private $_user_plinplan_id	= 'user_plinplan_id';
	private $_post_id			= 'post_id';
	private $_status_like_unlike= 'status_like_unlike';
	private $_tanggal			= 'tanggal';
	
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
				$this->_user_plinplan_id	=> $form['user_plinplan_id'],
				$this->_post_id				=> $form['post_id'],
				$this->_status_like_unlike	=> $form['status_like_unlike'],
				$this->_tangal				=> $form['tanggal'],
		);
		$this->db->insert($this->_table, $forms);
	}
	
	public function update($form = array()){
		$forms = array(
				$this->_user_plinplan_id	=> $form['user_plinplan_id'],
				$this->_post_id				=> $form['post_id'],
				$this->_status_like_unlike	=> $form['status_like_unlike'],
				$this->_tangal				=> $form['tanggal'],
		);
		$this->db->where($this->_id, $form['id']);
		$this->db->update($this->_table, $forms);
	}
	
	public function delete($id){
		$this->db->where($this->_id, $id);
		$this->db->delete($this->_table);
	}
}