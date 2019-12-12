<?php

namespace App\Models;

use App\DB;
use PDO;

class Cartorio
{
    /**
     * Busca cartórios *
     * Se o ID não for passado, busca todos. Caso contrário, filtra pelo ID especificado.
     */
    public static function selectAll($id = null)
    {
        $where = '';
        if (!empty($id)) {
            $where = 'WHERE id = :id';
        }
        $sql = sprintf("SELECT id, nome, razao, tipo_documento, documento, cep, endereco, bairro, cidade, uf, telefone, email, tabeliao, ativo
            FROM cartorios %s 
            ORDER BY nome ASC", $where);
        $DB = new DB;
        $stmt = $DB->prepare($sql);

        if (!empty($where)) {
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        }

        $stmt->execute();

        $cartorios = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $cartorios;
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
}