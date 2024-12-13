<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Userdata $model */

$this->title = $model->primeiroNome . " " . $model->ultimoNome;
$this->params['breadcrumbs'][] = ['label' => 'Gestão de Utilizadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="userdata-view">

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem a certeza de que queres apagar este utilizador?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
//            'id_user',
            'primeiroNome',
            'ultimoNome',
            'telemovel',
            'morada',
            [
                'label' => 'Role',
                'value' => function($model) {
                    if (\Yii::$app->user->can('cliente')) {
                        return 'Cliente';
                    }

                    if (\Yii::$app->user->can('funcionario')) {
                        return 'Funcionário';
                    }

                    if (\Yii::$app->user->can('admin')) {
                        return 'Administrador';
                    }

                    return 'Desconhecido';
                }
            ],
        ],
    ]) ?>

</div>