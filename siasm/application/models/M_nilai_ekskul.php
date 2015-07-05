<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_nilai_ekskul extends CI_Model{
	private $_table			= 'nilai_ekskul';
	private $_id			= 'id';
	private $_ekskul_id		= 'ekskul_id';
	private $_siswa_id		= 'siswa_id';
	private $_nilai			= 'nilai';
	
	public function __construct(){
		parent::__construct();
	}
	
	public function list_nilai_ekskul(){
		$this->db->select('ne.id AS id, ne.nilai AS nilai, e.nama_ekskul AS ekskul, s.nama_lengkap AS siswa');
		$this->db->from('nilai_ekskul ne');
		$this->db->join('ekskul e', 'e.id=ne.ekskul_id');
		$this->db->join('siswa s', 's.id=ne.siswa_id');
		return $this->db->get()->result_array();
	}
	
	public function add_nilai_ekskul($form = array()){
		$forms = array(
				$this->_ekskul_id => $form['ekskul_id'],
				$this->_siswa_id => $form['siswa_id'],
				$this->_nilai => $form['nilai']
		);
		$this->db->insert($this->_table, $forms);
		redirect('nilai_ekskul');
	}
	
	public function edit_nilai_ekskul($form){
		$forms = array(
				$this->_ekskul_id => $form['ekskul_id'],
				$this->_siswa_id => $form['siswa_id'],
				$this->_nilai => $form['nilai']
		);
		$this->db->where($this->_id, $forms['id']);
		$this->db->update($this->_table, $forms);
		redirect('nilai_ekskul');
	}
}