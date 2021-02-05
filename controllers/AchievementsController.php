<?php

namespace app\controllers;

use yii\web\Controller;

class AchievementsController extends Controller
{
    public function actionIndex()
    {
        $content = 'AchievementsController';
        $this->view->title = 'Достижения';
        return $this->render('//layouts/standard-page', ['content' => $content]);
    }
}