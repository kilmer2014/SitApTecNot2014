SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `SitApren` ;
CREATE SCHEMA IF NOT EXISTS `SitApren` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `SitApren` ;

-- -----------------------------------------------------
-- Table `SitApren`.`Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SitApren`.`Usuario` ;

CREATE  TABLE IF NOT EXISTS `SitApren`.`Usuario` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `Login` VARCHAR(20) NOT NULL ,
  `Senha` VARCHAR(20) NOT NULL ,
  `Email` VARCHAR(100) NOT NULL ,
  `Nome` VARCHAR(25) NULL ,
  `SobreNome` VARCHAR(35) NULL ,
  `Foto` BLOB NULL ,
  `Status` VARCHAR(200) NULL ,
  `Sexo` TINYINT NULL ,
  `Relacionamento` TINYINT NULL ,
  `SeAtivo` TINYINT NULL ,
  PRIMARY KEY (`ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SitApren`.`Categoria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SitApren`.`Categoria` ;

CREATE  TABLE IF NOT EXISTS `SitApren`.`Categoria` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `NomeCategoria` VARCHAR(20) NOT NULL ,
  `DescCategoria` VARCHAR(200) NULL ,
  PRIMARY KEY (`ID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SitApren`.`Publicacao`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SitApren`.`Publicacao` ;

CREATE  TABLE IF NOT EXISTS `SitApren`.`Publicacao` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `Titulo` VARCHAR(50) NOT NULL ,
  `Conteudo` VARCHAR(500) NOT NULL ,
  `TipoPublicacao` TINYINT NOT NULL ,
  `TipoPrivacidade` TINYINT NOT NULL ,
  `SeFixo` TINYINT NOT NULL ,
  `DataCriacao` DATETIME NOT NULL ,
  `DataUltimaEdicao` DATETIME NULL ,
  `UsuarioID` INT(11) NOT NULL ,
  `CategoriaID` INT(11) NOT NULL ,
  PRIMARY KEY (`ID`) ,
  INDEX `fk_publicacao_usuario_usuarioid` (`UsuarioID` ASC) ,
  INDEX `fk_publicacao_categoria_categoriaid` (`CategoriaID` ASC) ,
  CONSTRAINT `fk_publicacao_usuario_usuarioid`
    FOREIGN KEY (`UsuarioID` )
    REFERENCES `SitApren`.`Usuario` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_publicacao_categoria_categoriaid`
    FOREIGN KEY (`CategoriaID` )
    REFERENCES `SitApren`.`Categoria` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SitApren`.`Localizacao`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SitApren`.`Localizacao` ;

CREATE  TABLE IF NOT EXISTS `SitApren`.`Localizacao` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `Latitude` DOUBLE NOT NULL ,
  `Longitude` DOUBLE NOT NULL ,
  `Data` DATETIME NOT NULL ,
  `UsuarioID` INT(11) NOT NULL ,
  PRIMARY KEY (`ID`) ,
  INDEX `fk_localizacao_usuario_usuarioid` (`UsuarioID` ASC) ,
  CONSTRAINT `fk_localizacao_usuario_usuarioid`
    FOREIGN KEY (`UsuarioID` )
    REFERENCES `SitApren`.`Usuario` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SitApren`.`PublicacaoLike`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SitApren`.`PublicacaoLike` ;

CREATE  TABLE IF NOT EXISTS `SitApren`.`PublicacaoLike` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `SePositivo` TINYINT NOT NULL ,
  `UsuarioID` INT(11) NOT NULL ,
  `PublicacaoID` INT(11) NOT NULL ,
  PRIMARY KEY (`ID`) ,
  INDEX `fk_publicacaolike_publicacao_publicacaoid2` (`PublicacaoID` ASC) ,
  INDEX `fk_publicacao_usuario_usuarioid2` (`UsuarioID` ASC) ,
  CONSTRAINT `fk_publicacaolike_publicacao_publicacaoid2`
    FOREIGN KEY (`PublicacaoID` )
    REFERENCES `SitApren`.`Publicacao` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_publicacao_usuario_usuarioid2`
    FOREIGN KEY (`UsuarioID` )
    REFERENCES `SitApren`.`Usuario` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SitApren`.`PublicacaoComentario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SitApren`.`PublicacaoComentario` ;

CREATE  TABLE IF NOT EXISTS `SitApren`.`PublicacaoComentario` (
  `ID` INT NOT NULL AUTO_INCREMENT ,
  `Comentario` VARCHAR(200) NOT NULL ,
  `DataCriacao` DATETIME NOT NULL ,
  `DataUltimaEdicao` DATETIME NOT NULL ,
  `PublicacaoID` INT(11) NOT NULL ,
  `UsuarioID` INT(11) NOT NULL ,
  PRIMARY KEY (`ID`) ,
  INDEX `fk_publicacaocomentario_publicacao_publicacaoid` (`PublicacaoID` ASC) ,
  INDEX `fk_publicacaocomentario_usuario_usuarioid` (`UsuarioID` ASC) ,
  CONSTRAINT `fk_publicacaocomentario_publicacao_publicacaoid`
    FOREIGN KEY (`PublicacaoID` )
    REFERENCES `SitApren`.`Publicacao` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_publicacaocomentario_usuario_usuarioid`
    FOREIGN KEY (`UsuarioID` )
    REFERENCES `SitApren`.`Usuario` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `SitApren`.`Amigo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `SitApren`.`Amigo` ;

CREATE  TABLE IF NOT EXISTS `SitApren`.`Amigo` (
  `ID` INT NOT NULL ,
  `UsuarioID` INT(11) NOT NULL ,
  `UsuarioAmigoID` INT(11) NOT NULL AUTO_INCREMENT ,
  PRIMARY KEY (`ID`) ,
  INDEX `fk_amigo_usuario_usuarioid` (`UsuarioID` ASC) ,
  INDEX `fk_amigo_usuario_usuarioamigoid` (`UsuarioAmigoID` ASC) ,
  CONSTRAINT `fk_amigo_usuario_usuarioid`
    FOREIGN KEY (`UsuarioID` )
    REFERENCES `SitApren`.`Usuario` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_amigo_usuario_usuarioamigoid`
    FOREIGN KEY (`UsuarioAmigoID` )
    REFERENCES `SitApren`.`Usuario` (`ID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
