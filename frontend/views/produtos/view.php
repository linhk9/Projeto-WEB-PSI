<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Produtos $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="produtos-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_categoria',
            'nome',
            'descricao',
            'preco',
            'stock',
            'imagem:ntext',
            'marca',
            'tamanho',
            'cores',
        ],
    ]) ?>

</div>
