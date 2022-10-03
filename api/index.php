<?php

error_reporting(-1);
require('application/Application.php');

print_r($_GET);
echo json_encode(answer(router($_GET)));


function router($params){
	$method = $params['method'];
	if($method){
		$app = new Application();
		switch ($method) {
			case 'login':
				return $app->login($params);
				break;

			# case '':
				#break

			default:
				# ...
				break;
		}
	}
	return false;
};

function answer($data){
	if($data){
		return array(
			'result'=>'ok',
			'data'=>$data
		);
	}
	return array('result'=>'error');
};

//print_r('YOU ARE GAY!<br>');
//$arabic_num = $_GET['arabic_number'];

//print_r(toRoman($arabic_num));



