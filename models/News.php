<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * Class News
 * @package app\models
 *
 * @property integer $id
 * @property string $title
 * @property string $main_image_id
 * @property string $prev_content
 * @property string $content
 * @property string $slug
 * @property integer $is_active
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Image $mainImage
 */

class News extends ActiveRecord
{
    public $image;

    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['slug'], 'unique'],
            [['title', 'slug'], 'required'],
            [['title', 'prev_content', 'content'], 'string'],
            [['is_active', 'main_image_id','created_at', 'updated_at'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Название',
            'main_image_id' => 'Главное изображение',
            'content' => 'Контент',
            'is_active' => 'Активный',
            'slug' => 'Ссылка новости',
            'in_main_page' => 'Выводить на главной',
            'created_at' => 'Создан',
            'updated_at' => 'Обновлен',
        ];
    }

    public function getMainImage()
    {
        return $this->hasOne(Image::class, ['id' => 'main_image_id']);
    }

    public static function getAllSortByIDesc()
    {
        return self::find()
            ->orderBy(['id' => SORT_DESC])
            ->all();
    }
}