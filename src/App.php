<?php
namespace src;

use Doctrine\ORM\EntityManager;

class App {
    public function __construct(EntityManager $entityManager) {
        echo "<h1>Aplikacja zainicjowana</h1>";

        try {
            $result = $entityManager->getConnection()->executeQuery('SELECT 1')->fetchOne();
            $connected = $result === '1' || $result === 1;
        } catch (\Throwable $e) {
            $connected = false;
        }

        echo '<p>Połączenie z bazą danych: ' . ($connected ? 'udane' : 'nieudane') . '</p>';
    }
}
?>