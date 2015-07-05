<?php
header("Content­Type: application/json; charset=UTF­8");
header('Access­Control­Allow­Origin: *');
header('Access­Control­Allow­Methods: POST, GET, PUT');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
$postdata = file_get_contents("php://input");
$req = json_decode($postdata, true);
$array = array(
	'kategori_id' => $req['kategori_id'],
	'judul' => $req['judul'],
	'captions'=> $req['caption'],
);
echo json_encode($array);