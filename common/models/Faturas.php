<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "faturas".
 *
 * @property int $id
 * @property string|null $data
 * @property int $userdata_id
 * @property float|null $total
 *
 * @property FaturaLinhas[] $faturaLinhas
 * @property Userdata $userdata
 */
class Faturas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'faturas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'userdata_id'], 'required'],
            [['id', 'userdata_id'], 'integer'],
            [['data'], 'safe'],
            [['total'], 'number'],
            [['id'], 'unique'],
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
            'data' => 'Data',
            'userdata_id' => 'Userdata ID',
            'total' => 'Total',
        ];
    }

    /**
     * Gets query for [[FaturaLinhas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFaturaLinhas()
    {
        return $this->hasMany(FaturaLinhas::class, ['faturas_id' => 'id']);
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
