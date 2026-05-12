<?php
require 'vendor/autoload.php';
$entityManager = require __DIR__ . '/src/config/doctrine.php';

use src\App;

$myapp = new App($entityManager);
?>


 <!-- Zrób osobno klasę i całość załaduj przez autoloader. Poczytaj proszę o composer -->

<link rel="stylesheet" href="style.css?v=1">