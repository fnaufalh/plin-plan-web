<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_guru extends CI_Model{
	
	private $_table			= 'guru';
	private $_id			= 'id';
	private $_nip			= 'nip';
	private $_nama_lengkap	= 'nama_lengkap';
	private $_alamat		= 'alamat';
	private $_kota_sekarang	= 'kota_sekarang';
	private $_kota_lahir	= 'kota_lahir';
	private $_tanggal_lahir	= 'tanggal_lahir';
	
	public function __construct(){
		parent::__construct();
	}
	
	public function list_guru($kolom = '*', $where = array()){
		if($where != NULL){
			$this->db->where($where);
		}
		$this->db->select($kolom);
		return $this->db->get($this->_table)->result_array();
	}
	
	public function add_guru($form = array()){
		$forms = array(
				$this->_nip => $form['nip'],
				$this->_nama_lengkap => $form['nama_lengkap'],
				$this->_alamat => $form['alamat'],
				$this->_kota_sekarang => $form['kota_sekarang'],
				$this->_kota_lahir => $form['kota_lahir'],
				$this->_tanggal_lahir => $form['tanggal_lahir']
		);
		$this->db->insert($this->_table, $forms);
	}
	
	public function edit_guru($form = array()){
		$forms = array(
				$this->_nip => $form['nip'],
				$this->_nama_lengkap => $form['nama_lengkap'],
				$this->_alamat => $form['alamat'],
				$this->_kota_sekarang => $form['kota_sekarang'],
				$this->_kota_lahir => $form['kota_lahir'],
				$this->_tanggal_lahir => $form['tanggal_lahir']
		);
		$this->db->where($this->_id, $form['id']);
		$this->db->update($this->_table, $forms);
	}
	
	public function delete_guru($id){
		$this->db->where($this->_id, $id);
		$this->db->delete($this->_table);
	}
}