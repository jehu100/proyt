-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-11-2020 a las 00:51:23
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdmit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignarbus`
--

CREATE TABLE `asignarbus` (
  `idAsignacion` int(11) NOT NULL,
  `idConductor` int(11) NOT NULL,
  `idAyudante` int(11) NOT NULL,
  `idBus` int(11) NOT NULL,
  `fechaAsignacion` date NOT NULL,
  `Estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignarbus`
--

INSERT INTO `asignarbus` (`idAsignacion`, `idConductor`, `idAyudante`, `idBus`, `fechaAsignacion`, `Estado`) VALUES
(1, 18, 1, 4, '2020-09-18', 1),
(4, 18, 1, 2, '2020-09-18', 1),
(5, 24, 8, 4, '2020-09-26', 1),
(6, 31, 10, 6, '2020-09-26', 1),
(7, 20, 5, 4, '2020-11-05', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignarviaje`
--

CREATE TABLE `asignarviaje` (
  `idViajes` int(11) NOT NULL,
  `idAsignacion` int(11) NOT NULL,
  `IdDestinoPartida` int(11) NOT NULL,
  `idDestinoLlegada` int(11) NOT NULL,
  `idHora` int(11) NOT NULL,
  `fechaasign` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignarviaje`
--

INSERT INTO `asignarviaje` (`idViajes`, `idAsignacion`, `IdDestinoPartida`, `idDestinoLlegada`, `idHora`, `fechaasign`, `estado`) VALUES
(12, 1, 1, 2, 2, '2020-10-01', 1),
(13, 1, 1, 2, 2, '2020-10-01', 1),
(14, 4, 1, 1, 2, '2020-10-01', 1),
(16, 4, 1, 1, 2, '2020-10-01', 1),
(17, 4, 1, 1, 2, '2020-10-01', 1),
(19, 5, 1, 1, 1, '2020-10-01', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ayudante`
--

CREATE TABLE `ayudante` (
  `idAyudante` int(11) NOT NULL,
  `Aci` varchar(8) NOT NULL,
  `idlugar` int(11) NOT NULL,
  `Anombre` varchar(20) NOT NULL,
  `Aape_pater` varchar(20) NOT NULL,
  `Aape_mater` varchar(50) NOT NULL,
  `Aedad` int(20) NOT NULL,
  `Adireccion` varchar(50) NOT NULL,
  `Acelular` int(8) NOT NULL,
  `idSangre` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `Estado` int(11) NOT NULL DEFAULT '1',
  `AAsignado` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ayudante`
--

INSERT INTO `ayudante` (`idAyudante`, `Aci`, `idlugar`, `Anombre`, `Aape_pater`, `Aape_mater`, `Aedad`, `Adireccion`, `Acelular`, `idSangre`, `fecha`, `Estado`, `AAsignado`) VALUES
(1, '7409898', 2, 'Waldo', 'Mamani', 'Gomez', 34, 'Bolivar y potosi 2', 72325670, 1, '2020-09-16', 1, 1),
(5, '7409898', 1, 'Fercho', 'Mamani', 'Gomez', 49, 'Oblitas y Bolivar', 78787999, 1, '2020-09-16', 1, 0),
(7, '7865789', 2, 'CAPITAN', 'UNO', 'HOLA', 28, 'OBLITAS Y CAMPERO 4|', 78787899, 1, '2020-09-18', 1, 0),
(8, '7343590', 2, 'HUGO', 'GOMEZ', 'GALARZA ', 45, 'OBLITAS Y CAMPERO 4', 76768989, 1, '2020-09-18', 1, 0),
(9, '10101010', 1, 'CAPITAN', 'DOS', 'QUE TAL', 45, 'OBLITAS Y CAMPERO 4', 78787999, 1, '2020-09-18', 1, 0),
(10, '2020202', 1, 'RENOBADO', 'TURBO', 'CAPOS', 45, 'OBLITAS Y CAMPERO 4', 78787999, 1, '2020-09-18', 1, 0),
(11, '7878678', 2, 'FERCHO', 'MAMANI', 'GOMEZ', 25, 'OBLITAS Y CAMPERO 4', 78787999, 3, '2020-11-04', 1, 0),
(12, '6756789', 2, 'CAPITAN', 'UNO', 'GALARZA ', 20, 'Oblitas y Bolivar', 78787999, 3, '2020-11-04', 1, 0),
(13, '6767689', 1, 'CAPITAN', 'UNO', 'GALARZA ', 18, 'OBLITAS Y CAMPERO 4', 78787999, 7, '2020-11-05', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bus`
--

CREATE TABLE `bus` (
  `idBus` int(11) NOT NULL,
  `placa` varchar(11) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` int(11) NOT NULL,
  `capacidad` int(11) NOT NULL,
  `idConductor` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `Foto` text NOT NULL,
  `Estado` int(11) NOT NULL DEFAULT '1',
  `BAsignado` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bus`
--

INSERT INTO `bus` (`idBus`, `placa`, `marca`, `modelo`, `capacidad`, `idConductor`, `fecha`, `Foto`, `Estado`, `BAsignado`) VALUES
(2, '7878DRK', 'NISSAN', 2000, 50, 20, '2020-09-15', '', 1, 0),
(4, '9090RTU', 'MERCEDES BENZ', 2000, 50, 31, '2020-09-15', '', 0, 0),
(5, '2020TRE', 'JACK', 2002, 50, 20, '2020-09-15', '', 1, 0),
(6, '7878JHY', 'MERCEDES BENZ', 1997, 50, 20, '2020-09-16', '', 1, 0),
(7, '9090FFR', 'NISSAN', 2001, 50, 20, '2020-09-16', '', 1, 0),
(8, '7878tyu', 'MERCEDES BENZ', 2000, 50, 23, '2020-10-04', '', 1, 0),
(9, '1010RTY', 'JACK', 1998, 45, 18, '2020-10-22', '', 1, 0),
(10, '8989DRV', 'MERCEDES BENZ', 2002, 50, 20, '2020-10-26', '', 1, 0),
(11, '1010RTY', 'MERCEDES BENZ', 2002, 50, 20, '2020-10-26', 'vistas/recursos/img/usuarios/11/713.png', 1, 0),
(12, '', 'MERCEDES BENZ', 2009, 50, 20, '2020-10-26', 'vistas/recursos/img/usuarios/12/968.png', 1, 0),
(13, '7070TRUU', 'MERCEDES BENZ', 2000, 50, 20, '2020-10-26', 'vistas/recursos/img/usuarios/13/288.png', 1, 0),
(14, '8989TRU', 'MERCEDES BENZ', 1999, 45, 20, '2020-10-27', 'vistas/recursos/img/usuarios/14/721.jpg', 1, 0),
(15, '7070YUT', 'MERCEDES BENZ', 2000, 50, 20, '2020-10-31', '', 1, 0),
(16, '4787GTR', 'JACK', 1990, 49, 18, '2020-10-31', 'vistas/recursos/img/usuarios/16/700.jpg', 1, 0),
(17, '7878GRE', 'NISSAN', 2000, 50, 20, '2020-11-05', 'vistas/recursos/img/usuarios/17/386.png', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `codCargo` varchar(10) NOT NULL,
  `descripcionCargo` varchar(50) NOT NULL,
  `estadoCargo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`codCargo`, `descripcionCargo`, `estadoCargo`) VALUES
('1', 'PRESIDENTE', '1'),
('2', 'ENCARGADO(A) OFICINA', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clienteremitente`
--

CREATE TABLE `clienteremitente` (
  `Rci` varchar(8) NOT NULL,
  `Rnombre` varchar(20) NOT NULL,
  `Rapellido_Pa` varchar(50) NOT NULL,
  `Rapellido_Ma` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clienteremitente`
--

INSERT INTO `clienteremitente` (`Rci`, `Rnombre`, `Rapellido_Pa`, `Rapellido_Ma`) VALUES
('6780898', 'DARWIN', 'MAMANI ', 'MAMANI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `idConductor` int(11) NOT NULL,
  `ci` varchar(10) NOT NULL,
  `idlugar` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `ape_pater` varchar(50) NOT NULL,
  `ape_mater` varchar(50) NOT NULL,
  `dir` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `idSangre` int(11) NOT NULL,
  `idpropiedad` int(11) NOT NULL,
  `fingreso` date NOT NULL,
  `CFoto` text NOT NULL,
  `Cestado` int(11) NOT NULL DEFAULT '1',
  `CAsignado` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`idConductor`, `ci`, `idlugar`, `nom`, `ape_pater`, `ape_mater`, `dir`, `tel`, `idSangre`, `idpropiedad`, `fingreso`, `CFoto`, `Cestado`, `CAsignado`) VALUES
(18, '12345', 1, 'mario', 'mamani', 'mamani', 'obliats y campero 1', '667689', 1, 1, '2020-09-11', '', 1, 1),
(20, '6767679', 1, 'MARCOS', 'GOMEZ', 'OCHOA', 'OBLITAS Y BOLIVAR 1', '787870', 1, 2, '2020-09-11', '', 1, 0),
(23, '12345678', 1, 'jose bvgg', 'galarza ', 'mamani', 'oblitas y campero ', '1232143', 1, 2, '2020-09-11', '', 1, 0),
(24, '7408569', 2, 'german', 'mamani', 'galarza', 'oblitas y campero 2', '67678', 2, 2, '2020-09-11', '', 1, 0),
(27, '8989797', 1, 'marcos ', 'mamani', 'gomez', 'OBLITAS Y BOLIVAR 1', '67678', 1, 2, '2020-09-12', '', 1, 0),
(28, '1234567', 1, 'maros', 'galarza ', 'OCHOA', 'oblitas y campero 2', '67678', 1, 2, '2020-09-12', '', 1, 0),
(29, '7878907', 2, 'josue', 'flores', 'OCHOA', 'oblitas y campero ', '1232143', 1, 2, '2020-09-12', '', 1, 1),
(31, '8989989', 2, 'romero', 'valdez', 'figueroa', 'oblitas y campero 2', '67678', 1, 5, '2020-09-15', '', 1, 0),
(32, '7459856', 1, 'EVRTON', 'BRSILERO', 'JOGO', 'OBLITAS Y CAMPERO', '6768988', 1, 2, '2020-10-31', '', 1, 0),
(33, '7459689', 1, 'ROBERT', 'MAMANI ', 'OCHOA', 'OBLITAS Y BOLIVAR 1', '78789889', 5, 2, '2020-10-31', '', 1, 0),
(34, '6767989', 1, 'josue', 'galarza ', 'mamani', 'oblitas y campero 2', '78789889', 1, 2, '2020-10-31', '', 1, 0),
(35, '8989898', 1, 'SUPER', 'MAN', 'VELOZ', 'OBLITAS Y CAMPERO', '1232143', 2, 2, '2020-10-31', '', 1, 0),
(36, '7879867', 2, 'GILBERT', 'MARINES', 'MAMANI', 'OBLITAS Y CAMPERO', '78787878', 1, 2, '2020-10-31', 'vistas/recursos/img/conductores/36/873.jpg', 1, 0),
(37, '6767676', 1, 'MARCOS ', 'BALDERRAMA', 'MONTERO', 'OBLITAS Y CAMPERO', '78789889', 1, 2, '2020-11-04', 'vistas/recursos/img/conductores/37/943.jpg', 1, 0),
(38, '7307834', 1, 'MARCOS ', 'RAMIREZ', 'MAMANI', 'OBLITAS Y BOLIVAR 1', '73435673', 7, 2, '2020-11-05', '', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinodellegada`
--

CREATE TABLE `destinodellegada` (
  `idDestinoLlegada` int(11) NOT NULL,
  `DElugar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `destinodellegada`
--

INSERT INTO `destinodellegada` (`idDestinoLlegada`, `DElugar`) VALUES
(1, 'Quillacas'),
(2, 'Salinas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destinodepartida`
--

CREATE TABLE `destinodepartida` (
  `idDestinoPartida` int(11) NOT NULL,
  `lugar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `destinodepartida`
--

INSERT INTO `destinodepartida` (`idDestinoPartida`, `lugar`) VALUES
(1, 'Oruro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encomienda`
--

CREATE TABLE `encomienda` (
  `idEncomienda` int(11) NOT NULL,
  `Rci` varchar(8) NOT NULL,
  `Eci` varchar(7) NOT NULL,
  `Enombre` varchar(20) NOT NULL,
  `Eapallido_Pa` varchar(50) NOT NULL,
  `Eapellido_Ma` varchar(50) NOT NULL,
  `Ecelular` int(11) NOT NULL,
  `idDestinoLlegada` int(11) NOT NULL,
  `Edescripcion` varchar(50) NOT NULL,
  `EmontoCancelado` int(11) NOT NULL,
  `Efecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `encomienda`
--

INSERT INTO `encomienda` (`idEncomienda`, `Rci`, `Eci`, `Enombre`, `Eapallido_Pa`, `Eapellido_Ma`, `Ecelular`, `idDestinoLlegada`, `Edescripcion`, `EmontoCancelado`, `Efecha`) VALUES
(29, '6780898', '7078908', 'GILBERT', 'MADISON', 'ROBLES', 78796776, 1, 'CAJA DE REFERESCOS Y BOLSAS', 50, '2020-10-18'),
(53, '6780898', '6780898', 'LOCO', 'MADISON', 'MAMANI', 7878788, 1, 'CAMAS', 50, '2020-10-18'),
(56, '6780898', '678089', 'LOCO', 'MADISON', 'MAMANI', 7878788, 1, 'CAMAS', 50, '2020-10-18'),
(58, '6780898', '7878788', 'RONALDIÑO', 'GAUCHO', 'MAMANI', 7878788, 1, 'CAMAS', 50, '2020-10-18'),
(59, '6780898', '6780100', 'LOCO', 'MADISON', 'VELOZ', 7878788, 1, 'CAMAS', 50, '2020-10-20'),
(61, '6780898', '1234567', 'juan', 'hola', 'MAMANI', 7878788, 2, 'CAMAS', 50, '2020-10-21'),
(62, '6780898', '1234567', 'juan', 'hola', 'MAMANI', 7878788, 2, 'CAMAS', 50, '2020-10-21'),
(63, '6780898', '1234567', 'juan', 'hola', 'MAMANI', 7878788, 2, 'CAMAS', 50, '2020-10-21'),
(64, '6780898', '6780899', 'juan', 'MADISON', 'colombia', 7878788, 1, 'CAMAS', 50, '2020-10-21'),
(65, '6780898', '6780899', 'juan', 'MADISON', 'colombia', 7878788, 1, 'CAMAS', 50, '2020-10-21'),
(66, '6780898', '6780899', 'juan', 'MADISON', 'colombia', 7878788, 1, 'CAMAS', 50, '2020-10-21'),
(67, '6780898', '6780899', 'juan', 'MADISON', 'colombia', 7878788, 1, 'CAMAS', 50, '2020-10-21'),
(71, '6780898', '6780100', 'hola ', 'MADISON', 'MAMANI', 7878788, 1, 'CAMAS', 50, '2020-10-21'),
(72, '6780898', '6780890', 'juan', 'MADISON', 'VELOZ', 7878788, 1, 'CAMAS', 700, '2020-10-21'),
(73, '6780898', '6780100', 'LOCO', 'MADISON', 'HOLA', 898978, 1, 'MUEBLES', 50, '2020-10-22'),
(74, '6780898', '6780100', 'LOCO', 'MADISON', 'HOLA', 898978, 1, 'MUEBLES', 50, '2020-10-22'),
(76, '6780898', '6780100', 'LOCO', 'MADISON', 'MAMANI', 89897878, 1, 'CAMAS', 50, '2020-10-22'),
(77, '6780898', '6780810', 'WALLAS', 'MADISON', 'MAMANI', 89897878, 2, 'CAMAS', 50, '2020-10-22'),
(78, '6780898', '6780810', 'WALLAS', 'MADISON', 'MAMANI', 89897878, 2, 'CAMAS', 50, '2020-10-22'),
(79, '6780898', '6780810', 'WALLAS', 'MADISON', 'MAMANI', 89897878, 2, 'CAMAS', 50, '2020-10-22'),
(80, '6780898', '6780810', 'WALLAS', 'MADISON', 'MAMANI', 89897878, 2, 'CAMAS', 50, '2020-10-22'),
(81, '6780898', '6780810', 'WALLAS', 'MADISON', 'MAMANI', 89897878, 2, 'CAMAS', 50, '2020-10-22'),
(83, '6780898', '6780810', 'WALLAS', 'MADISON', 'MAMANI', 89897878, 2, 'CAMAS', 50, '2020-10-22'),
(85, '6780898', '6780810', 'WALLAS', 'MADISON', 'MAMANI', 89897878, 2, 'CAMAS', 50, '2020-10-22'),
(86, '6780898', '6780810', 'WALLAS', 'MADISON', 'MAMANI', 89897878, 2, 'CAMAS', 50, '2020-10-22'),
(87, '6780898', '6780810', 'WALLAS', 'MADISON', 'MAMANI', 89897878, 2, 'CAMAS', 50, '2020-10-22'),
(88, '6780898', '6780810', 'WALLAS', 'MADISON', 'MAMANI', 89897878, 2, 'CAMAS', 50, '2020-10-22'),
(89, '6780898', '6780899', 'IRON ', 'MADISON', 'MAMANI', 7878788, 2, 'CAMAS', 50, '2020-10-22'),
(90, '6780898', '6780899', 'IRON ', 'MADISON', 'MAMANI', 7878788, 2, 'CAMAS', 50, '2020-10-22'),
(91, '6780898', '12345', 'HULK', 'MAS ', 'POTENTE ', 5657768, 1, 'MUEBLES', 700, '2020-10-22'),
(169, '6780898', '678089', 'spiderman', 'MADISON', 'MAMANI', 89897878, 1, 'MUEBLES', 700, '2020-10-22'),
(171, '6780898', '6780899', 'LOCO', 'hola', 'MAMANI', 7878788, 1, 'CAMAS', 700, '2020-10-22'),
(172, '6780898', '6780899', 'LOCO', 'hola', 'MAMANI', 7878788, 1, 'CAMAS', 700, '2020-10-22'),
(173, '6780898', '6780899', 'LOCO', 'hola', 'MAMANI', 7878788, 1, 'CAMAS', 700, '2020-10-22'),
(174, '6780898', '6780899', 'LOCO', 'hola', 'MAMANI', 7878788, 1, 'CAMAS', 700, '2020-10-22'),
(175, '6780898', '1234567', 'LOCO', 'MADISON', 'MAMANI', 89897878, 1, 'CAMAS', 700, '2020-10-22'),
(176, '6780898', '6780899', 'LOCO', 'MADISON', 'HOLA', 7878788, 1, 'MUEBLES', 700, '2020-10-22'),
(177, '6780898', '12345', 'THOR', 'GAUCHO', 'VELOZ', 7878788, 1, 'MUEBLES', 700, '2020-10-22'),
(178, '6780898', '1234567', 'WALLAS', 'GAUCHO', 'VELOZ', 7878788, 1, 'CAMAS', 700, '2020-10-22'),
(179, '6780898', '6780889', 'LOCO', 'MADISON', 'HOLA', 7878788, 1, 'MUEBLES', 700, '2020-10-23'),
(180, '6780898', '6780899', 'LOCO', 'MADISON', 'MAMANI', 89897878, 1, 'CAMAS', 700, '2020-10-23'),
(182, '6780898', '6780897', 'LOCO', 'MADISON', 'MAMANI', 7878788, 1, 'CAMAS', 50, '2020-10-23'),
(183, '6780898', '1234567', 'LOCO', 'MADISON', 'MAMANI', 89897878, 1, 'CAMAS', 50, '2020-10-23'),
(184, '6780898', '6780895', 'juan', 'hola', 'VELOZ', 7878788, 1, 'CAMAS', 50, '2020-10-23'),
(185, '6780898', '12345', 'LOCO', 'MADISON', 'MAMANI', 7878788, 1, 'CAMAS', 50, '2020-10-23'),
(186, '6780898', '12345', 'LOCO', 'MADISON', 'MAMANI', 7878788, 1, 'CAMAS', 50, '2020-10-23'),
(187, '6780898', '12345', 'LOCO', 'MADISON', 'MAMANI', 7878788, 1, 'CAMAS', 50, '2020-10-23'),
(188, '6780898', '12345', 'LOCO', 'MADISON', 'MAMANI', 7878788, 1, 'CAMAS', 50, '2020-10-23'),
(191, '6780898', '6780810', 'WALLAS', 'MADISON', 'MAMANI', 7878788, 1, 'CAMAS', 50, '2020-10-23'),
(192, '6780898', '1234567', 'WALLAS', 'MADISON', 'MAMANI', 78789786, 1, 'CAMAS', 700, '2020-10-23'),
(193, '6780898', '6780899', 'juan', 'MADISON', 'HOLA', 78789786, 1, 'MUEBLES', 50, '2020-10-23'),
(194, '6780898', '6780899', 'juan', 'MADISON', 'HOLA', 78789786, 1, 'MUEBLES', 50, '2020-10-23'),
(195, '6780898', '6780899', 'juan', 'MADISON', 'HOLA', 78789786, 1, 'MUEBLES', 50, '2020-10-23'),
(196, '6780898', '6780899', 'juan', 'MADISON', 'HOLA', 78789786, 1, 'MUEBLES', 50, '2020-10-23'),
(197, '6780898', '6780897', 'LOCO', 'MADISON', 'colombia', 7878788, 2, 'CAMAS', 50, '2020-10-23'),
(198, '6780898', '6780867', 'juan', 'MADISON', 'MAMANI', 7878788, 1, 'MUEBLES', 700, '2020-10-23'),
(199, '6780898', '6780867', 'juan', 'MADISON', 'MAMANI', 7878788, 1, 'MUEBLES', 700, '2020-10-23'),
(200, '6780898', '6780867', 'juan', 'MADISON', 'MAMANI', 7878788, 1, 'MUEBLES', 700, '2020-10-23'),
(201, '6780898', '8989667', 'JUAN', 'GAUCHO', 'GALARZA', 7878788, 1, 'CAMAS', 50, '2020-11-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envioencomienda`
--

CREATE TABLE `envioencomienda` (
  `idEnvioEnco` int(11) NOT NULL,
  `idEncomienda` int(11) NOT NULL,
  `idViajes` int(11) NOT NULL,
  `entregado` int(11) NOT NULL DEFAULT '1',
  `fechaenvio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horasalidas`
--

CREATE TABLE `horasalidas` (
  `idHora` int(11) NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `horasalidas`
--

INSERT INTO `horasalidas` (`idHora`, `hora`) VALUES
(1, '17:40:00'),
(2, '17:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `idlugar` int(11) NOT NULL,
  `Departamento` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`idlugar`, `Departamento`) VALUES
(1, 'Po'),
(2, 'La');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveldepropiedad`
--

CREATE TABLE `niveldepropiedad` (
  `idpropiedad` int(11) NOT NULL,
  `nivel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `niveldepropiedad`
--

INSERT INTO `niveldepropiedad` (`idpropiedad`, `nivel`) VALUES
(1, 'PROPIETARIO'),
(2, 'CONDUCTOR'),
(5, 'CONDUCTOR Y PROPIETARIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasajeros`
--

CREATE TABLE `pasajeros` (
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `codPersonal` int(11) NOT NULL,
  `ci` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidoPaterno` varchar(50) NOT NULL,
  `apellidoMaterno` varchar(50) NOT NULL,
  `codCargo` varchar(10) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `fechaIngreso` date NOT NULL,
  `expedicion` varchar(5) NOT NULL,
  `sexo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`codPersonal`, `ci`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `codCargo`, `direccion`, `telefono`, `celular`, `fechaIngreso`, `expedicion`, `sexo`) VALUES
(1, '1234567', 'MARCOS', 'MONROY', 'MAMANI', '1', 'OBLITAS Y CAMPERO ', '5289808', '7232567', '2020-04-25', 'Or', 'm'),
(2, '7676898', 'DANIELA', 'CUELLARRRR', 'MENDOZA', '1', 'OBLITAS Y CAMPERO UNO', '7676869', '78787878', '2020-10-27', 'OR.', 'M'),
(3, '7343578', 'JOSUE', 'GOMEZ', 'MAMANI', '2', 'VINTO ZONA SOCAMANI UNO', '51471', '67565798', '2020-11-05', 'CB.', 'M'),
(4, '6766798', 'RAMON', 'VALDEZ', 'BALDERRAMA', '1', 'ZONA SUD PASAJE DOS', '78978', '78676889', '2020-11-05', 'BN.', 'M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposangre`
--

CREATE TABLE `tiposangre` (
  `idSangre` int(11) NOT NULL,
  `Tipo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tiposangre`
--

INSERT INTO `tiposangre` (`idSangre`, `Tipo`) VALUES
(1, 'ORH +'),
(2, 'ARH +'),
(3, 'ORH-'),
(4, 'H+'),
(5, 'E+'),
(6, 'F+'),
(7, 'D-'),
(8, 'A+');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codPersonal` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(200) NOT NULL,
  `estado` char(1) NOT NULL,
  `nivel` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codPersonal`, `usuario`, `contraseña`, `estado`, `nivel`) VALUES
(1, 'MONROY', '$2a$07$asxx54ahjppf45sd87a5auRajNP0zeqOkB9Qda.dSiTb2/n.wAC/2', '1', '2'),
(2, 'CUELLARRRR', '$2a$07$asxx54ahjppf45sd87a5auQaZYP47xH.bPzmL5ryYrqQiMLrt4NYO', '0', '1'),
(3, 'GOMEZ', '$2a$07$asxx54ahjppf45sd87a5auhuqwTFMuwrvJ8qL.EssuoxoA6kxoynO', '1', '2'),
(4, 'VALDEZ', '$2a$07$asxx54ahjppf45sd87a5aumlXkR/Q9HOuQPOw0/3JqhwTsCg/gJ1q', '0', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignarbus`
--
ALTER TABLE `asignarbus`
  ADD PRIMARY KEY (`idAsignacion`),
  ADD KEY `idConductor` (`idConductor`),
  ADD KEY `idAyudante` (`idAyudante`),
  ADD KEY `idBus` (`idBus`);

--
-- Indices de la tabla `asignarviaje`
--
ALTER TABLE `asignarviaje`
  ADD PRIMARY KEY (`idViajes`),
  ADD KEY `idAsignacion` (`idAsignacion`),
  ADD KEY `IdDestinoPartida` (`IdDestinoPartida`),
  ADD KEY `idDestinoLlegada` (`idDestinoLlegada`),
  ADD KEY `idHora` (`idHora`);

--
-- Indices de la tabla `ayudante`
--
ALTER TABLE `ayudante`
  ADD PRIMARY KEY (`idAyudante`),
  ADD KEY `idlugar` (`idlugar`),
  ADD KEY `idSangre` (`idSangre`);

--
-- Indices de la tabla `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`idBus`),
  ADD KEY `idConductor` (`idConductor`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`codCargo`);

--
-- Indices de la tabla `clienteremitente`
--
ALTER TABLE `clienteremitente`
  ADD PRIMARY KEY (`Rci`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`idConductor`),
  ADD KEY `idpropiedad` (`idpropiedad`),
  ADD KEY `idSangre` (`idSangre`),
  ADD KEY `idlugar` (`idlugar`);

--
-- Indices de la tabla `destinodellegada`
--
ALTER TABLE `destinodellegada`
  ADD PRIMARY KEY (`idDestinoLlegada`);

--
-- Indices de la tabla `destinodepartida`
--
ALTER TABLE `destinodepartida`
  ADD PRIMARY KEY (`idDestinoPartida`);

--
-- Indices de la tabla `encomienda`
--
ALTER TABLE `encomienda`
  ADD PRIMARY KEY (`idEncomienda`),
  ADD KEY `idDestinoLlegada` (`idDestinoLlegada`),
  ADD KEY `Rci` (`Rci`);

--
-- Indices de la tabla `envioencomienda`
--
ALTER TABLE `envioencomienda`
  ADD PRIMARY KEY (`idEnvioEnco`),
  ADD KEY `idEncomienda` (`idEncomienda`),
  ADD KEY `idViajes` (`idViajes`);

--
-- Indices de la tabla `horasalidas`
--
ALTER TABLE `horasalidas`
  ADD PRIMARY KEY (`idHora`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`idlugar`);

--
-- Indices de la tabla `niveldepropiedad`
--
ALTER TABLE `niveldepropiedad`
  ADD PRIMARY KEY (`idpropiedad`);

--
-- Indices de la tabla `pasajeros`
--
ALTER TABLE `pasajeros`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`codPersonal`),
  ADD KEY `codCargo` (`codCargo`);

--
-- Indices de la tabla `tiposangre`
--
ALTER TABLE `tiposangre`
  ADD PRIMARY KEY (`idSangre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codPersonal`),
  ADD KEY `codPersonal` (`codPersonal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignarbus`
--
ALTER TABLE `asignarbus`
  MODIFY `idAsignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `asignarviaje`
--
ALTER TABLE `asignarviaje`
  MODIFY `idViajes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `ayudante`
--
ALTER TABLE `ayudante`
  MODIFY `idAyudante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `bus`
--
ALTER TABLE `bus`
  MODIFY `idBus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `conductor`
--
ALTER TABLE `conductor`
  MODIFY `idConductor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT de la tabla `destinodellegada`
--
ALTER TABLE `destinodellegada`
  MODIFY `idDestinoLlegada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `destinodepartida`
--
ALTER TABLE `destinodepartida`
  MODIFY `idDestinoPartida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `encomienda`
--
ALTER TABLE `encomienda`
  MODIFY `idEncomienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
--
-- AUTO_INCREMENT de la tabla `envioencomienda`
--
ALTER TABLE `envioencomienda`
  MODIFY `idEnvioEnco` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `horasalidas`
--
ALTER TABLE `horasalidas`
  MODIFY `idHora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `idlugar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `niveldepropiedad`
--
ALTER TABLE `niveldepropiedad`
  MODIFY `idpropiedad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `pasajeros`
--
ALTER TABLE `pasajeros`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tiposangre`
--
ALTER TABLE `tiposangre`
  MODIFY `idSangre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignarbus`
--
ALTER TABLE `asignarbus`
  ADD CONSTRAINT `asignarbus_ibfk_1` FOREIGN KEY (`idConductor`) REFERENCES `conductor` (`idConductor`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `asignarbus_ibfk_2` FOREIGN KEY (`idAyudante`) REFERENCES `ayudante` (`idAyudante`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `asignarbus_ibfk_3` FOREIGN KEY (`idBus`) REFERENCES `bus` (`idBus`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignarviaje`
--
ALTER TABLE `asignarviaje`
  ADD CONSTRAINT `asignarviaje_ibfk_1` FOREIGN KEY (`idAsignacion`) REFERENCES `asignarbus` (`idAsignacion`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `asignarviaje_ibfk_2` FOREIGN KEY (`IdDestinoPartida`) REFERENCES `destinodepartida` (`idDestinoPartida`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `asignarviaje_ibfk_3` FOREIGN KEY (`idDestinoLlegada`) REFERENCES `destinodellegada` (`idDestinoLlegada`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `asignarviaje_ibfk_4` FOREIGN KEY (`idHora`) REFERENCES `horasalidas` (`idHora`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ayudante`
--
ALTER TABLE `ayudante`
  ADD CONSTRAINT `ayudante_ibfk_1` FOREIGN KEY (`idlugar`) REFERENCES `lugar` (`idlugar`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ayudante_ibfk_2` FOREIGN KEY (`idSangre`) REFERENCES `tiposangre` (`idSangre`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `bus_ibfk_1` FOREIGN KEY (`idConductor`) REFERENCES `conductor` (`idConductor`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD CONSTRAINT `conductor_ibfk_1` FOREIGN KEY (`idpropiedad`) REFERENCES `niveldepropiedad` (`idpropiedad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conductor_ibfk_2` FOREIGN KEY (`idSangre`) REFERENCES `tiposangre` (`idSangre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conductor_ibfk_3` FOREIGN KEY (`idlugar`) REFERENCES `lugar` (`idlugar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `encomienda`
--
ALTER TABLE `encomienda`
  ADD CONSTRAINT `encomienda_ibfk_2` FOREIGN KEY (`idDestinoLlegada`) REFERENCES `destinodellegada` (`idDestinoLlegada`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `encomienda_ibfk_3` FOREIGN KEY (`Rci`) REFERENCES `clienteremitente` (`Rci`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `envioencomienda`
--
ALTER TABLE `envioencomienda`
  ADD CONSTRAINT `envioencomienda_ibfk_1` FOREIGN KEY (`idEncomienda`) REFERENCES `encomienda` (`idEncomienda`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `envioencomienda_ibfk_2` FOREIGN KEY (`idViajes`) REFERENCES `asignarviaje` (`idViajes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`codCargo`) REFERENCES `cargo` (`codCargo`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`codPersonal`) REFERENCES `personal` (`codPersonal`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
