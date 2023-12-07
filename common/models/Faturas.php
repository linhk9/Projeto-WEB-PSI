<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "faturas".
 *
 * @property int $id
 * @property int|null $id_userdata
 * @property string|null $data
 * @property int|null $status
 *
 * @property FaturaLinhas[] $faturaLinhas
 * @property User $userdata
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
            [['id_userdata', 'status'], 'integer'],
            [['data'], 'safe'],
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
            'data' => 'Data',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[FaturaLinhas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFaturaLinhas()
    {
        return $this->hasMany(FaturaLinhas::class, ['id_fatura' => 'id']);
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
