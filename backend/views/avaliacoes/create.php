<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Avaliacoes $model */

$this->title = 'Criar Avaliacoes';
$this->params['breadcrumbs'][] = ['label' => 'Avaliacoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="avaliacoes-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
