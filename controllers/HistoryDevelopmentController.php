<?php

namespace app\controllers;

use yii\web\Controller;

class HistoryDevelopmentController extends Controller
{
    public function actionIndex()
    {
        $this->view->title = 'История развития';
        $content = 'HistoryDevelopmentController';
        return $this->render('//layouts/standard-page', ['content' => $content]);
    }
}