<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Faturas $model */

$this->title = 'Fatura: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Gestão de Faturas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="faturas-view">

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem a certeza de que queres apagar esta fatura?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <p class="mb-1">Cliente: <?= $model->userdata->primeiroNome . ' ' . $model->userdata->ultimoNome ?></p>
    <p class="mb-1">Fatura efetuada a <?= Html::encode($model->data) ?></p>
    <?php
    $precoTotal = 0;
    foreach ($model->getFaturaLinhas()->all() as $linha) {
        $precoTemp = $linha->preco * $linha->quantidade;
        $precoTotal += $precoTemp;
        $precoTemp = 0;
    }
    ?>
    <p class="mb-1">Preço Total: <?= Html::encode($precoTotal) ?> €</p>

    <div class="dropdown-divider"></div>
    <div class="list-group">
        <?php foreach ($model->getFaturaLinhas()->all() as $linha): ?>
            <div class="list-group-item d-flex align-items-center">
                <img src="<?= Html::encode($linha->produto->imagem) ?>" alt="<?= Html::encode($linha->produto->nome) ?>" style="width: 100px; height: 100px; margin-right: 10px;">
                <div>
                    <h5 class="mb-1">Produto: <?= Html::encode($linha->produto->nome) ?></h5>
                    <p class="mb-1">Quantidade: <?= Html::encode($linha->quantidade) ?></p>
                    <p class="mb-1">Preço: <?= Html::encode($linha->preco) ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
