<?php

namespace frontend\models;

use common\models\Userdata;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Faturas;

/**
 * FaturaSearch represents the model behind the search form of `common\models\Faturas`.
 */
class FaturaSearch extends Faturas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_userdata'], 'integer'],
            [['data'], 'safe'],
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
        $userData = Userdata::findOne(['id_user' => \Yii::$app->user->identity->id]);
        $query = Faturas::find()->where(['id_userdata' => $userData->id]);

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
            'id_userdata' => $this->id_userdata,
            'data' => $this->data,
        ]);

        return $dataProvider;
    }
}
