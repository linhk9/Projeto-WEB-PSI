<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link text-center">
        <span class="brand-text font-weight-light">Loja de Calçado</span>
    </a>

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
                    ['label' => 'Gerir Avaliações', 'url' => ['site/index'], 'icon' => 'file'],
                    ['label' => 'Gerir Promoções', 'url' => ['site/index'], 'icon' => 'percentage'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>