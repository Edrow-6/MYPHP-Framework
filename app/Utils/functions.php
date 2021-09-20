<?php

declare(strict_types=1);

//namespace App\Utils;

use eftec\bladeone\BladeOne;
use eftec\PdoOne;

// Rendu avec le système blade indépendants
function render($template, $params = []): void
{
    $rootDir = dirname(__DIR__);
    $views = $rootDir . '/../views';
    $cache = $rootDir . '/../storage/cache';
    $blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);
    $blade->addAssetDict([
        'tailwindcss' => 'assets/css/compiled.min.css',
        'fontawesomepro' => 'assets/css/all.min.css',
        'favicon' => 'assets/images/favicon-32x32.png',
    ]);

    echo $blade->run($template, $params);
}

// Initialisation de la base de données avec PDO
function initDatabase()
{
    require dirname(__DIR__) . '/../config/app.php';

    try {
        $conn = new PdoOne("mysql", $config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);
        $conn->logLevel = 4; // Utile pour debug et permet de trouver les problèmes en rapport avec les requêtes MySQL. 1 = prod | 4 = dev
        $conn->open();
    } catch (RuntimeException $e) {
        echo 'Erreur de connexion à la base de données.';
    }

    return $conn;
}