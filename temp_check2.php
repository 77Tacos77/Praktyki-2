<?php
require 'vendor/autoload.php';
$r = new ReflectionClass(Doctrine\DBAL\Connection::class);
foreach ($r->getMethods(ReflectionMethod::IS_PUBLIC) as $m) {
    echo $m->getName() . PHP_EOL;
}
