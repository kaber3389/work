<?php


namespace app\models;


use yii\behaviors\TimestampBehavior;

/**
 * Class Leadership
 * @package app\models
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $position
 * @property string $description
 * @property integer $main_image_id
 * @property integer $is_active
 * @property string $slug
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Image $mainImage
 */

class Leadership extends \yii\db\ActiveRecord
{
    public $image;

    public static function tableName()
    {
        return 'leadership';
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

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['slug'], 'unique'],
            [['name', 'slug'], 'required'],
            [['name', 'email', 'phone', 'position', 'description'], 'string'],
            [['is_active', 'main_image_id', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'ФИО',
            'email' => 'Эл. почта',
            'phone' => 'Телефон',
            'position' => 'Должность',
            'is_active' => 'Активный',
            'slug' => 'URL заголовок',
            'description' => 'Описание',
            'main_image_id' => 'ID главного изображения',
            'created_at' => 'Создан',
            'updated_at' => 'Обновлен',
        ];
    }

    public function getMainImage()
    {
        return $this->hasOne(Image::class, ['id' => 'main_image_id']);
    }

    public function beforeSave($insert)
    {
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }
}