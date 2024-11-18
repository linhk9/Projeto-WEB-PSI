<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cursos".
 *
 * @property int $id
 * @property string $titulo
 * @property int $duracao
 * @property string $conteúdo
 *
 * @property Produtos[] $produtos
 */
class Cursos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cursos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'duracao', 'conteúdo'], 'required'],
            [['duracao'], 'integer'],
            [['conteúdo'], 'string'],
            [['titulo'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'duracao' => 'Duracao',
            'conteúdo' => 'Conteúdo',
        ];
    }

    /**
     * Gets query for [[Produtos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produtos::class, ['cursos_id' => 'id']);
    }
}
