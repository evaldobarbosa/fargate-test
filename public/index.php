<?php

header('Content-Type: application/json');
header('Accept: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

switch ($_SERVER['REQUEST_URI']) {
	case '/bla':
		echo json_encode(['message'=>'bla method']);
		return;

	case '/rand':
		echo json_encode(['number'=>mt_rand(1000, 9999)]);
		return;

	case '/hc':
		header("HTTP/1.1 204 No Content");
		return;
	
	default:
		echo json_encode(['message'=> "method {$_SERVER['REQUEST_URI']}"]);
		break;
}