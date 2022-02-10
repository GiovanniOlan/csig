<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property int $bann_id Id
 * @property string $bann_photo Foto
 * @property string $bann_url Url
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bann_photo', 'bann_url', 'bann_status'], 'required'],
            [['bann_photo'], 'string', 'max' => 150],
            [['bann_url'], 'string', 'max' => 100],
            [['bann_status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bann_id' => 'Id',
            'bann_photo' => 'Foto',
            'bann_url' => 'Url',
            'bann_status' => 'Estatus',
        ];
    }
}
