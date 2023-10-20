<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
$this->params['breadcrumbs'] = [['label' => $this->title]];
?>
<div class="error-page">
    <div class="error-content" style="margin-left: auto;">
        <h3><i class="fas fa-exclamation-triangle text-danger"></i> <?= Html::encode($name) ?></h3>

        <p>
            <?= nl2br(Html::encode($message)) ?>
        </p>

        <p>
            O erro acima ocorreu enquanto o servidor Web processava sua solicitação.
            Entre em contato conosco se achar que isso é um erro do servidor. Obrigado.
            Enquanto isso, podes <?= Html::a('retornar ao painel', Yii::$app->homeUrl); ?>.
        </p>
    </div>
</div>

