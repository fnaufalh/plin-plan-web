<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_user_plinplan extends CI_Model{
	private $_table		= 'user_plinplan';
	
	private $_id				= 'id';
	private $_level_user_id		= 'level_user_id';
	private $_username			= 'username';
	private $_password			= 'password';
	private $_email				= 'email';
	private $_foto				= 'foto';
	private $_nama_depan		= 'nama_depan';
	private $_nama_belakang		= 'nama_belakang';
	private $_tgl_lahir			= 'tgl_lahir';
    private $_noTelp			= 'noTelp';
    private $_biodata			= 'biodata';
    private $_jenisKelamin		= 'jenisKelamin';
	private $_status_online		= 'status_online';
	private $_status_active		= 'status_active';
	
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
				$this->_level_user_id	=> '3',
				$this->_username		=> $form['username'],
				$this->_password		=> md5(md5('plinplan').md5($form['password']).md5('user')),
				$this->_email			=> $form['email'],
				//$this->_foto			=> $form['foto'],
				$this->_nama_depan		=> $form['nama_depan'],
				$this->_nama_belakang	=> $form['nama_belakang'],
				$this->_tgl_lahir		=> $form['tgl_lahir'],
		);
		$this->db->insert($this->_table, $forms);
	}
	
	public function update($form = array()){
		$forms = array(
                $this->_email		=> $form['email'],
                $this->_foto		=> $form['foto'],
                $this->_nama_depan	=> $form['nama_depan'],
                $this->_nama_belakang	=> $form['nama_belakang'],
                $this->_tgl_lahir	=> $form['tgl_lahir'],
                $this->_noTelp		=> $form['noTelp'],
                $this->_biodata		=> $form['biodata']
		);
		$this->db->where($this->_id, $form['id']);
		$this->db->update($this->_table, $forms);
	}
	public function updatePassword($form = array()){
        $forms = array(
            $this->_password    => $form['password']
        );
        $this->db->where($this->_id, $form['id']);
        $this->db->update($this->_table, $forms);
    }
	public function delete($id){
		$this->db->where($this->_id, $id);
		$this->db->delete($this->_table);
	}
}