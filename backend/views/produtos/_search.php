<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\ProdutosSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produtos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_categoria') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'descricao') ?>

    <?= $form->field($model, 'preco') ?>

    <?php // echo $form->field($model, 'stock') ?>

    <?php // echo $form->field($model, 'imagem') ?>

    <?php // echo $form->field($model, 'marca') ?>

    <?php // echo $form->field($model, 'tamanho') ?>

    <?php // echo $form->field($model, 'cores') ?>

    <div class="form-group">
        <?= Html::submitButton('procurar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
