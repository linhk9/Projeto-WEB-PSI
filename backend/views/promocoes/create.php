<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Promocoes $model */

$this->title = 'Create Promocoes';
$this->params['breadcrumbs'][] = ['label' => 'Gestão de Promocoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="promocoes-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
