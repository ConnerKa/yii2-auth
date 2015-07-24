<?php

namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller{

public function actionIndex(){
	$request = \YII::$app->request;
	echo $request->get('id');
	echo 'hello world';
	}
}
?>
