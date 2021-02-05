<?php

namespace app\helpers;

class Url extends \yii\helpers\Url
{

    /**
     * @param string $slug
     * @return string
     */
    public static function toProduct($slug)
    {
        return \Yii::$app->params['homeUrl']
            . 'product'
            . DIRECTORY_SEPARATOR
            . $slug;
    }

    /**
     * @param string $slug
     * @return string
     */
    public static function toNews($slug)
    {
        return \Yii::$app->params['homeUrl']
            . 'news'
            . DIRECTORY_SEPARATOR
            . $slug;
    }

    /**
     * @param string $entity
     * @return string
     */
    public static function toAdminCreate($entity)
    {
        return \Yii::$app->params['homeUrl']
            . 'admin'
            . DIRECTORY_SEPARATOR
            . $entity
            . DIRECTORY_SEPARATOR
            . 'create';
    }

    /**
     * @param string $entity
     * @param string $slug
     * @return string
     */
    public static function toAdminEdit($entity, $slug)
    {
        return \Yii::$app->params['homeUrl']
            . 'admin'
            . DIRECTORY_SEPARATOR
            . $entity
            . DIRECTORY_SEPARATOR
            . 'edit'
            . DIRECTORY_SEPARATOR
            . $slug;
    }
}