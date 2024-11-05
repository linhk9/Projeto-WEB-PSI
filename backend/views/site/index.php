<?php
$this->title = 'Back-Office';
$this->params['breadcrumbs'] = [['label' => $this->title]];
?>
<div class="container-fluid">

    <div class="row">
        <div class="col-md-4 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Utilizadores',
                'number' => $utilizadores,
                'icon' => 'far fa-user',
            ]) ?>
        </div>
    </div>


</div>