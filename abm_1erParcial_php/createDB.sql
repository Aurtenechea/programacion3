CREATE DATABASE ej_abm_parcial;

USE ej_abm_parcial;

CREATE TABLE IF NOT EXISTS `persona` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `dni` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO `persona` (`id`, `nombre`, `apellido`, `dni`) VALUES
(4, 'Rogelio', 'Agua', '333333'),
(5, 'Bañera', 'Giratoria', '222222'),
(6, 'Julieta', 'Roberto', '888888'),
(7, 'Tomas', 'Crucero', '777777'),
(8, 'Alfredo', 'Mercurio', '999999'),
(9, 'Jaime', 'Marrón', '555555'),
(10, 'Esteban', 'Trabajos', '111111'),
(12, 'Miguel', 'Zorro', '444444');

ALTER TABLE `persona`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `persona`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;



--
-- Procedimientos
--
--seteo el delimitador.
DELIMITER $$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarPersona`(IN `pnombre` VARCHAR(50), IN `papellido` VARCHAR(50), IN `pdni` VARCHAR(50))
    NO SQL
INSERT INTO persona (nombre,apellido,dni)
VALUES
(pnombre,papellido,pdni)$$

--
CREATE DEFINER=`root`@`localhost` PROCEDURE `BorrarPersona`(IN `idp` INT(18))
    NO SQL
delete from persona	WHERE id=idp$$
--
--
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `ModificarPersona`(IN `pid` INT, IN `pnombre` VARCHAR(50), IN `papellido` VARCHAR(50), IN `pfoto` VARCHAR(50))
--     NO SQL
-- update persona
-- 				set nombre=pnombre,
-- 				apellido=papellido,
-- 				foto=pfoto
-- 				WHERE id=pid$$
--

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerTodasLasPersonas`()
    NO SQL
select * from persona$$
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerUnaPersona`(IN `idp` INT(18))
    NO SQL
select * from persona where id =idp$$

DELIMITER ;



--listar todos mis procedures.
SELECT * FROM mysql.proc WHERE definer = 'root@localhost';
