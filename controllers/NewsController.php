<?php

namespace app\controllers;

use app\models\News;
use yii\web\Controller;

class NewsController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $news = News::find()
            ->where(['is_active' => 1])
            ->orderBy('id DESC')
            ->all();

        return $this->render('index', compact('news'));
    }

    /**
     * @param string $slug
     */
    public function actionView($slug)
    {
        $news = News::findOne(['slug' => strip_tags($slug), 'is_active' => 1]);
        return $this->render('view', compact('news'));
    }
}