<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\CarrinhoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Carrinho de Compras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carrinho-index">

    <?php
        $carrinho = $dataProvider->getModels();
        if (!empty($carrinho)) {
            $carrinhoLinhas = $carrinho[0]->getCarrinhoLinhas()->all();
        } else {
            $carrinhoLinhas = [];
        }

        if (empty($carrinhoLinhas)) {
            echo "<h1 style='text-align: center;'>O teu carrinho está vazio.</h1>";
        } else {
    ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome do Produto</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $totalPrice = 0;
            foreach ($carrinhoLinhas as $index => $linha):
                $totalPrice += $linha->quantidade * $linha->preco;
                ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= Html::encode($linha->produto->nome) ?></td>
                    <td>
                        <?php $form = ActiveForm::begin([
                            'action' => Url::to(['carrinho/atualizarqtd', 'id' => $linha->id]),
                            'method' => 'post',
                        ]); ?>

                        <div style="display: inline-block;">
                            <?= $form->field($linha, 'quantidade', [
                                'options' => ['style' => 'width: 130px; display: inline-block; margin-right: 10px;']
                            ])->label(false)->input('number', ['min' => 1, 'max' => $linha->produto->stock]) ?>

                            <?= Html::submitButton('Atualizar', [
                                'class' => 'btn btn-primary',
                                'style' => 'width: 80px; height: 30px; padding: 0; display: inline-block;'
                            ]) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </td>
                    <td><?= Html::encode($linha->preco) ?></td>
                    <td>
                        <?= Html::a('Remover', ['delete', 'id' => $linha->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'method' => 'post',
                            ],
                        ]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <h3>Preço Total: <?= $totalPrice ?>€</h3>
        <?= Html::a('Finalizar Compra', ['carrinho/checkout'], ['class' => 'btn btn-success']) ?>
    <?php
        }
    ?>
</div>