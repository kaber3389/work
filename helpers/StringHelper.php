<?php


namespace app\helpers;


class StringHelper extends \yii\helpers\StringHelper
{
    public static function preparePrevText($text)
    {
        return parent::truncate(strip_tags($text), 300);
    }
}