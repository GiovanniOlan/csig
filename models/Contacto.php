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

    public function rules()
    {
        return [
            [['con_nombre', 'con_correo', 'con_telefono', 'con_mensaje', 'con_fecha', 'con_asunto'], 'required'],
            [['con_mensaje'], 'string'],
            [['con_fecha'], 'safe'],
            [['con_nombre'], 'string', 'max' => 70],
            [['con_correo'], 'string', 'max' => 75],
            ['con_correo', 'email'],
            [['con_telefono'], 'string', 'max' => 10],
            [['con_asunto'], 'string', 'max' => 50],
        ];
    }

    public function attributeLabels()
    {
        return [
            'con_id' => 'ID',
            'con_nombre' => 'Nombre',
            'con_correo' => 'Correo',
            'con_telefono' => 'Telefono',
            'con_mensaje' => 'Mensaje',
            'con_fecha' => 'Fecha',
            'con_asunto' => 'Asunto',
        ];
    }
    public function contact($email)
    {
        // if ($this->validate()) {
        // }

        $content = '<h1>Hoy' . $this->con_fecha . ' ALGUIEN QUIERE CONTACTAR</h1>';

        $content .= '<h3>Su nombre es: <b>' .  $this->con_nombre . '</b></h3>';
        $content .= '<h3>Su Correo es: <b>' .  $this->con_correo . '</b></h3>';
        $content .= '<h3>Su Número de telefono es: <b>' .  $this->con_telefono . '</b></h3>';
        $content .= '<h3>El asunto es: <b>' . $this->con_asunto . '</b></h3>';
        $content .= '<h3>El mensaje es: <b>' . $this->con_mensaje . '</b></h3>';
        Yii::$app->mailer->compose("layouts/html", ['content' => $content])
            ->setTo($email)
            ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
            ->setReplyTo([$this->con_correo => $this->con_nombre])
            ->setSubject("Alguien quiere contactarte.")
            ->send();

        return true;
        //return false;
    }
}
