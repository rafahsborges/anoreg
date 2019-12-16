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

// adição de cartório
// exibe o formulário de cadastro
$app->get('/adicionar', function ()
{
    $CartoriosController = new CartoriosController();
    $CartoriosController->create();
});

// processa o formulário de cadastro
$app->post('/adicionar', function ()
{
    $CartoriosController = new CartoriosController();
    $CartoriosController->store();
});


// edição de cartório
// exibe o formulário de edição
$app->get('/editar/{id}', function ($request)
{
    // pega o ID da URL
    $id = $request->getAttribute('id');

    $CartoriosController = new CartoriosController();
    $CartoriosController->edit($id);
});

// processa o formulário de edição
$app->post('/editar', function ()
{
    $CartoriosController = new CartoriosController();
    $CartoriosController->update();
});

// importação de xml
// exibe o formulário de importação
$app->get('/importar', function ()
{
    $CartoriosController = new CartoriosController();
    $CartoriosController->import();
});

// processa o formulário de importação
$app->post('/importar', function(Request $request)
{
    $directory = $this->get('upload_directory');
    $uploadedFiles = $request->getUploadedFiles();
    $CartoriosController = new CartoriosController();
    $CartoriosController->storeXML($directory, $uploadedFiles);
});

// listagem de emails
$app->get('/emails', function ()
{
    $CartoriosController = new CartoriosController();
    $CartoriosController->emails();
});

// processa o formulário de edição
$app->post('/emails', function ()
{
    $CartoriosController = new CartoriosController();
    $CartoriosController->sendEmails();
});

// Run app
$app->run();