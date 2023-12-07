<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Promocoes $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="promocoes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_produto')->textInput() ?>

    <?= $form->field($model, 'desconto')->textInput() ?>

    <?= $form->field($model, 'data_inicio')->textInput() ?>

    <?= $form->field($model, 'data_termino')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
