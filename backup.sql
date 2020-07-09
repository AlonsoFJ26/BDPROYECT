-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.5.23 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para test

drop database proyecto;

CREATE DATABASE IF NOT EXISTS `proyecto` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `proyecto`;


-- Volcando estructura para tabla test.alumnos
CREATE TABLE IF NOT EXISTS `convoca` (
  `Codigo_onvocatoria` varchar(6) NOT NULL ,
  `Fecha_Convocatoria` varchar(10) NOT NULL DEFAULT '0',
  `Descripcion_Proceso` varchar(250) NOT NULL DEFAULT '0',
  `Objeto_Contractual` varchar(20) NOT NULL DEFAULT '0',
  `Proceso` varchar(250) NOT NULL DEFAULT '0',
  `Tipo_Proceso` varchar(250) NOT NULL DEFAULT '0',
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `convoca` (`Codigo_Convocatoria`, `Fecha_Convocatoria`, `Descripcion_Proceso`,'Objeto_Contractual','Proceso','Tipo_Proceso') 
VALUES ('','','','','','')
------------------------------------------------------
------------------------------------------------------
CREATE TABLE IF NOT EXISTS `entidad` (
  `RucEntidad` varchar(5) NOT NULL ,
  `Entidad` varchar(80) NOT NULL DEFAULT '0',
  `EntidadDepartamento` varchar(20) NOT NULL DEFAULT '0',
  `EntidadProvincia` varchar(20) NOT NULL DEFAULT '0',
  `EntidadDistrito` varchar(20) NOT NULL DEFAULT '0',
  `TipoEntidad` varchar(30) NOT NULL DEFAULT '0',
  `Sector` varchar(30) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `entidad` (`RucEntidad`, `Entidad`, `EntidadDepartamento`,'EntidadProvincia','EntidadDistrito','TipoEntidad','Sector') 
VALUES ('','','','','','','')
---------------------------------------
-------------------------------------
CREATE TABLE IF NOT EXISTS `items` (
  `Num_Item` varchar(10) NOT NULL ,
  `Item_Medida` varchar(50) NOT NULL DEFAULT '0',
  `Item_Departamento` varchar(50) NOT NULL DEFAULT '0',
  `Item_Provincia` varchar(50) NOT NULL DEFAULT '0',
  `Item_Distrito` varchar(50) NOT NULL DEFAULT '0',
  `Estado_Item` varchar(50) NOT NULL DEFAULT '0',
  `Ultimo` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO 'items'('Num_Item','Item_Medida','Item_Departamento','Item_Provincia','Item_Distrito','Estado_Item','Ultimo')
VALUES('','','','','','','')
-----------------------------------------
----------------------------------------
CREATE TABLE IF NOT EXISTS `main` (
  `Codigo_Entidad` varchar(10) NOT NULL ,
  `Ruc_Entidad` varchar(5) NOT NULL DEFAULT '0',
  `Codigo_Convocatoria` varchar(5) NOT NULL DEFAULT '0',
  `Numero_Item` varchar(10) NOT NULL DEFAULT '0',
  `Ruc_Proveedor` varchar(10) NOT NULL DEFAULT '0',
  `Moneda` varchar(7) NOT NULL DEFAULT '0',
  `Url` varchar(200) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO 'main'('Codigo_Entidad','Ruc_Entidad','Codigo_Convocatoria','Numero_Item','Ruc_Proveedor','Moneda','Url')
VALUES('','','','','','','')
-----------------------------------------
-------------------------------------------
CREATE TABLE IF NOT EXISTS `proveedores` (
  `Ruc_Proveedor` varchar(10) NOT NULL ,
  `Tipo_Proveedor` varchar(20) NOT NULL DEFAULT '0',
  `Proveedor` varchar(150) NOT NULL DEFAULT '0',
  `Rubros` varchar(150) NOT NULL DEFAULT '0',
  `Monto` varchar(20) NOT NULL DEFAULT '0',
  `Causal` varchar(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO 'proveedores'('Ruc_Proveedor','Tipo_Proveedor','Proveedor','Rubros','Monto','Causal')
VALUES ('','','','','','')