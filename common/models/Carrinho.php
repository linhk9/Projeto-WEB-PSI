<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "carrinho".
 *
 * @property int $id
 * @property int $id_userdata
 * @property string|null $data
 * @property float|null $total
 *
 * @property CarrinhoLinhas[] $carrinhoLinhas
 */
class Carrinho extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carrinho';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_userdata'], 'required'],
            [['id', 'id_userdata'], 'integer'],
            [['data'], 'safe'],
            [['total'], 'number'],
            [['id_userdata'], 'unique'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_userdata' => 'Id Userdata',
            'data' => 'Data',
            'total' => 'Total',
        ];
    }

    /**
     * Gets query for [[CarrinhoLinhas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarrinhoLinhas()
    {
        return $this->hasMany(CarrinhoLinhas::class, ['carrinho_id' => 'id']);
    }
}
