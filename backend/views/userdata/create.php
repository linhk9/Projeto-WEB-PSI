<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Userdata $model */

$this->title = 'Criar Utilizador';
$this->params['breadcrumbs'][] = ['label' => 'Gestão de Utilizadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userdata-create">

    <?php $form = ActiveForm::begin(['id' => 'form-createUser', 'options' => ['class' => 'form-horizontal']]); ?>

    <div class="form-group">
        <?= $form->field($model, 'username', ['options' => ['class' => 'col-md-6']])->textInput(['autofocus' => true, 'class' => 'form-control']) ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'password', ['options' => ['class' => 'col-md-6']])->passwordInput(['class' => 'form-control']) ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'email', ['options' => ['class' => 'col-md-6']])->textInput(['class' => 'form-control']) ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'primeiroNome', ['options' => ['class' => 'col-md-6']])->textInput(['class' => 'form-control']) ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'ultimoNome', ['options' => ['class' => 'col-md-6']])->textInput(['class' => 'form-control']) ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'telemovel', ['options' => ['class' => 'col-md-6']])->textInput(['class' => 'form-control']) ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'morada', ['options' => ['class' => 'col-md-6']])->textInput(['class' => 'form-control']) ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'role', ['options' => ['class' => 'col-md-6']])->dropDownList([
            'cliente' => 'Cliente',
            'funcionario' => 'Funcionário',
            'admin' => 'Administrador',
        ], ['class' => 'form-control']) ?>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            <?= Html::submitButton('Criar Utilizador', ['class' => 'btn btn-primary', 'name' => 'createUser-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>