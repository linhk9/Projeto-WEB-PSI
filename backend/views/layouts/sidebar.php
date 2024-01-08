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
                    ['label' => 'Gerir Faturas', 'url' => ['faturas/index'], 'icon' => 'file-invoice'],
                    ['label' => 'Gerir Produtos', 'url' => ['produtos/index'], 'icon' => 'box'],
                    ['label' => 'Gerir Categorias', 'url' => ['categorias/index'], 'icon' => 'list'],
                    ['label' => 'Gerir Promoções', 'url' => ['promocoes/index'], 'icon' => 'tag'],
                    ['label' => 'Gerir Avaliações', 'url' => ['avaliacoes/index'], 'icon' => 'archive'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>