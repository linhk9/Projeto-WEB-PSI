<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Produtos $model */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="produtos-view">

    <div class="row">
        <div class="col-lg-6">
            <img class="card-img-top" src="<?= $model->imagem ?>" alt="Card image cap" style="max-width: 100%; max-height: 400px;">
        </div>
        <div class="col-lg-6">
            <h5 class="card-title"><?= $model->nome ?></h5>
            <p class="card-text"><?= $model->descricao ?></p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Marca: <?= $model->marca ?></li>
                <li class="list-group-item">Tamanho: <?= $model->tamanho ?></li>
                <li class="list-group-item">Cores: <?= $model->cores ?></li>
                <?php
                if ($model->stock > 0) {
                    echo '<li class="list-group-item text-success">Em Stock</li>';
                } else {
                    echo '<li class="list-group-item text-danger">Sem Stock</li>';
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-body">
                <h5>
                    <?php
                        $precoFinal = 0;
                        if (!empty($model->promocoes) && isset($model->promocoes[0])) {
                            $promocao = $model->promocoes[0];
                            $preco_promocao = $model->preco - ($model->preco * $promocao->desconto / 100);
                            $precoProduto = round($preco_promocao, 2);
                            echo '<span class="text-danger"><del>' . $model->preco . '€</del></span>';
                            echo '<span class="text-success"> ' . $precoProduto . '€</span>';
                        } else {
                            $precoProduto = $model->preco;
                            echo $model->preco . '€';
                        }
                    ?>
                </h5>
                <?php
                    if ($model->stock > 0) {
                        echo Html::a('Adicionar ao Carrinho', ['carrinho/adicionar', 'id' => $model->id, 'precoProduto' => $precoProduto], ['name' => 'add-carrinho', 'class' => 'btn btn-primary']);
                    } else {
                        echo Html::tag('button', 'Adicionar ao Carrinho', ['name' => 'add-carrinho', 'class' => 'btn btn-primary', 'disabled' => true]);
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="dropdown-divider"></div>
    <div class="row">
        <div class="col-lg-12">
            <h3>Deixe sua avaliação</h3>
            <?php $form = ActiveForm::begin([
                'action' => Url::to(['produtos/enviaravaliacao', 'idProduto' => $model->id]),
                'method' => 'post',
            ]); ?>

            <?= $form->field($avaliacaoModel, 'nota')->dropDownList([1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5'], ['prompt' => 'Selecione a avaliação']) ?>

            <?= $form->field($avaliacaoModel, 'comentario')->textarea(['rows' => 6]) ?>

            <div class="form-group">
                <?= Html::submitButton('Enviar Avaliação', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
