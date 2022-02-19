<?php

namespace app\models;

use Yii;
use yii\bootstrap4\Html;
use yii\helpers\ArrayHelper;

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

    public function getImagen()
    {
        $imgns = ProductoImagen::find()->where(['proimg_fkproducto' => $this->pro_id])->all();
        $ret = '';
        foreach ($imgns as $im) {
            $ret .= $im->getImagen();
        }
        return $ret;
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
    public static function mapNombre()
    { //esta la uso en la vista _form.php de REACCION
        return ArrayHelper::map(Self::find()->all(), 'pro_id', 'pro_name');
    }

    public static function getSpecificProduct($id)
    { //esta la uso en la vista _form.php de REACCION
        return Self::find()->where(['pro_id' => $id])->one();
    }
}
