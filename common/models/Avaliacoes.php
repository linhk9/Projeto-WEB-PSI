<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "avaliacoes".
 *
 * @property int $id
 * @property int|null $id_userdata
 * @property int|null $id_produto
 * @property int|null $nota
 * @property string|null $comentario
 *
 * @property Produtos $produto
 * @property User $userdata
 */
class Avaliacoes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'avaliacoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_userdata', 'id_produto', 'nota'], 'integer'],
            [['comentario'], 'string'],
            [['id_produto'], 'exist', 'skipOnError' => true, 'targetClass' => Produtos::class, 'targetAttribute' => ['id_produto' => 'id']],
            [['id_userdata'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_userdata' => 'id']],
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
            'id_produto' => 'Id Produto',
            'nota' => 'Nota',
            'comentario' => 'Comentario',
        ];
    }

    /**
     * Gets query for [[Produto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduto()
    {
        return $this->hasOne(Produtos::class, ['id' => 'id_produto']);
    }

    /**
     * Gets query for [[Userdata]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserdata()
    {
        return $this->hasOne(User::class, ['id' => 'id_userdata']);
    }
}
