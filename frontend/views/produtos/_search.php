<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\ProdutosSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="produtos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'id_categoria')->dropDownList(
                \yii\helpers\ArrayHelper::map(\common\models\Categorias::find()->all(), 'id', 'nome'),
                ['prompt' => 'Seleciona uma categoria', 'class' => 'form-control']
            ) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'nome')->textInput(['class' => 'form-control']) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'preco')->textInput(['class' => 'form-control']) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'stock')->dropDownList(
                    [1 => 'Em Stock', 0 => 'Fora de Stock'], ['prompt' => 'Seleciona uma opção', 'class' => 'form-control']) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'marca')->textInput(['class' => 'form-control']) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Procurar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Redefinir', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
