<?php

namespace app\controllers;

use yii\web\Controller;

class WarrantyController extends Controller
{
    public function actionIndex()
    {
        $this->view->title = 'Гарантии';
        return $this->render('index');
    }
}