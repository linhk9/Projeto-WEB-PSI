<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php echo Html::a(
        'Loja de Calçado',
        Yii::$app->homeUrl,
        ['class' => 'brand-link text-center']
    ) ?>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    ['label' => 'Gerir Utilizadores', 'url' => ['userdata/index'], 'icon' => 'user'],
                    ['label' => 'Gerir Produtos', 'url' => ['site/index'], 'icon' => 'box'],
                    ['label' => 'Gerir Categorias', 'url' => ['site/index'], 'icon' => 'list'],
                    ['label' => 'Gerir Promoções', 'url' => ['site/index'], 'icon' => 'percentage'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>