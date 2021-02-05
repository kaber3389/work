<?php

namespace app\controllers;

use app\models\Leadership;
use yii\web\Controller;

class LeadershipController extends Controller
{
    public function actionIndex()
    {
        $leadership = Leadership::find()
            ->where(['is_active' => 1])
            ->all();

        return $this->render('index', compact('leadership'));
    }

    public function actionView($slug)
    {
        $leadership = Leadership::find()
            ->where(['is_active' => 1, 'slug' => strip_tags($slug)])
            ->all();

        return $this->render('view', compact('leadership'));
    }
}