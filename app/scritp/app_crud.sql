CREATE DATABASE app_crud;

CREATE TABLE IF NOT EXISTS `app_crud`.`customers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `cpf_cnpj` VARCHAR(14) NOT NULL,
  `birthdate` DATE NOT NULL,
  `address` VARCHAR(255) NOT NULL,
  `hood` VARCHAR(100) NOT NULL,
  `zip_code` VARCHAR(8) NOT NULL,
  `city` VARCHAR(100) NOT NULL,
  `state` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(11) NOT NULL,
  `mobile` VARCHAR(11) NOT NULL,
  `ie` VARCHAR(11) NOT NULL,
  `created` DATETIME NOT NULL,
  `modified` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci

INSERT INTO `customers` (`id`,`name`, `cpf_cnpj`, `birthdate`, `address`, 
`hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `ie`, `created`, `modified`) 
VALUES ('','Fulano de Tal', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 
'Internet', '1234568', 'Teste', 'Teste', '5555555', '55555555', '123456', 
'2016-05-24 00:00:00', '2016-05-24 00:00:00');

INSERT INTO `customers` (`id`,`name`, `cpf_cnpj`, `birthdate`, `address`, 
`hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `ie`, `created`, `modified`) 
VALUES ('','Fulano de Tal', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 
'Internet', '1234568', 'Teste', 'Teste', '5555555', '55555555', '123456', 
'2016-05-24 00:00:00', '2016-05-24 00:00:00');