<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Promocoes;

/**
 * PromocoesSearch represents the model behind the search form of `common\models\Promocoes`.
 */
class PromocoesSearch extends Promocoes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_produto', 'desconto'], 'integer'],
            [['data_inicio', 'data_termino'], 'safe'],
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
    public function search($params)
    {
        $query = Promocoes::find();

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
            'id' => $this->id,
            'id_produto' => $this->id_produto,
            'desconto' => $this->desconto,
            'data_inicio' => $this->data_inicio,
            'data_termino' => $this->data_termino,
        ]);

        return $dataProvider;
    }
}
