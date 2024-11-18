<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "avaliacoes".
 *
 * @property int $id
 * @property int|null $nota
 * @property string|null $comentario
 * @property int $userdata_id
 * @property int $fatura_linhas_id
 *
 * @property FaturaLinhas $faturaLinhas
 * @property Userdata $userdata
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
            [['id', 'userdata_id', 'fatura_linhas_id'], 'required'],
            [['id', 'nota', 'userdata_id', 'fatura_linhas_id'], 'integer'],
            [['comentario'], 'string'],
            [['id'], 'unique'],
            [['fatura_linhas_id'], 'exist', 'skipOnError' => true, 'targetClass' => FaturaLinhas::class, 'targetAttribute' => ['fatura_linhas_id' => 'id']],
            [['userdata_id'], 'exist', 'skipOnError' => true, 'targetClass' => Userdata::class, 'targetAttribute' => ['userdata_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nota' => 'Nota',
            'comentario' => 'Comentario',
            'userdata_id' => 'Userdata ID',
            'fatura_linhas_id' => 'Fatura Linhas ID',
        ];
    }

    /**
     * Gets query for [[FaturaLinhas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFaturaLinhas()
    {
        return $this->hasOne(FaturaLinhas::class, ['id' => 'fatura_linhas_id']);
    }

    /**
     * Gets query for [[Userdata]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserdata()
    {
        return $this->hasOne(Userdata::class, ['id' => 'userdata_id']);
    }
}
