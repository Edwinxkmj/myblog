<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Html;


/**
 * Site controller
 */
class IndexController extends Controller
{
	public function actionIndex(){
		return $this->render('index');
	}
}