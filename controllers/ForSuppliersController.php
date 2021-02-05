<?php

namespace app\controllers;

use yii\web\Controller;

class ForSuppliersController extends Controller
{
    public function actionPurchases()
    {
        $this->view->title = 'Актуальные закупки';
        return $this->render('purchases');
    }

    public function actionTenders()
    {
        $this->view->title = 'Тендеры';
        return $this->render('tenders');
    }

    public function actionFeedback()
    {
        $this->view->title = 'Обратная связь';
        return $this->render('feedback');
    }
}