<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Registo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <p>Por favor preencha os seguintes campos para fazer login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'primeiroNome') ?>
            <?= $form->field($model, 'ultimoNome') ?>
            <?= $form->field($model, 'telemovel') ?>
            <?= $form->field($model, 'morada') ?>

            <div class="form-group">
                <?= Html::submitButton('Registar', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
