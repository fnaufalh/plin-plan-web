<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Post extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_post', 'posting');
	}
	
	public function index($output = NULL){
		$data['data'] = $this->posting->getData();
		$datajson = $data['data'];
		
		if($output == 'json'){
			$json = array();
			foreach ($datajson AS $key=>$value){
				$json[$key] = $value;
			}
			echo json_encode($json);
		}else{
			$this->load->view('template_header');
			$this->load->view('dewa/index', $data);
			$this->load->view('template_footer');
		}
	}
	
	public function add(){
// 		header("Content­Type: application/json; charset=UTF­8");
// 		header('Access­Control­Allow­Origin: *');
// 		header('Access­Control­Allow­Methods: GET, POST');
// 		$data = json_decode(file_get_contents('php://input'));
		$pecah = explode('~SPC~', $this->uri->segment(3));
		$form = array(
				'kategori_id' => $pecah[0],
				'user_plinplan_id' => '1',
				'judul' => $pecah[1],
				'caption' => $pecah[2],
		);
		//print_r($form);
		//echo json_encode($form);
		echo $this->posting->insert($form);
	}
    
    public function test(){
        /* $return = array('success' => true);
        
        if( isset( $_FILES['avatar'] ) ) {
            $return['image'] = $_FILES['avatar'];
        }
        else{
            $return['msg'] = "FILE NOT SUBMITED";
        }
        
        header('Content-Type:application/json');
        echo json_encode( $_FILES ); */
        header('Access-Control-Allow-Origin: *');
        header('Content-Type:application/json');
		echo json_encode(
				array(
						'123' => $this->input->get_post('kategori_id'),
						'POST' => (isset($_POST)?$_POST:''),
						'GET' => (isset($_GET)?$_GET:'')
				));
		
		/* $headers = apache_request_headers();
		
		foreach ($headers as $header => $value) {
			echo "$header: $value <br />\n";
		} */
	}
}