<?php

return [
    'components' => [
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'mysql:host=localhost;dbname=loja_calcado',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
];
