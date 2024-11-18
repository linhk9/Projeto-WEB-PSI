<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "promocoes".
 *
 * @property int $id
 * @property int|null $desconto
 * @property string|null $data_inicio
 * @property string|null $data_termino
 *
 * @property Produtos[] $produtos
 */
class Promocoes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'promocoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['desconto'], 'integer'],
            [['data_inicio', 'data_termino'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'desconto' => 'Desconto',
            'data_inicio' => 'Data Inicio',
            'data_termino' => 'Data Termino',
        ];
    }

    /**
     * Gets query for [[Produtos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produtos::class, ['promocoes_id' => 'id']);
    }
}
