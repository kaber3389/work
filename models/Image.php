<?php

namespace app\models;

use yii\base\ErrorException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\FileHelper;
use yii\web\ForbiddenHttpException;
use yii\web\UploadedFile;

/**
 * Class Image
 * @package app\models
 *
 * @property integer $id
 * @property string $path
 * @property integer $created_at
 * @property integer $updated_at
 */

class Image extends ActiveRecord
{
    public static function tableName()
    {
        return 'image';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    public static function noImage()
    {
        return \Yii::getAlias('@web/images/site/no-image.png');
    }

    public static function saveImage(UploadedFile $file)
    {
        $imageDir = time();
        $uploadDir = \Yii::getAlias('@webroot/upload/images/' . $imageDir);
        if (!FileHelper::createDirectory($uploadDir))
            throw new ForbiddenHttpException();
        
        $path = \Yii::getAlias('@web/upload/images/' . $imageDir) . '/' . $file->name;
        if ($file->saveAs($uploadDir . '/' . $file->name)) {
            $image = new self();
            $image->path = $path;

            if (!$image->save())
                throw new ErrorException();

            return $image->id;
        }

        return null;
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['path'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
        ];
    }
}