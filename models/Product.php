<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $pro_id Id
 * @property string $pro_name Nombre
 * @property string $pro_description Descripción
 * @property int $pro_status Estatus
 * @property string $pro_photo Foto
 * @property string $pro_date Fecha
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pro_name', 'pro_description', 'pro_status', 'pro_photo', 'pro_date'], 'required'],
            [['pro_description'], 'string'],
            [['pro_status'], 'integer'],
            [['pro_date'], 'safe'],
            [['pro_name'], 'string', 'max' => 150],
            [['pro_photo'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pro_id' => 'Id',
            'pro_name' => 'Nombre',
            'pro_description' => 'Descripción',
            'pro_status' => 'Estatus',
            'pro_photo' => 'Foto',
            'pro_date' => 'Fecha',
        ];
    }
}
