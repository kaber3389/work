<?php

namespace app\controllers;

use app\models\News;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class PressCenterController extends Controller
{
    public function actionNews($id = null)
    {
        if ($id)
        {
            $news = News::findOne($id);
            if (!$news)
                throw new NotFoundHttpException();

            $this->view->title = $news->title;
            return $this->render('news-view', compact('news'));
        }
        else
        {
            $news = News::find()
                ->orderBy(['id' => SORT_DESC])
                ->all();

            $this->view->title = 'Новости и события';
            return $this->render('news', compact('news'));
        }
    }

    public function actionCorporateCulture()
    {
        $this->view->title = 'Корпоративная культура';
        return $this->render('corporate-culture');
    }

    public function actionSubscriptions()
    {
        $this->view->title = 'Подписки';
        return $this->render('subscriptions');
    }
}