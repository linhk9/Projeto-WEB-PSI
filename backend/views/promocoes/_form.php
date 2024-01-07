<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Promocoes $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="promocoes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_produto')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Produtos::find()->asArray()->all(), 'id', 'nome')) ?>


    <?= $form->field($model, 'desconto')->textInput() ?>

    <?= $form->field($model, 'data_inicio')->widget(\yii\jui\DatePicker::classname(), [

            'language' => 'pt',
            'dateFormat' => 'yyyy-MM-dd',
        ]) ?>

    <?= $form->field($model, 'data_termino')->widget(\yii\jui\DatePicker::classname(), [

            'language' => 'pt',
            'dateFormat' => 'yyyy-MM-dd',
        ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
