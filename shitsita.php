<?php
	$nombre = $_REQUEST["nombre"];
	//echo '{"nombre":"'.$nombre.'"}';
	//$arr = ['nom' => $nombre];
	//print_r($arr);
	//echo json_encode($registro);
header('Access-Control-Allow-Origin: *'); 
	$arr = ["nombre" => $nombre,"color"=>"red","edad"=>29];
	//print_r($arr);
	echo json_encode($arr);
?>