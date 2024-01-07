<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Faturas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="faturas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_userdata')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Userdata::find()->asArray()->all(), 'id', 'primeiroNome')) ?>

    <?= $form->field($model, 'data')->widget(\yii\jui\DatePicker::classname(), [

        'language' => 'pt',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
