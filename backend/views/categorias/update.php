<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Categorias $model */

$this->title = 'Atualizar Categoria: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gestão de Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="categorias-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
