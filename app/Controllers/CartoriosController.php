<?php namespace App\Controllers;

use App\Models\Cartorio;
use App\View;
use Exception;
use Slim\Http\UploadedFile;

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
     * Exibe o formulário de importação de xml
     */
    public function import()
    {
        View::make('cartorios.import');
    }

    /**
     * Exibe o formulário de criação de usuário
     */
    public function storeXML($directory, $uploadedFiles)
    {
        // handle single input with single file upload
        $uploadedFile = $uploadedFiles['xml'];
        if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
            $filename = $this->moveUploadedFile($directory, $uploadedFile);
        }
        View::make('cartorios.import');
    }

    /**
     * Exibe o formulário de criação de usuário
     */
    public function create()
    {
        View::make('cartorios.create');
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
        $cartorios = Cartorio::selectAll($id)[0];

        View::make('cartorios.edit', [
            'cartorios' => $cartorios,
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
     * Moves the uploaded file to the upload directory and assigns it a unique name
     * to avoid overwriting an existing uploaded file.
     *
     * @param string $directory directory to which the file is moved
     * @param UploadedFile $uploadedFile file uploaded file to move
     * @return string filename of moved file
     * @throws Exception
     */
    function moveUploadedFile($directory, UploadedFile $uploadedFile)
    {
        $extension = pathinfo($uploadedFile->getClientFilename(), PATHINFO_EXTENSION);
        $basename = bin2hex(random_bytes(8)); // see http://php.net/manual/en/function.random-bytes.php
        $filename = sprintf('%s.%0.8s', $basename, $extension);

        $uploadedFile->moveTo($directory . DIRECTORY_SEPARATOR . $filename);
        $filePath = $directory . DIRECTORY_SEPARATOR . $filename;

        $xmlImport = $this->xmlDataStore($filePath);

        if ($xmlImport) {
            header('Location: /');
            exit;
        } else {
            return false;
        }
    }

    function xmlDataStore($filePath)
    {
        $affectedRow = 0;
        $xml = simplexml_load_file($filePath) or die("Error: Cannot create object");

        foreach ($xml->children() as $row) {
            $cartorio = Cartorio::getByDoc($row->documento);
            if (empty($cartorio)) {
                $result = Cartorio::save($row);
            } else {
                $result = Cartorio::update($cartorio['id'], $row);
            }

            if (!empty($result)) {
                $affectedRow++;
            } else {
                $error_message = mysqli_error($conn) . "\n";
            }
        }

        if ($affectedRow > 0) {
            return true;
        } else {
            return false;
        }
    }

}