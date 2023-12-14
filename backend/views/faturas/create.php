<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Faturas $model */

$this->title = 'Criar Fatura';
$this->params['breadcrumbs'][] = ['label' => 'Gestão de Faturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faturas-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
