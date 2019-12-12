<?php namespace App\Controllers;

use \App\Models\Cartorio;
use \App\View;

class CartoriosController
{
    /** * Listagem de cartórios */
    public function index()
    {
        $cartorios = Cartorio::selectAll();
        View::make('cartorios.index', ['cartorios' => $cartorios,
        ]);
    }


    /**
     * Exibe o formulário de criação de usuário
     */
    public function create()
    {
        \App\View::make('users.create');
    }


    /**
     * Processa o formulário de criação de usuário
     */
    public function store()
    {
        // pega os dados do formuário
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
        $birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : null;

        if (Cartorio::save($name, $email, $gender, $birthdate)) {
            header('Location: /');
            exit;
        }
    }


    /**
     * Exibe o formulário de edição de usuário
     */
    public function edit($id)
    {
        $user = Cartorio::selectAll($id)[0];

        \App\View::make('users.edit', [
            'user' => $user,
        ]);
    }


    /**
     * Processa o formulário de edição de usuário
     */
    public function update()
    {
        // pega os dados do formuário
        $id = $_POST['id'];
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
        $birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : null;

        if (Cartorio::update($id, $name, $email, $gender, $birthdate)) {
            header('Location: /');
            exit;
        }
    }


    /**
     * Remove um usuário
     */
    public function remove($id)
    {
        if (Cartorio::remove($id)) {
            header('Location: /');
            exit;
        }
    }
}