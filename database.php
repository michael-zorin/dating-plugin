<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$connectionOptions = [
    'driver'    => 'mysql',
    'host'      => DB_HOST,
    'database'  => DB_NAME,
    'username'  => DB_USER,
    'password'  => DB_PASSWORD,
    'charset'   => DB_CHARSET,
    'collation' => DB_COLLATE,
    'prefix'    => DB_TABLE_PREFIX,
];

$capsule->addConnection($connectionOptions);
$capsule->setAsGlobal();
$capsule->bootEloquent();