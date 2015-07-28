<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\EntryForm;

class HelloController extends Controller{

public function actionEntry()
    {
        $model = new EntryForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()){
                return $this->render('entry-confirm',['model'=>$model,]);
        }
        else{
                return $this->render('entry',['model'=>$model,]);
        }
   }
public function actionIndex(){
	//$request = \YII::$app->request;
	return $this->render('index');
	/*$res = \YII::$app->response;
	$res->statusCode = '404';
	//handle head
	$res->headers->add('pramma','no-cache');
	$res->headers->set('pramma','max-age=5');
	$res->header->remove('pramma');
	//跳转
	//$res->headers->add('location','https://www.baidu.com');

	$this->redirect('https://www.baidu.com',302);
	//下载
	$res->headers->add('content-disposition','attachment;filename="a.jpg"');
	$res->sendFile('./robots.txt');
	//echo $request->get('id');
	//echo 'hello world';
	*/
	}
}
?>
