<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_siswa extends CI_Model{
	
	private $_table			= 'siswa';
	private $_id			= 'id';
	private $_nis			= 'nis';
	private $_nama_lengkap	= 'nama_lengkap';
	private $_alamat		= 'alamat';
	private $_kota_sekarang	= 'kota_sekarang';
	private $_kota_lahir	= 'kota_lahir';
	private $_tanggal_lahir	= 'tanggal_lahir';
	private $_tahun_masuk	= 'tahun_masuk';
	private $_kelas_id		= 'kelas_id';
	
	public function __construct(){
		parent::__construct();
	}
	
	public function list_siswa($kolom = '*', $where = array()){
		if($where != NULL){
			$this->db->where($where);
		}
		$this->db->select($kolom);
		return $this->db->get($this->_table)->result_array();
	}
	
	public function add_siswa($form = array()){
		$forms = array(
				$this->_nis => $form['nis'],
				$this->_nama_lengkap => $form['nama_lengkap'],
				$this->_alamat => $form['alamat'],
				$this->_kota_sekarang => $form['kota_sekarang'],
				$this->_kota_lahir => $form['kota_lahir'],
				$this->_tanggal_lahir => $form['tanggal_lahir'],
				$this->_tahun_masuk => $form['tahun_masuk'],
				$this->_kelas_id => $form['kelas_id'],
		);
		$this->db->insert($this->_table, $forms);
	}
	
	public function edit_siswa($form = array()){
		$forms = array(
				$this->_nis => $form['nis'],
				$this->_nama_lengkap => $form['nama_lengkap'],
				$this->_alamat => $form['alamat'],
				$this->_kota_sekarang => $form['kota_sekarang'],
				$this->_kota_lahir => $form['kota_lahir'],
				$this->_tanggal_lahir => $form['tanggal_lahir'],
				$this->_tahun_masuk => $form['tahun_masuk'],
				$this->_kelas_id => $form['kelas_id'],
		);
		$this->db->where($this->_id, $form['id']);
		$this->db->update($this->_table, $forms);
	}
	
	public function delete_siswa($id){
		$this->db->where($this->_id, $id);
		$this->db->delete($this->_table);
	}
	
	public function get_nama($id){
		$this->db->select('nama_lengkap');
		$this->db->where('id', $id);
		return $this->db->get($this->_table)->result_array();
	}
}