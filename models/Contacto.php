<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacto".
 *
 * @property int $con_id ID
 * @property string $con_nombre Nombre
 * @property string $con_correo Correo
 * @property string $con_telefono Telefono
 * @property string $con_mensaje Mensaje
 * @property string $con_fecha Fecha
 */
class Contacto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['con_nombre', 'con_correo', 'con_telefono', 'con_mensaje', 'con_fecha'], 'required'],
            [['con_mensaje'], 'string'],
            [['con_fecha'], 'safe'],
            [['con_nombre'], 'string', 'max' => 70],
            [['con_correo'], 'string', 'max' => 75],
            [['con_telefono'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'con_id' => 'ID',
            'con_nombre' => 'Nombre',
            'con_correo' => 'Correo',
            'con_telefono' => 'Telefono',
            'con_mensaje' => 'Mensaje',
            'con_fecha' => 'Fecha',
        ];
    }
}
