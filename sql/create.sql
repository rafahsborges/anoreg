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
	`telefone` VARCHAR(255),
	`email` VARCHAR(255),
	`tabeliao` VARCHAR(255),
	`ativo` BOOLEAN,
	PRIMARY KEY (`id`)
);