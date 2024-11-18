<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "produtos".
 *
 * @property int $id
 * @property int|null $id_categoria
 * @property string|null $nome
 * @property string|null $descricao
 * @property float|null $preco
 * @property string|null $imagem
 * @property int $favoritos_id
 * @property int $promocoes_id
 * @property int $cursos_id
 *
 * @property CarrinhoLinhas[] $carrinhoLinhas
 * @property Categorias $categoria
 * @property Cursos $cursos
 * @property FaturaLinhas[] $faturaLinhas
 * @property Favoritos $favoritos
 * @property Promocoes $promocoes
 */
class Produtos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_categoria', 'favoritos_id', 'promocoes_id', 'cursos_id'], 'integer'],
            [['preco'], 'number'],
            [['imagem'], 'string'],
            [['favoritos_id', 'promocoes_id', 'cursos_id'], 'required'],
            [['nome'], 'string', 'max' => 45],
            [['descricao'], 'string', 'max' => 255],
            [['id_categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categorias::class, 'targetAttribute' => ['id_categoria' => 'id']],
            [['cursos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cursos::class, 'targetAttribute' => ['cursos_id' => 'id']],
            [['favoritos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Favoritos::class, 'targetAttribute' => ['favoritos_id' => 'id']],
            [['promocoes_id'], 'exist', 'skipOnError' => true, 'targetClass' => Promocoes::class, 'targetAttribute' => ['promocoes_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_categoria' => 'Id Categoria',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'preco' => 'Preco',
            'imagem' => 'Imagem',
            'favoritos_id' => 'Favoritos ID',
            'promocoes_id' => 'Promocoes ID',
            'cursos_id' => 'Cursos ID',
        ];
    }

    /**
     * Gets query for [[CarrinhoLinhas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarrinhoLinhas()
    {
        return $this->hasMany(CarrinhoLinhas::class, ['produtos_id' => 'id']);
    }

    /**
     * Gets query for [[Categoria]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategoria()
    {
        return $this->hasOne(Categorias::class, ['id' => 'id_categoria']);
    }

    /**
     * Gets query for [[Cursos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCursos()
    {
        return $this->hasOne(Cursos::class, ['id' => 'cursos_id']);
    }

    /**
     * Gets query for [[FaturaLinhas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFaturaLinhas()
    {
        return $this->hasMany(FaturaLinhas::class, ['produtos_id' => 'id']);
    }

    /**
     * Gets query for [[Favoritos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFavoritos()
    {
        return $this->hasOne(Favoritos::class, ['id' => 'favoritos_id']);
    }

    /**
     * Gets query for [[Promocoes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPromocoes()
    {
        return $this->hasOne(Promocoes::class, ['id' => 'promocoes_id']);
    }
}
