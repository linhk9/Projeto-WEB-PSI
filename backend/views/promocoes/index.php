<?php

use common\models\Promocoes;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\PromocoesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Gestão de Promocoes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="promocoes-index">

    <p>
        <?= Html::a('Criar Promocoes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_produto',
            'desconto',
            'data_inicio',
            'data_termino',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Promocoes $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
