<?php

use common\models\Produtos;
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

    <h1><?= Html::encode($this->title) ?></h1>



<?=ListView::widget([
	'dataProvider' => $dataProvider,
	'itemView' => '_form',
	//'emptyText' =>'',
	'summary' => '',
	'itemOptions' => [
		'tag' => false
	],
	'options' => [
		'tag' => 'div',
		'class' => 'row',
		'id' => false
	],
	'layout' => '{items}<nav>{pager}</nav>',
	'pager' => [
		'options' => [
			'tag' => 'ul',
			'class' => 'pagination justify-content-center',
			'id' => 'pager-container',
		],
		//First option value
		'firstPageLabel' => 'first',
		//Last option value
		'lastPageLabel' => 'last',
		//Previous option value
		'prevPageLabel' => 'previous',
		//Next option value
		'nextPageLabel' => 'next',
		//Current Active option value
		'activePageCssClass' => 'page-active',
		//Max count of allowed options
		'maxButtonCount' => 3,

		// Css for each options. Links
		'linkOptions' => ['class' => 'page-link'],
		'disabledPageCssClass' => 'disabled',

		// Customzing CSS class for navigating link
		'pageCssClass' => ['class' => 'page-item'],
		'prevPageCssClass' => 'page-back',
		'nextPageCssClass' => 'page-next',
		'firstPageCssClass' => 'page-first',
		'lastPageCssClass' => 'page-last',
		],
]); ?>

</div>
