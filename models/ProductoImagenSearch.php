<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ProductoImagen;

/**
 * ProductoImagenSearch represents the model behind the search form of `app\models\ProductoImagen`.
 */
class ProductoImagenSearch extends ProductoImagen
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['proimg_id', 'proimg_fkproducto'], 'integer'],
            [['proimg_url'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params, $query)
    {
        //$query = ProductoImagen::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'proimg_id' => $this->proimg_id,
            'proimg_fkproducto' => $this->proimg_fkproducto,
        ]);

        $query->andFilterWhere(['like', 'proimg_url', $this->proimg_url]);

        return $dataProvider;
    }
}
