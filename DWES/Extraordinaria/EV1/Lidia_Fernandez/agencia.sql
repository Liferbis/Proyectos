-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.51b-community-nt-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema agencia
--

CREATE DATABASE IF NOT EXISTS agencia;
USE agencia;

--
-- Definition of table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id_cliente` int(10) unsigned NOT NULL auto_increment,
  `dni` varchar(10) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY  (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientes`
--

/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id_cliente`,`dni`,`nombre`,`password`) VALUES 
 (1,'11223344A','Pepe','4a7d1ed414474e4033ac29ccb8653d9b'),
 (2,'55667788B','María','4a7d1ed414474e4033ac29ccb8653d9b'),
 (3,'33557799C','Antonio','4a7d1ed414474e4033ac29ccb8653d9b'),
 (4,'22446688D','Laura','4a7d1ed414474e4033ac29ccb8653d9b');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;


--
-- Definition of table `reservas`
--

DROP TABLE IF EXISTS `reservas`;
CREATE TABLE `reservas` (
  `id_cliente` int(10) unsigned NOT NULL,
  `id_viaje` int(10) unsigned NOT NULL,
  `numero_personas` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id_cliente`,`id_viaje`),
  KEY `FK_reservas_viaje` (`id_viaje`),
  CONSTRAINT `FK_reservas_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  CONSTRAINT `FK_reservas_viaje` FOREIGN KEY (`id_viaje`) REFERENCES `viajes` (`id_viaje`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservas`
--

/*!40000 ALTER TABLE `reservas` DISABLE KEYS */;
INSERT INTO `reservas` (`id_cliente`,`id_viaje`,`numero_personas`) VALUES 
 (1,4,2),
 (1,7,4);
/*!40000 ALTER TABLE `reservas` ENABLE KEYS */;


--
-- Definition of table `viajes`
--

DROP TABLE IF EXISTS `viajes`;
CREATE TABLE `viajes` (
  `id_viaje` int(10) unsigned NOT NULL auto_increment,
  `nombre` varchar(45) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  PRIMARY KEY  (`id_viaje`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `viajes`
--

/*!40000 ALTER TABLE `viajes` DISABLE KEYS */;
INSERT INTO `viajes` (`id_viaje`,`nombre`,`precio`) VALUES 
 (1,'Riviera Maya','1090'),
 (2,'Cancún','1236'),
 (3,'La Habana','997'),
 (4,'Punta Cana','1030'),
 (5,'París','425'),
 (6,'Roma','510'),
 (7,'Crucero por el Mediterráneo','1670');
/*!40000 ALTER TABLE `viajes` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
