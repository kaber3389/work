<?php

namespace app\controllers;

use app\models\Page;
use app\models\Product;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class ProductsController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        $products = Product::find()
            ->where(['is_active' => 1])
            ->orderBy('id DESC')
            ->all();

        return $this->render('index', compact('products'));
    }

    /**
     * @param string $slug
     */
    public function actionView($slug)
    {
        $product = Product::findOne(['slug' => strip_tags($slug), 'is_active' => 1]);
        return $this->render('view', ['product' => $product]);
    }
}