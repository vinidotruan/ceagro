<?php
$producao = 0;
if (!$producao) {
    return [
        'database' => [
            'connection' => "mysql:host=127.0.0.1",
            'dbname' => "ceagro",
            'charset' => "utf8",
            'username' => "artur",
            'password' => "artur123",
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ],
        ],
        'rotas' => 'workspace/ceagro/back-end/'
    ];
}

return [
    'database' => [
        'connection' => "mysql:host=mysql.ceagro.com.br",
        'dbname' => "ceagro01",
        'charset' => "utf8",
        'username' => "ceagro01",
        'password' => "saopio18",
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ],
    ],
    'rotas' => 'back-end/'
];
