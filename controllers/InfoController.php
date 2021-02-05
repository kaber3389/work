<?php

namespace app\controllers;

use app\models\Page;
use app\models\Product;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class InfoController extends Controller
{

    public function actionIndex()
    {
        $this->view->title = 'Информация для клиента';
        return $this->render('index');
    }
}