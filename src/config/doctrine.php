<?php
use Doctrine\ORM\Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: [__DIR__ . '/src'],
    isDevMode: true
);

$conn = [
    'driver' => 'pdo_sqlite',
    'host' => 'localhost',
    'db' => 'baza',
    'user' => 'root',
    'password' => '',
];

$entityManager = EntityManager::create($conn, $config);
