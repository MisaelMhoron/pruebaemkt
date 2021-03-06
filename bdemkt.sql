-- MySQL Script generated by MySQL Workbench
-- Wed Aug 25 15:34:48 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema emkt
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema emkt
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `emkt` DEFAULT CHARACTER SET utf8 ;
USE `emkt` ;

-- -----------------------------------------------------
-- Table `emkt`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `emkt`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(200) NOT NULL,
  `apellido` VARCHAR(200) NOT NULL,
  `edad` DATE NOT NULL,
  `email` VARCHAR(200) NOT NULL,
  `habilidades` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
