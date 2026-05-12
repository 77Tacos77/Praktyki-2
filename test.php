<?php

require_once __DIR__ . '/vendor/autoload.php';

$entityManager = require __DIR__ . '/src/doctrine.php';

use src\Models\User;

$user = new User("Jan", "jan@test.pl", "password123");

$entityManager->persist($user);
$entityManager->flush();

echo "User zapisany!";