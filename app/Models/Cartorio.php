<?php

namespace App\Models;

use App\DB;
use PDO;

class Cartorio
{
    private $id;
    private $nome;
    private $razao;
    private $tipo_documento;
    private $documento;
    private $cep;
    private $endereco;
    private $bairro;
    private $cidade;
    private $uf;
    private $telefone;
    private $email;
    private $tabeliao;
    private $ativo;

    /**
     * Busca cartórios *
     * Se o ID não for passado, busca todos. Caso contrário, filtra pelo ID especificado.
     * @param null $id
     * @param int $page
     * @param int $limit
     * @return array
     */
    public static function list($id = null, $page = 1, $limit = 5)
    {
        $start = $page * $limit;

        $where = '';
        if (!empty($id)) {
            $where = 'WHERE id = :id';
        }

        $sql = sprintf("SELECT id, nome, razao, tipo_documento, documento, cep, endereco, bairro, cidade, uf, telefone, email, tabeliao, ativo
            FROM cartorios %s 
            ORDER BY id DESC
            LIMIT :start, :limit", $where);
        $DB = new DB;
        $stmt = $DB->prepare($sql);

        if (!empty($where)) {
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        }

        $stmt->bindParam(':start', $start, PDO::PARAM_INT);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Busca cartórios por nome*
     * Se o ID não for passado, busca todos. Caso contrário, filtra pelo ID especificado.
     */
    public static function getByDoc($documento)
    {
        $where = 'WHERE documento = :documento';
        $sql = sprintf("SELECT id, nome, razao, tipo_documento, documento, cep, endereco, bairro, cidade, uf, telefone, email, tabeliao, ativo
            FROM cartorios %s", $where);
        $DB = new DB;
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':documento', $documento, PDO::PARAM_STR);
        $stmt->execute();

        $cartorios = $stmt->fetch(PDO::FETCH_ASSOC);

        return $cartorios;
    }

    /**
     * Salva no banco de dados um novo cartório
     * @param $cartorio
     * @return bool
     */
    public static function save($cartorio)
    {
        // insere no banco
        $DB = new DB;
        $sql = "INSERT INTO cartorios(nome, razao, tipo_documento, documento, cep, endereco, bairro, cidade, uf, telefone, email, tabeliao, ativo)
                VALUES(:nome, :razao, :tipo_documento, :documento, :cep, :endereco, :bairro, :cidade, :uf, :telefone, :email, :tabeliao, :ativo)";
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':nome', $cartorio->nome);
        $stmt->bindParam(':razao', $cartorio->razao);
        $stmt->bindParam(':tipo_documento', $cartorio->tipo_documento);
        $stmt->bindParam(':documento', $cartorio->documento);
        $stmt->bindParam(':cep', $cartorio->cep);
        $stmt->bindParam(':endereco', $cartorio->endereco);
        $stmt->bindParam(':bairro', $cartorio->bairro);
        $stmt->bindParam(':cidade', $cartorio->cidade);
        $stmt->bindParam(':uf', $cartorio->uf);
        $stmt->bindParam(':telefone', $cartorio->telefone);
        $stmt->bindParam(':email', $cartorio->email);
        $stmt->bindParam(':tabeliao', $cartorio->tabeliao);
        $stmt->bindParam(':ativo', $cartorio->ativo);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "Erro ao cadastrar";
            print_r($stmt->errorInfo());
            return false;
        }
    }


    /**
     * Altera no banco de dados um usuário
     */
    public static function update($id, $cartorio)
    {
        // insere no banco
        $DB = new DB;
        $sql = "UPDATE cartorios 
                SET nome = :nome, razao = :razao, tipo_documento = :tipo_documento, documento = :documento, cep = :cep,
                    endereco = :endereco, bairro = :bairro, cidade = :cidade, uf = :uf, telefone = :telefone, email = :email, tabeliao = :tabeliao, ativo = :ativo
                WHERE id = :id";
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':nome', $cartorio->nome);
        $stmt->bindParam(':razao', $cartorio->razao);
        $stmt->bindParam(':tipo_documento', $cartorio->tipo_documento);
        $stmt->bindParam(':documento', $cartorio->documento);
        $stmt->bindParam(':cep', $cartorio->cep);
        $stmt->bindParam(':endereco', $cartorio->endereco);
        $stmt->bindParam(':bairro', $cartorio->bairro);
        $stmt->bindParam(':cidade', $cartorio->cidade);
        $stmt->bindParam(':uf', $cartorio->uf);
        $stmt->bindParam(':telefone', $cartorio->telefone);
        $stmt->bindParam(':email', $cartorio->email);
        $stmt->bindParam(':tabeliao', $cartorio->tabeliao);
        $stmt->bindParam(':ativo', $cartorio->ativo);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "Erro ao cadastrar";
            print_r($stmt->errorInfo());
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getRazao()
    {
        return $this->razao;
    }

    /**
     * @param mixed $razao
     */
    public function setRazao($razao)
    {
        $this->razao = $razao;
    }

    /**
     * @return mixed
     */
    public function getTipoDocumento()
    {
        return $this->tipo_documento;
    }

    /**
     * @param mixed $tipo_documento
     */
    public function setTipoDocumento($tipo_documento)
    {
        $this->tipo_documento = $tipo_documento;
    }

    /**
     * @return mixed
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * @param mixed $documento
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTabeliao()
    {
        return $this->tabeliao;
    }

    /**
     * @param mixed $tabeliao
     */
    public function setTabeliao($tabeliao)
    {
        $this->tabeliao = $tabeliao;
    }

    /**
     * @return mixed
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param mixed $ativo
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }
}