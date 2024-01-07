<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Produtos $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produtos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_categoria')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Categorias::find()->asArray()->all(), 'id', 'nome')) ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'preco')->textInput() ?>

    <?= $form->field($model, 'stock')->textInput() ?>

    <?= $form->field($model, 'imagem')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tamanho')->dropDownList([
            35 => '35',
            36 => '36',
            37 => '37',
            38 => '38',
            39 => '39',
            40 => '40',
            41 => '41',
            42 => '42',
            43 => '43',
        ], ['prompt' => 'Seleciona um tamanho']) ?>

    <?= $form->field($model, 'cores')->dropDownList([
            'Branco' => 'Branco',
            'Preto' => 'Preto',
            'Azul' => 'Azul',
            'Vermelho' => 'Vermelho',
            'Verde' => 'Verde',
            'Amarelo' => 'Amarelo',
            'Rosa' => 'Rosa',
            'Laranja' => 'Laranja',
        ], ['prompt' => 'Seleciona uma cor']) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
