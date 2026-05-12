<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: [__DIR__ . '/../'],
    isDevMode: true
);

$conn = [
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'dbname' => 'praktyka',
    'user' => 'root',
    'password' => '',
];

$connection = DriverManager::getConnection($conn, $config);
$entityManager = new EntityManager($connection, $config);

return $entityManager;
