<?php

// inclui o autoloader do Composer
require 'vendor/autoload.php';
// inclui o arquivo de inicialização
require 'init.php';

use Slim\App;
use Slim\Http\Request;

use App\Controllers\CartoriosController;

// instancia o Slim, habilitando os erros (útil para debug, em desenvolvimento)
$app = new App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);

$container = $app->getContainer();
$container['upload_directory'] = __DIR__ . '/uploads';

// página inicial
// listagem de cartórios
$app->get('/', function ()
{
    $CartoriosController = new CartoriosController();
    $CartoriosController->index();
});

// importação de xml
// exibe o formulário de importação
$app->get('/importar', function ()
{
    $CartoriosController = new CartoriosController();
    $CartoriosController->import();
});

$app->post('/importar', function(Request $request)
{
    $directory = $this->get('upload_directory');
    $uploadedFiles = $request->getUploadedFiles();
    $CartoriosController = new CartoriosController();
    $CartoriosController->storeXML($directory, $uploadedFiles);
});

// Run app
$app->run();