<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Avaliacoes $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="avaliacoes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_userdata')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Userdata::find()->asArray()->all(), 'id', 'primeiroNome')) ?>

    <?= $form->field($model, 'id_produto')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Produtos::find()->asArray()->all(), 'id', 'nome')) ?>

    <?= $form->field($model, 'nota')->dropDownList([1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5'], ['prompt' => 'Selecione a avaliação']) ?>

    <?= $form->field($model, 'comentario')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
