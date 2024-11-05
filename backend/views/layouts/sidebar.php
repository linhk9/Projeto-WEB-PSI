<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?=$assetDir?>/img/hat_icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">BO Loja de Cursos</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrador</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    ['label' => 'Menu', 'header' => true],
                    ['label' => 'Dashboard', 'icon' => 'tachometer-alt', 'url' => ['site/index']],
                    ['label' => 'Usuários', 'icon' => 'users', 'url' => ['user/index']],
                    ['label' => 'Produtos', 'icon' => 'book', 'url' => ['curso/index']],
                    ['label' => 'Categorias', 'icon' => 'list', 'url' => ['categoria/index']],
                    ['label' => 'Promoções', 'icon' => 'tags', 'url' => ['promocao/index']],
                    ['label' => 'Avaliações', 'icon' => 'star', 'url' => ['avaliacao/index']],
                    ['label' => 'Faturas', 'icon' => 'file-invoice-dollar', 'url' => ['fatura/index']],
                    ['label' => 'Configurações', 'icon' => 'cogs', 'url' => ['configuracao/index']],

                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>