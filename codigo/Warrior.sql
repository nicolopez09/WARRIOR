create database warrior;
use warrior;

CREATE TABLE IF NOT EXISTS `Warrior`.`Usuario` (
  `id_Usuario` INT NOT NULL AUTO_INCREMENT,
  `Nombre_Usuario` VARCHAR(45) NOT NULL,
  `Descripción` VARCHAR(255) NULL,
  `Foto_Perfil` BLOB NULL,
  `Tipo_Usuario` INT NOT NULL,
  PRIMARY KEY (`id_Usuario`),
  INDEX `Tipo_Usuario_idx` (`Tipo_Usuario` ASC) VISIBLE,
  CONSTRAINT `Tipo_Usuario`
    FOREIGN KEY (`Tipo_Usuario`)
    REFERENCES `Warrior`.`Tipos De Usuario` (`id_TiposDeUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Warrior`.`Tipos De Usuario` (
  `id_TiposDeUsuario` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_TiposDeUsuario`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Warrior`.`Peleas` (
  `id_Peleas` INT NOT NULL AUTO_INCREMENT,
  `Ganadas` INT NOT NULL,
  `Perdidas` INT NOT NULL,
  `Empatadas` INT NOT NULL,
  `Sin Resultado` INT NOT NULL,
  PRIMARY KEY (`id_Peleas`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Warrior`.`Competidor` (
  `id_Competidor` INT NOT NULL AUTO_INCREMENT,
  `id_Usuario` INT NOT NULL,
  `Descripción_Competidor` VARCHAR(255) NULL,
  `Foto_Competidor` BLOB NULL,
  `Total_Peleas` INT NOT NULL,
  PRIMARY KEY (`id_Competidor`),
  INDEX `Total_Peleas_idx` (`Total_Peleas` ASC) VISIBLE,
  INDEX `id_Usuario_idx` (`id_Usuario` ASC) VISIBLE,
  CONSTRAINT `Total_Peleas`
    FOREIGN KEY (`Total_Peleas`)
    REFERENCES `Warrior`.`Peleas` (`id_Peleas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_Usuario`
    FOREIGN KEY (`id_Usuario`)
    REFERENCES `Warrior`.`Usuario` (`id_Usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `Warrior`.`Producto` (
  `id_Producto` INT NOT NULL AUTO_INCREMENT,
  `Nombre_Producto` VARCHAR(45) NOT NULL,
  `Tipo_Producto` VARCHAR(45) NOT NULL,
  `Precio` DECIMAL NOT NULL,
  `Foto_Producto` BLOB NOT NULL,
  PRIMARY KEY (`id_Producto`))
ENGINE = InnoDB;