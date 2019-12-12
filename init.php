<?php
// diretório base da aplicação
define('BASE_PATH', dirname(__FILE__));

// credenciais de acesso ao MySQL
define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'usuario');
define('MYSQL_PASS', 'senha');
define('MYSQL_DBNAME', 'nome_do_banco');

// configurações do PHP
date_default_timezone_set('America/Sao_Paulo');


/*

CREATE TABLE IF NOT EXISTS `cartorios` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(255) NOT NULL,
	`razao` VARCHAR(255) NOT NULL,
	`documento` VARCHAR(255) NOT NULL,
	`cep` INT(8) NOT NULL,
	`endereco` VARCHAR(255) NOT NULL,
	`bairro` VARCHAR(255) NOT NULL,
	`cidade` VARCHAR(255) NOT NULL,
	`uf` VARCHAR(2) NOT NULL,
	`telefone` INT(11),
	`email` VARCHAR(255),
	`tabeliao` VARCHAR(255),
	`ativo` BOOLEAN,
	PRIMARY KEY (`id`)
);

 */