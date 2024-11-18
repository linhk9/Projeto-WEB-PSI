<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "fatura_linhas".
 *
 * @property int $id
 * @property int|null $quantidade
 * @property float|null $preco
 * @property int $produtos_id
 * @property int $faturas_id
 *
 * @property Avaliacoes[] $avaliacoes
 * @property Faturas $faturas
 * @property Produtos $produtos
 */
class FaturaLinhas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fatura_linhas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'produtos_id', 'faturas_id'], 'required'],
            [['id', 'quantidade', 'produtos_id', 'faturas_id'], 'integer'],
            [['preco'], 'number'],
            [['id'], 'unique'],
            [['faturas_id'], 'exist', 'skipOnError' => true, 'targetClass' => Faturas::class, 'targetAttribute' => ['faturas_id' => 'id']],
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
            'faturas_id' => 'Faturas ID',
        ];
    }

    /**
     * Gets query for [[Avaliacoes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAvaliacoes()
    {
        return $this->hasMany(Avaliacoes::class, ['fatura_linhas_id' => 'id']);
    }

    /**
     * Gets query for [[Faturas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFaturas()
    {
        return $this->hasOne(Faturas::class, ['id' => 'faturas_id']);
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
