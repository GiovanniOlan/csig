<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "producto".
 *
 * @property int $pro_id Id
 * @property string $pro_name Nombre
 * @property string $pro_description Descripción
 * @property int $pro_status Estatus
 * @property string $pro_photo Foto
 * @property string $pro_date Fecha
 */
class Producto extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'producto';
    }

    public function rules()
    {
        return [
            [['pro_name', 'pro_description', 'pro_status', 'pro_date'], 'required'],
            [['pro_description'], 'string'],
            [['pro_status'], 'integer'],
            [['pro_date'], 'safe'],
            [['pro_name'], 'string', 'max' => 150],
        ];
    }

    public function attributeLabels()
    {
        return [
            'pro_id' => 'Id',
            'pro_name' => 'Nombre',
            'pro_description' => 'Descripción',
            'pro_status' => 'Estatus',
            'pro_date' => 'Fecha',
        ];
    }

    //This function return Visible if pro_status is 1 or Oculto if it is 0
    public function getStringStatus()
    {
        $result = '';
        if ($this->pro_status == 0) {
            $result = 'Oculto';
        } else {
            $result = 'Visible';
        }
        return $result;
    }
}
