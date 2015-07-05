<?php //defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_user_plinplan', 'user');
	}
	
	public function index(){
// 		$this->load->library('recaptcha');
		
// 		$data['recaptcha_html'] = $this->recaptcha->recaptcha_get_html();
		
		$this->load->view('form_register');
		
		if($this->input->post('submit')){
			$form = array(
					'username'		=> $this->input->post('username'),
					'password'		=> $this->input->post('password'),
					'email'			=> $this->input->post('email'),
					'nama_depan'	=> $this->input->post('nama_depan'),
					'nama_belakang'	=> $this->input->post('nama_belakang'),
					'tgl_lahir'	=> $this->input->post('tgl_lahir')
			);
			$this->user->insert($form);
			redirect(base_url());
		}
	}
}