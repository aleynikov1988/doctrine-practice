<?php
require_once 'vendor/autoload.php';

$config = \Doctrine\ORM\ORMSetup::createAnnotationMetadataConfiguration(
    [
        __DIR__ . '/src',
    ],
    true
);
$conn = [
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
];
$em = \Doctrine\ORM\EntityManager::create($conn, $config);
