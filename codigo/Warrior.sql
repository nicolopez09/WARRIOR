-- MySQL Script generated by MySQL Workbench
-- Sat Jun 11 19:46:12 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

-- -----------------------------------------------------
-- Schema Warrior
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Warrior`;
USE `Warrior` ;

-- -----------------------------------------------------
-- Table `Warrior`.`Tipos De Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Warrior`.`Tipos De Usuario` (
  `id_TiposDeUsuario` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_TiposDeUsuario`));


-- -----------------------------------------------------
-- Table `Warrior`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Warrior`.`Usuario` (
  `id_Usuario` INT NOT NULL AUTO_INCREMENT,
  `Nombre_Usuario` VARCHAR(45) NOT NULL,
  `Descripción` VARCHAR(255) NULL,
  `Foto_Perfil` BLOB NULL,
  `Tipo_Usuario` INT NOT NULL,
  PRIMARY KEY (`id_Usuario`),
  INDEX `Tipo_Usuario_idx` (`Tipo_Usuario` ASC),
  CONSTRAINT `Tipo_Usuario`
    FOREIGN KEY (`Tipo_Usuario`)
    REFERENCES `Warrior`.`Tipos De Usuario` (`id_TiposDeUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `Warrior`.`Producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Warrior`.`Producto` (
  `id_Producto` INT NOT NULL AUTO_INCREMENT,
  `Nombre_Producto` VARCHAR(45) NOT NULL,
  `Tipo_Producto` VARCHAR(45) NOT NULL,
  `Precio` DECIMAL NOT NULL,
  `Foto_Producto` BLOB NOT NULL,
  PRIMARY KEY (`id_Producto`));


-- -----------------------------------------------------
-- Table `Warrior`.`Peleas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Warrior`.`Peleas` (
  `id_Peleas` INT NOT NULL AUTO_INCREMENT,
  `Ganadas` INT NOT NULL,
  `Perdidas` INT NOT NULL,
  `Empatadas` INT NOT NULL,
  `Sin Resultado` INT NOT NULL,
  PRIMARY KEY (`id_Peleas`));


-- -----------------------------------------------------
-- Table `Warrior`.`Competidor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Warrior`.`Competidor` (
  `id_Competidor` INT NOT NULL AUTO_INCREMENT,
  `id_Usuario` INT NOT NULL,
  `Descripción_Competidor` VARCHAR(255) NULL,
  `Foto_Competidor` BLOB NULL,
  `Total_Peleas` INT NOT NULL,
  PRIMARY KEY (`id_Competidor`),
  INDEX `Total_Peleas_idx` (`Total_Peleas` ASC),
  INDEX `id_Usuario_idx` (`id_Usuario` ASC),
  CONSTRAINT `Total_Peleas`
    FOREIGN KEY (`Total_Peleas`)
    REFERENCES `Warrior`.`Peleas` (`id_Peleas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_Usuario`
    FOREIGN KEY (`id_Usuario`)
    REFERENCES `Warrior`.`Usuario` (`id_Usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
