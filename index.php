<?php

// inclui o autoloader do Composer
require 'vendor/autoload.php';
// inclui o arquivo de inicialização
require 'init.php';

use Slim\App;
use App\Controllers\CartoriosController;

// instancia o Slim, habilitando os erros (útil para debug, em desenvolvimento)
$app = new App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);

// página inicial
// listagem de cartórios
$app->get('/', function () {
    $CartoriosController = new CartoriosController();
    $CartoriosController->index();
});

// Run app
$app->run();