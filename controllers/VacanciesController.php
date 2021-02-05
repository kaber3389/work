<?php

namespace app\controllers;

use yii\web\Controller;

class VacanciesController extends Controller
{
    public function actionIndex()
    {
        $content = 'VacanciesController';
        $this->view->title = 'Вакансии';
        return $this->render('index', ['content' => $content]);
    }
}