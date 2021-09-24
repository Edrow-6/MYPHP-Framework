<?php

declare(strict_types=1);

//namespace App\Utils;

use eftec\bladeone\BladeOne;
use eftec\PdoOne;
use eftec\ValidationOne;

$blade = null;
$pdo = null;
$validation = null;

// Rendu des vues/pages avec le système Blade
function render($template, $params = []): void
{
    global $blade;
    if ($blade === null) {
        $views = __DIR__ . '/../../views';
        $cache = __DIR__ . '/../../storage/cache';

        $blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);
        $blade->addAssetDict([
            'tailwindcss' => '../assets/css/compiled.min.css',
            'fontawesomepro' => '../assets/css/all.min.css',
            'favicon' => '../assets/images/favicon-32x32.png',
            'logo' => '../assets/images/logo.png',
        ]);
    }

    switch (isset($_SESSION['type_compte'])) {
        case 'admin':
            $blade->setAuth($_SESSION['id'], 'admin');
            break;
        case 'gestion':
            $blade->setAuth($_SESSION['id'], 'gestion');
            break;
        case 'client':
            $blade->setAuth($_SESSION['id'], 'client');
            break;
    }

    echo $blade->run($template, $params);
}

// Initialisation de la base de données avec PDO
function database(): eftec\PdoOne
{
    require __DIR__ . '/../../config/app.php';

    global $pdo;
    if ($pdo === null) {
        $pdo = new PdoOne("mysql", $config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);
        $pdo->logLevel = 4; // Utile pour debug et permet de trouver les problèmes en rapport avec les requêtes MySQL. 1 = prod | 4 = dev
        $pdo->open();
    }

    return $pdo;
}

function validation(): eftec\ValidationOne
{
    global $validation;
    if ($validation === null) {
        $validation = new ValidationOne();
    }
    return $validation;
}

function debug($type, $message): void
{
    if ($_ENV['APP_DEBUG']) {
        switch ($type) {
            case 'error':
                $type = 'red';
                break;
            case 'debug':
                $type = 'indigo';
                break;
            case 'info':
                $type = 'blue';
                break;
            case 'notice':
                $type = 'green';
                break;
            case 'warning':
                $type = 'yellow';
                break;
        }

        echo <<<EOF
            <div class="fixed inset-x-0 bottom-0 z-50">
            <div class="bg-{$type}
            <div class="px-3 py-3 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center justify-between">
            <div class="flex items-center flex-1 w-0">
            <span class="flex p-2 rounded-lg bg-{$type}
            <i class="text-white fad fa-debug"></i>
            </span>
            <p class="ml-3 font-medium text-white truncate">
            <span class="md:hidden">
            We announced a new product!
            </span>
            <span class="hidden md:inline">
        EOF;
        var_dump($message);
        echo <<<EOF
            </span></p></div>
            <div class="flex-shrink-0 order-3 w-full mt-2 sm:order-2 sm:mt-0 sm:w-auto">
            <form method="POST" class="mb-0">
            <input type="hidden" name="pastebin">
            <button type="submit" id="pastebin" class="flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-{$type}white hover:bg-indigo-50">
            </button>
            </form>
            </div>
            <div class="flex-shrink-0 order-2 sm:order-3 sm:ml-3">
            <button type="button" class="-mr-1 flex p-2 rounded-md hover:bg-{$type}us:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
            <span class="sr-only">Dismiss</span>
            <i class="text-white fal fa-times"></i>
            </button>
            </div></div></div></div></div>
        EOF;
    }
}