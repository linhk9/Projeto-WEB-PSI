<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "carrinho_linhas".
 *
 * @property int $id
 * @property int|null $quantidade
 * @property float|null $preco
 * @property int $produtos_id
 * @property int $carrinho_id
 *
 * @property Carrinho $carrinho
 * @property Produtos $produtos
 */
class CarrinhoLinhas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carrinho_linhas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'produtos_id', 'carrinho_id'], 'required'],
            [['id', 'quantidade', 'produtos_id', 'carrinho_id'], 'integer'],
            [['preco'], 'number'],
            [['id'], 'unique'],
            [['carrinho_id'], 'exist', 'skipOnError' => true, 'targetClass' => Carrinho::class, 'targetAttribute' => ['carrinho_id' => 'id']],
            [['produtos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Produtos::class, 'targetAttribute' => ['produtos_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'quantidade' => 'Quantidade',
            'preco' => 'Preco',
            'produtos_id' => 'Produtos ID',
            'carrinho_id' => 'Carrinho ID',
        ];
    }

    /**
     * Gets query for [[Carrinho]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarrinho()
    {
        return $this->hasOne(Carrinho::class, ['id' => 'carrinho_id']);
    }

    /**
     * Gets query for [[Produtos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasOne(Produtos::class, ['id' => 'produtos_id']);
    }
}
