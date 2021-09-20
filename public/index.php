<?php

use Bramus\Router\Router;
use eftec\ValidationOne;

// Afficher les erreurs php si non activé dans php.ini
ini_set('display_errors', 'on');

// Si l'id de session n'existe pas, alors démarrer la session.
if (!session_id()) {
    session_start();
}

$rootDir = dirname(__DIR__);
require $rootDir . '/vendor/autoload.php';

$val = new ValidationOne(); // Library de validation

// Initialisation du fichier d'environement .env
$dotenv = Dotenv\Dotenv::createImmutable($rootDir);
$dotenv->load();

require $rootDir . '/config/app.php';



// Création de l'instance du Router.
$router = new Router();

// Définition de l'espace de nom par défaut pour tout les controllers.
$router->setNamespace('\App\Controllers');
$router->set404('ErrorController@show');

$router->get('/', 'HomeController@show');

$router->get('/api-github', 'ApiController@github');
$router->get('/api-google', 'ApiController@google');

$router->run();