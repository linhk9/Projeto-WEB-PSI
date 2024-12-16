<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\PerfilForm $model */
/** @var \frontend\models\PerfilForm $userData */
/** @var \frontend\models\PerfilForm $user */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Perfil: ' . Yii::$app->user->identity->username;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-perfil">
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-perfil']); ?>

            <?= $form->field($model, 'username')->textInput(['readonly' => true, 'value' => $user->username ]) ?>
            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'email')->textInput(['value' => $user->email ]) ?>
            <?= $form->field($model, 'primeiroNome')->textInput(['value' => $userData ? $userData->primeiroNome : '' ]) ?>
            <?= $form->field($model, 'ultimoNome')->textInput(['value' => $userData ? $userData->ultimoNome : '' ]) ?>
            <?= $form->field($model, 'telemovel')->textInput(['value' => $userData ? $userData->telemovel : '' ]) ?>
            <?= $form->field($model, 'morada')->textInput(['value' => $userData ? $userData->morada : '' ]) ?>

            <div class="form-group">
                <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary', 'name' => 'perfil-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>