<?php

namespace app\controllers;

use yii\web\Controller;

class EcologyController extends Controller
{
    public function actionIndex()
    {
        $this->view->title = 'Экология';
        $content = 'EcologyController';
        return $this->render('//layouts/standard-page', ['content' => $content]);
    }
}