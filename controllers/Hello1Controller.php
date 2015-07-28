<?php

namespace app\controllers;

use yii\web\Controller;

class Hello1Controller extends Controller{

public function actionIndex(){
	$session  = \YII::$app->session;
	$session->open();
	//if($session->isActive){
	//	echo 'session is active';
	//}
	$session->set('user','john');
	$session['user']='john';
	echo $session['user'];
	//unset($session['user']);
	echo $session->get('user');
	//$session->remove('user');
	//识别服务器
	
}
}
?>
