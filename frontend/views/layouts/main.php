<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<!-- <header>
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-light fixed-top py-3 d-block',
            'data' => [
                'data-navbar-on-scroll' => 'data-navbar-on-scroll',
            ],
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Produtos', 'url' => ['/site/produtos']],
        ['label' => 'Histórico de Compras', 'url' => ['/site/historico']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Registar', 'url' => ['/site/signup']];
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
        'items' => $menuItems,
    ]);
    if (Yii::$app->user->isGuest) {
        echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-link login text-decoration-none'], 'style' => 'color: white;']),['class' => ['d-flex']]);
    } else {
        echo Html::a('Carrinho',['/site/carrinho'],['class' => ['btn btn-link login text-decoration-none'], 'style' => 'color: white;']);
        echo Html::a('Perfil',['/site/perfil'],['class' => ['btn btn-link login text-decoration-none'], 'style' => 'color: white;']);
        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout text-decoration-none']
            )
            . Html::endForm();
    }
    NavBar::end();
    ?>
</header> -->
<header class="mb-7">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand d-inline-flex"><span class="text-1000 fs-0 fw-bold ms-2"><?= Yii::$app->name ?></span></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item px-2"><?= Html::a('Home', ['/site/index'], ['class' => ['nav-link fw-medium']]); ?></li>
                    <li class="nav-item px-2"><?= Html::a('Produtos', ['/site/produtos'], ['class' => ['nav-link fw-medium']]); ?></li>
                    <li class="nav-item px-2"><?= Html::a('Histórico de Compras', ['/site/historico'], ['class' => ['nav-link fw-medium']]); ?></li>                    
                    <?php 
                        if (Yii::$app->user->isGuest) {
                            echo '<li class="nav-item px-2">' . Html::a('Registar', ['/site/signup'], ['class' => ['nav-link fw-medium']]) . '</li>';
                        }
                    ?>
                </ul>
                <!-- <form class="d-flex">
                    <a class="text-1000" href="#!">
                        <svg class="feather feather-shopping-cart me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                    </a>
                    <a class="text-1000" href="#!">
                        <svg class="feather feather-user me-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </a>
                </form> -->
                <?php
                    if (Yii::$app->user->isGuest) {
                        echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
                    } else {
                        echo Html::a('Carrinho',['/site/carrinho'],['class' => ['btn btn-link login text-decoration-none']]);
                        echo Html::a('Perfil (' . Yii::$app->user->identity->username . ')',['/site/perfil'],['class' => ['btn btn-link login text-decoration-none']]);
                        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
                            . Html::submitButton(
                                'Logout',
                                ['class' => 'btn btn-link logout text-decoration-none']
                            )
                            . Html::endForm();
                    }
                ?>
            </div>
        </div>
    </nav>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>


<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-start"></p>
        <p class="float-end">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
