<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Loja de Cursos';
?>
<div class="site-index">
    <div class="p-5 mb-4 bg-transparent rounded-3">
        <div class="container-fluid py-5 text-center">
            <div class="container-fluid py-5 text-center">
                <h1 class="display-4">Bem vindos a Loja de Cursos</h1>
                <p class="fs-5 fw-light">Nesta loja poderás comprar todo o tipo de Cursos!</p>
        </div>
    </div>

    <div class="album">
        <div class="container">
            <?php
            if (!empty($favoritos)) {
                ?>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php
                    foreach ($favoritos as $favorito) {
                        ?>
                        <div class="col">
                            <div class="card">
                                <img class="card-img-top" src="<?= $favorito->produto->imagem ?>" alt="..." />
                                <div class="card-body">
                                    <p class="card-text">
                                        <b><?= $favorito->produto->categoria->nome ?> | <?= $favorito->produto->marca ?></b>
                                        <br>
                                        <?= $favorito->produto->nome ?>
                                        <br>
                                        <?php
                                        if (!empty($favorito->produto->promocoes) && isset($favorito->produto->promocoes[0])) {
                                            $promocao = $favorito->produto->promocoes[0];
                                            $preco_promocao = round($favorito->produto->preco - ($favorito->produto->preco * $promocao->desconto / 100), 2);
                                            echo '<span class="text-danger"><del>' . $favorito->produto->preco . '€</del></span>';
                                            echo '<span class="text-success"> ' . $preco_promocao . '€</span>';
                                        } else {
                                            echo $favorito->produto->preco . '€';
                                        }
                                        ?>
                                    </p>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="<?= Url::to(['produtos/view', 'id' => $favorito->produto->id]) ?>" class="btn btn-sm btn-outline-secondary">Mais Detalhes</a>
                                            <?php
                                            if (!empty($favorito->produto->favoritos) && isset($favorito->produto->favoritos[0])) {
                                                echo Html::a('<i class="bi bi-heart-fill"></i>', ['/produtos/removerfavoritos', 'id' => $favorito->produto->id], ['class' => 'btn btn-sm btn-outline-secondary']);
                                            } else {
                                                echo Html::a('<i class="bi bi-heart"></i>', ['/produtos/addfavoritos', 'id' => $favorito->produto->id], ['class' => 'btn btn-sm btn-outline-secondary']);
                                            }
                                            ?>
                                        </div>
                                        <small class="text-body-secondary">
                                            <?php
                                            if ($favorito->produto->stock > 0) {
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
                <?php
            } else {
                if (!Yii::$app->user->isGuest) {
                    echo '
                            <div class="p-5 mb-4 bg-transparent rounded-3">
                                <div class="container-fluid py-5 text-center">
                                    <p class="fs-5 fw-light">Não tens nenhum curso adicionado aos favoritos!</p>
                                </div>
                            </div>
                        ';
                }
            }
            ?>
        </div>
    </div>
</div>
