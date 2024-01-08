<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Avaliacoes $model */

$this->title = 'Atualizar Avaliacao: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Avaliacoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="avaliacoes-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
