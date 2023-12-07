<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Promocoes $model */

$this->title = 'Atualizar Promocoes: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gestão de Promocoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="promocoes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
