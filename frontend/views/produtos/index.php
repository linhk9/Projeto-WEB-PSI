<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var frontend\models\ProdutosSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Produtos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produtos-index">
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="album py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                    foreach ($dataProvider->models as $model) {
                ?>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="<?= $model->imagem ?>" alt="..." />
                            <div class="card-body">
                                <p class="card-text">
                                    <b><?= $model->categoria->nome ?> | <?= $model->marca ?></b>
                                    <br>
                                    <?= $model->nome ?>
                                    <br>
                                    <?php
                                        if (!empty($model->promocoes) && isset($model->promocoes[0])) {
                                            $promocao = $model->promocoes[0];
                                            $preco_promocao = round($model->preco - ($model->preco * $promocao->desconto / 100), 2);
                                            echo '<span class="text-danger"><del>' . $model->preco . '€</del></span>';
                                            echo '<span class="text-success"> ' . $preco_promocao . '€</span>';
                                        } else {
                                            echo $model->preco . '€';
                                        }
                                    ?>
                                </p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="<?= Url::to(['produtos/view', 'id' => $model->id]) ?>" class="btn btn-sm btn-outline-secondary">Mais Detalhes</a>
                                        <?php
                                        if (!empty($model->favoritos) && isset($model->favoritos[0])) {
                                            echo Html::a('<i class="bi bi-heart-fill"></i>', ['/produtos/removerfavoritos', 'id' => $model->id], ['name' => 'remove-favorites-button', 'class' => 'btn btn-sm btn-outline-secondary']);
                                        } else {
                                            echo Html::a('<i class="bi bi-heart"></i>', ['/produtos/addfavoritos', 'id' => $model->id], ['name' => 'add-favorites-button', 'class' => 'btn btn-sm btn-outline-secondary']);
                                        }
                                        ?>
                                    </div>
                                    <small class="text-body-secondary">
                                        <?php
                                            if ($model->stock > 0) {
                                                echo '<span class="text-success"> Em Stock</span>';
                                            } else {
                                                echo '<span class="text-danger">Sem Stock</span>';
                                            }
                                        ?>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>
