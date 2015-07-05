<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Dewa extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_dewa', 'dewa');
	}
	
	public function index($type = NULL){
		$data['data'] = $this->dewa->getData();
		$datajson = $data['data'];
// 		$this->load->view('template_header');
// 		$this->load->view('dewa/index', $data);
// 		$this->load->view('template_footer');
		if($type == 'json'){
			$json = array();
			foreach ($datajson AS $key=>$value){
				$json[$key] = $value;
			}
			echo json_encode($json);
		}else{
			var_dump($data['data']);
		}
	}
	
	public function add(){
		/* $this->load->view('template_header');
		$this->load->view('dewa/form');
		$this->load->view('template_footer');
		
		if(isset($_POST['submit'])){ */
			header("Content­Type: application/json; charset=UTF­8");
			header('Access­Control­Allow­Origin: *');
			header('Access­Control­Allow­Methods: GET, POST');
			$data = json_decode(file_get_contents('php://input'), true);
			$form = array(
					'username' => $data->username,
					'password' => $data->password,
					'nama' => $data->nama,
					'level_user' => $data->level_user
			);
			echo json_encode($form);
			//echo 'a';
			//echo $this->dewa->insert($form);
			/* $data = json_decode(file_get_contents('php://input'));
			$form = array( */
// 					'username' => $data->username,
// 					'password' => $data->password,
// 					'nama' => $data->nama,
// 					'level_user' => $data->level_user
			/* );
			$jsn = json_encode($data->username);
			echo $jsn; */
			/* if($this->dewa->insert($form)){
				$array = array('msg' => "User Created Successfully!!!", 'error' => '');
				$jsn = json_encode($array);
				echo ($jsn);
			}else{
				$array = array('msg' => "", 'error' => 'Error In inserting');
				$jsn = json_encode($array);
				echo ($jsn);
			} */
			/* $form = array(
					'username' => $this->input->post('username', TRUE),
					'password' => $this->input->post('password', TRUE),
					'nama' => $this->input->post('nama', TRUE),
					'level_user' => $this->input->post('level_user', TRUE)
			); */
		/* 	$this->dewa->insert($form);
			redirect('dewa', 'refresh');
		} */
	}
}