<?php

namespace app\models;

use Yii;
use yii\helpers\Html;
use app\widgets\Alert;

class ProductoImagen extends \yii\db\ActiveRecord
{

    public $img;

    public static function tableName()
    {
        return 'producto_imagen';
    }


    public function rules()
    {
        return [
            [['proimg_url', 'proimg_fkproducto', 'img'], 'required'],
            [['proimg_id', 'proimg_fkproducto'], 'integer'],
            [['proimg_url'], 'string', 'max' => 255],
            [['proimg_fkproducto'], 'exist', 'skipOnError' => true, 'targetClass' => Producto::className(), 'targetAttribute' => ['proimg_fkproducto' => 'pro_id']],
            [['img'], 'file', 'maxFiles' => 10],
            //[['img'], 'safe'],
            //[['img'], 'file', 'minFile' => 1],
            //[['img'], 'file', 'extensions'   => 'jpg, png'],
            //[['img'], 'file', 'maxSize'      => '500000'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'proimg_id' => 'Id',
            'proimg_url' => 'Imagen',
            'proimg_fkproducto' => 'Producto',
            'img'           => 'Imagen',
        ];
    }


    public function getProimgFkproducto()
    {
        return $this->hasOne(Producto::className(), ['pro_id' => 'proimg_fkproducto']);
    }

    //This function return url's image
    public function getUrl()
    {
        return "/images/" . (empty($this->proimg_url) ? 'productos/sin-foto.png' : "productos/{$this->proimg_url}");
    }

    public function getImagen()
    {
        return Html::img($this->getUrl(), ['width' => '30%', 'height' => '30%']);
    }

    //This function return all specific images's product if you know its id 
    public static function getAllImagesProductos($id)
    {
        return self::find()->where(['proimg_fkproducto' => $id])->all();
    }

    public static function getUrls($imagesProducts = [])
    {
        $urles = [];
        foreach ($imagesProducts as $im) {
            $urles[] = $im->getUrl();
        }
        return $urles;
    }
    //This function delete all images of the server and database of a product in specific if you know the id's product
    public static function deleteImagesAutomaticOfAProduct($id)
    {
        $products = self::getAllImagesProductos($id);

        foreach ($products as $pro) {
            if (!unlink(Yii::$app->basePath . "/web/images/productos/" . $pro->proimg_url)) {
                echo Alert::widget([
                    'options' => [
                        'class' => 'alert-info',
                    ],
                    'body' => 'No se pudo eliminar la imagen en el servidor con el id: ' . $pro->proimg_id,
                ]);
            } else {
                if (!$pro->delete()) {
                    echo Alert::widget([
                        'options' => [
                            'class' => 'alert-info',
                        ],
                        'body' => 'No se pudó eliminar la imagen en la base de datos con el id: ' . $pro->proimg_id,
                    ]);
                }
            }
        }
    }
}
