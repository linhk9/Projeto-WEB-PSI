<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var frontend\models\FaturaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Faturas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faturas-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="list-group">
        <?php foreach ($dataProvider->getModels() as $model):
            $precoTotal = 0;
            ?>
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="mb-1">Fatura Nº <?= Html::encode($model->id) ?></h5>
                    <p class="mb-1">Fatura efetuada a <?= Html::encode($model->data) ?></p>
                    <?php
                    foreach ($model->getFaturaLinhas()->all() as $linha) {
                        $precoTemp = $linha->preco * $linha->quantidade;
                        $precoTotal += $precoTemp;
                        $precoTemp = 0;
                    }
                    ?>
                    <p class="mb-1">Preço Total: <?= Html::encode($precoTotal) ?> €</p>
                </div>
                <a href="<?= Url::to(['fatura/view', 'id' => $model->id]) ?>" class="btn btn-sm btn-outline-secondary">Ver Detalhes</a>
            </div>
        <?php endforeach; ?>
    </div>


</div>
