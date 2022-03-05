<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "banner".
 *
 * @property int $bann_id Id
 * @property string $bann_photo Foto
 * @property string $bann_url Url
 */
class Banner extends \yii\db\ActiveRecord
{

    public $img;

    public static function tableName()
    {
        return 'banner';
    }


    public function rules()
    {
        return [
            [['bann_photo', 'bann_url', 'bann_status'], 'required'],
            [['img'], 'required', 'except' => 'update'],
            [['bann_photo'], 'string', 'max' => 150],
            [['bann_url'], 'string', 'max' => 100],
            [['bann_status'], 'integer'],
            //[['img'], 'safe'],
            //[['img'], 'file', 'extensions'   => 'jpg, png'],

        ];
    }


    public function attributeLabels()
    {
        return [
            'bann_id' => 'Id',
            'bann_photo' => 'Foto',
            'bann_url' => 'Url',
            'bann_status' => 'Estatus',
            'img'           => 'Imagen',
        ];
    }

    //This function return url's image
    public function getUrl()
    {
        return "/images/" . (empty($this->bann_photo) ? 'banners/sin-foto.png' : "banners/{$this->bann_photo}");
    }

    public function getImagen()
    {
        return Html::img($this->getUrl(), ['width' => '30%', 'height' => '30%']);
    }

    public static function getallBannersVisible()
    {
        return Self::find()->where(['bann_status' => 1])->all();
    }
}
