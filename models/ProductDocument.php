<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * Class ProductDocument
 * @package app\models
 *
 * @property integer $id
 * @property string $path
 * @property integer $created_at
 * @property integer $updated_at
 */

class ProductDocument extends ActiveRecord
{
    public static function tableName()
    {
        return 'product_document';
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['product_id', 'document_id'], 'required'],
            [['product_id', 'document_id'], 'integer'],
        ];
    }
}