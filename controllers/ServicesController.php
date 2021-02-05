<?php

namespace app\controllers;

use yii\web\Controller;

class ServicesController extends Controller
{
    public function actionIndex()
    {
        $content = 'Сервисы';
        return $this->render('index', ['content' => $content]);
    }
}