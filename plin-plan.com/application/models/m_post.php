<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_post extends CI_Model{
	private $_table		= 'post';
	
	private $_id				= 'id';
	private $_kategori_id		= 'kategori_id';
	private $_user_plinplan_id	= 'user_plinplan_id';
	private $_judul				= 'judul';
	private $_caption			= 'caption';
	private $_gambar_1			= 'gambar_1';
	private $_lokasi_gambar_1	= 'lokasi_gambar_1';
	private $_gambar_2			= 'gambar_2';
	private $_lokasi_gambar_2	= 'lokasi_gambar_2';
	private $_tanggal_post		= 'tanggal_post';
	
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
				$this->_kategori_id		=> $form['kategori_id'],
				$this->_user_plinplan_id=> $form['user_plinplan_id'],
				$this->_judul			=> $form['judul'],
				$this->_caption			=> $form['caption']
// 				$this->_gambar_1		=> $form['gambar_1'],
// 				$this->_lokasi_gambar_1	=> $form['lokasi_gambar_1'],
// 				$this->_gambar_2		=> $form['gambar_2'],
// 				$this->_lokasi_gambar_2	=> $form['lokasi_gambar_2'],
// 				$this->_tanggal_post	=> 'NOW()',
		);
		$this->db->insert($this->_table, $forms);
		return $this->db->affected_rows();
	}
	
	public function update($form = array()){
		$forms = array(
				$this->_kategori_id		=> $form['kategori_id'],
				$this->_user_plinplan_id=> $form['user_plinplan_id'],
				$this->_gambar_1		=> $form['gambar_1'],
				$this->_lokasi_gambar_1	=> $form['lokasi_gambar_1'],
				$this->_gambar_2		=> $form['gambar_2'],
				$this->_lokasi_gambar_2	=> $form['lokasi_gambar_2'],
				$this->_tanggal_post	=> $form['tanggal_post'],
		);
		$this->db->where($this->_id, $form['id']);
		$this->db->update($this->_table, $forms);
	}
	
	public function delete($id){
		$this->db->where($this->_id, $id);
		$this->db->delete($this->_table);
	}
}