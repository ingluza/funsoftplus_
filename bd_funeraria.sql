-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2015 a las 23:52:59
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_funeraria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliados`
--

CREATE TABLE IF NOT EXISTS `afiliados` (
  `identificacionAfiliado` varchar(12) NOT NULL,
  `tipoIdentificacion` varchar(12) NOT NULL,
  `lugarExpedicion` int(11) NOT NULL,
  `nombreAfiliado` varchar(255) NOT NULL,
  `apellido1Afiliado` varchar(255) NOT NULL,
  `apellido2Afiliado` varchar(255) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `direccionAfiliado` varchar(50) NOT NULL,
  `codigoCiudad` int(11) NOT NULL,
  `telefonoAfiliado` varchar(50) NOT NULL,
  `movilAfiliado` varchar(50) NOT NULL,
  `emailAfiliado` varchar(50) NOT NULL,
  `fechaIngreso` date NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `afiliados`
--

INSERT INTO `afiliados` (`identificacionAfiliado`, `tipoIdentificacion`, `lugarExpedicion`, `nombreAfiliado`, `apellido1Afiliado`, `apellido2Afiliado`, `fechaNacimiento`, `direccionAfiliado`, `codigoCiudad`, `telefonoAfiliado`, `movilAfiliado`, `emailAfiliado`, `fechaIngreso`, `estado`) VALUES
('1054234121', 'CC', 436, 'Juan Carlos', 'Vargas', 'Navarro', '1923-02-13', 'Calle 20A No. 18 c 27 Barrio Guatapurí', 458, '5607879', '3008238823', '', '2015-09-22', 1),
('1056798231', 'CC', 219, 'Sofia Helena', 'Marquez', 'Moya', '1956-11-23', 'Edificio Palmeto Apto 203', 15, '4531212', '3082312235', 'moyasofi@gelo.co', '2015-09-21', 1),
('1065604234', 'CC', 160, 'Antonella', 'Alvarez', 'Zamora', '1988-02-07', 'Edificio Santello ', 145, '31245388', '98999765', 'antonella@univ.co', '2015-09-24', 1),
('1111111111', 'CE', 17, 'María Conchita', 'Alonso', 'Botero', '1292-11-12', 'Calle 45 No. 12 - 32 Altos de Siruma', 6, '2303438', '3124572341', 'mariac@gmail.com', '2015-09-20', 1),
('12532145', 'CC', 145, 'Jose Manuel', 'Florez', 'Martinez', '1967-12-12', 'Carrera 34 No. 23 - 243 Barrio Palermo', 662, '2341212', '3145768903', 'joseflorez@dev.co', '2015-09-22', 1),
('20453124', 'CC', 170, 'Sandra Marcel', 'Liñán', 'Colmenares', '1967-04-28', 'Carrera 12 No. 23 - 65', 436, '5698732', '3004567212', 'sandram@hotmail.com', '2015-09-21', 1),
('22457098', 'CC', 13, 'Marta', 'Julio', 'Beltran', '1978-12-23', 'Calle 13 # 45 - 56', 447, '3120982', '2222222', 'sssss@hotma', '2015-09-23', 1),
('22634522', 'CC', 436, 'Tatiana', 'Romero', 'Peruz', '1987-07-12', 'Finca el recreo', 451, '12323232', '3214508932', 'tatiromero@hotm', '2015-09-23', 1),
('3333333', 'CC', 436, 'Enrique', 'Aaron', 'Manjarres', '1986-01-03', 'mmmmmmmmm', 436, '323423', '4344556', 'kike@gmail.com', '2015-09-22', 1),
('34212567', 'CC', 1, 'Mariana', 'Gil', 'Martinelo', '1989-12-12', 'Edificio Space Apto 213', 13, '2431545', '3009896543', 'marianag@dev.com', '2015-09-23', 1),
('3900234', 'CE', 138, 'Marta Susana', 'Holls', 'Micka', '1967-09-22', 'Carrera 4 No. 23 - 23', 158, '5643211', '312455709', 'qola@sar.ok', '2015-09-21', 1),
('8345232', 'CC', 436, 'Karina ', 'Manjarres', 'Patiño', '1978-12-23', 'Mazana 43 Casa 12 Barrio Garupal Etapa 1', 458, '5809090', '3212553412', 'karina@web.co', '2015-09-21', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliadosbeneficiarios`
--

CREATE TABLE IF NOT EXISTS `afiliadosbeneficiarios` (
  `id` int(11) NOT NULL,
  `identificacionAfiliado` varchar(12) NOT NULL,
  `identificacionBeneficiario` varchar(12) NOT NULL,
  `codigoParentesco` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `afiliadosbeneficiarios`
--

INSERT INTO `afiliadosbeneficiarios` (`id`, `identificacionAfiliado`, `identificacionBeneficiario`, `codigoParentesco`) VALUES
(1, '3900234', '200912123456', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE IF NOT EXISTS `auditoria` (
  `idRegistro` int(11) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `accion` set('INSERTAR','ACTUALIZAR','CONSULTAR') NOT NULL,
  `fecha` datetime NOT NULL,
  `comentario` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auditoria`
--

INSERT INTO `auditoria` (`idRegistro`, `usuario`, `accion`, `fecha`, `comentario`) VALUES
(1, 'ingluza', 'ACTUALIZAR', '2015-10-03 10:20:32', 'Afiliados: Registro Actualizado'),
(2, 'ingluza', 'CONSULTAR', '2015-10-03 10:22:49', 'Afiliados: Nueva Consulta'),
(3, 'ingluza', 'CONSULTAR', '2015-10-03 10:41:39', 'Contratos: Nueva Consulta'),
(4, 'ingluza', 'CONSULTAR', '2015-10-03 10:41:54', 'Pagos: Nueva Consulta'),
(5, 'ingluza', 'CONSULTAR', '2015-10-03 10:42:04', 'Servicios: Nueva Consulta'),
(6, 'ingluza', 'CONSULTAR', '2015-10-03 12:07:13', 'Contratos: Nueva Consulta'),
(7, 'ingluza', 'CONSULTAR', '2015-10-03 12:13:40', 'Servicios: Nueva Consulta'),
(8, 'ingluza', 'CONSULTAR', '2015-10-04 14:02:01', 'Afiliados: Nueva Consulta'),
(9, 'ingluza', 'CONSULTAR', '2015-10-04 14:08:28', 'Afiliados: Nueva Consulta'),
(10, 'ingluza', 'CONSULTAR', '2015-10-04 14:09:08', 'Afiliados: Nueva Consulta'),
(11, 'ingluza', 'CONSULTAR', '2015-10-04 14:09:19', 'Afiliados: Nueva Consulta'),
(12, 'ingluza', 'CONSULTAR', '2015-10-04 14:14:04', 'Contratos: Nueva Consulta'),
(13, 'ingluza', 'CONSULTAR', '2015-10-04 14:14:22', 'Servicios: Nueva Consulta'),
(14, 'ingluza', 'CONSULTAR', '2015-10-04 15:07:06', 'Servicios: Nueva Consulta'),
(15, 'ingluza', 'CONSULTAR', '2015-10-04 15:10:22', 'Contratos: Nueva Consulta'),
(16, 'ingluza', 'CONSULTAR', '2015-10-04 15:54:25', 'Afiliados: Nueva Consulta'),
(17, 'ingluza', 'CONSULTAR', '2015-10-04 15:57:18', 'Servicios: Nueva Consulta'),
(18, 'ingluza', 'CONSULTAR', '2015-10-04 15:57:49', 'Servicios: Nueva Consulta'),
(19, 'ingluza', 'CONSULTAR', '2015-10-04 15:58:16', 'Servicios: Nueva Consulta'),
(20, 'ingluza', 'CONSULTAR', '2015-10-04 15:58:56', 'Afiliados: Nueva Consulta'),
(21, 'ingluza', 'CONSULTAR', '2015-10-04 16:00:12', 'Afiliados: Nueva Consulta'),
(22, 'ingluza', 'CONSULTAR', '2015-10-04 16:04:19', 'Afiliados: Nueva Consulta'),
(23, 'ingluza', 'CONSULTAR', '2015-10-04 16:04:49', 'Afiliados: Nueva Consulta'),
(24, 'ingluza', 'CONSULTAR', '2015-10-05 09:58:54', 'Servicios: Nueva Consulta'),
(25, 'ingluza', 'CONSULTAR', '2015-10-05 11:34:03', 'Afiliados: Nueva Consulta'),
(26, 'ingluza', '', '2015-10-05 16:22:54', 'Fallecimientos: Nuevo Registro'),
(27, 'ingluza', '', '2015-10-05 16:26:21', 'Fallecimientos: Nuevo Registro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiarios`
--

CREATE TABLE IF NOT EXISTS `beneficiarios` (
  `id` int(11) NOT NULL,
  `identificacionBeneficiario` varchar(12) NOT NULL,
  `tipoIdentificacion` varchar(12) NOT NULL,
  `nombreBeneficiario` varchar(255) NOT NULL,
  `apellidosBeneficiario` varchar(255) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `fechaIngreso` date NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `beneficiarios`
--

INSERT INTO `beneficiarios` (`id`, `identificacionBeneficiario`, `tipoIdentificacion`, `nombreBeneficiario`, `apellidosBeneficiario`, `fechaNacimiento`, `fechaIngreso`, `estado`) VALUES
(2, '200912123456', 'TI', 'James', 'Holls', '2009-12-12', '2015-09-21', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE IF NOT EXISTS `ciudades` (
  `codigoCiudad` int(11) NOT NULL,
  `nombreCiudad` varchar(255) NOT NULL,
  `codigoDepartamento` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1113 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`codigoCiudad`, `nombreCiudad`, `codigoDepartamento`) VALUES
(1, 'EL ENCANTO', 1),
(2, 'LA CHORRERA', 1),
(3, 'LA PEDRERA', 1),
(4, 'LA VICTORIA', 1),
(5, 'LETICIA', 1),
(6, 'MIRITI', 1),
(7, 'PUERTO ALEGRIA', 1),
(8, 'PUERTO ARICA', 1),
(9, 'PUERTO NARIÑO', 1),
(10, 'PUERTO SANTANDER', 1),
(11, 'TURAPACA', 1),
(12, 'ABEJORRAL', 2),
(13, 'ABRIAQUI', 2),
(14, 'ALEJANDRIA', 2),
(15, 'AMAGA', 2),
(16, 'AMALFI', 2),
(17, 'ANDES', 2),
(18, 'ANGELOPOLIS', 2),
(19, 'ANGOSTURA', 2),
(20, 'ANORI', 2),
(21, 'ANTIOQUIA', 2),
(22, 'ANZA', 2),
(23, 'APARTADO', 2),
(24, 'ARBOLETES', 2),
(25, 'ARGELIA', 2),
(26, 'ARMENIA', 2),
(27, 'BARBOSA', 2),
(28, 'BELLO', 2),
(29, 'BELMIRA', 2),
(30, 'BETANIA', 2),
(31, 'BETULIA', 2),
(32, 'BOLIVAR', 2),
(33, 'BRICEÑO', 2),
(34, 'BURITICA', 2),
(35, 'CACERES', 2),
(36, 'CAICEDO', 2),
(37, 'CALDAS', 2),
(38, 'CAMPAMENTO', 2),
(39, 'CANASGORDAS', 2),
(40, 'CARACOLI', 2),
(41, 'CARAMANTA', 2),
(42, 'CAREPA', 2),
(43, 'CARMEN DE VIBORAL', 2),
(44, 'CAROLINA DEL PRINCIPE', 2),
(45, 'CAUCASIA', 2),
(46, 'CHIGORODO', 2),
(47, 'CISNEROS', 2),
(48, 'COCORNA', 2),
(49, 'CONCEPCION', 2),
(50, 'CONCORDIA', 2),
(51, 'COPACABANA', 2),
(52, 'DABEIBA', 2),
(53, 'DONMATIAS', 2),
(54, 'EBEJICO', 2),
(55, 'EL BAGRE', 2),
(56, 'EL PENOL', 2),
(57, 'EL RETIRO', 2),
(58, 'ENTRERRIOS', 2),
(59, 'ENVIGADO', 2),
(60, 'FREDONIA', 2),
(61, 'FRONTINO', 2),
(62, 'GIRALDO', 2),
(63, 'GIRARDOTA', 2),
(64, 'GOMEZ PLATA', 2),
(65, 'GRANADA', 2),
(66, 'GUADALUPE', 2),
(67, 'GUARNE', 2),
(68, 'GUATAQUE', 2),
(69, 'HELICONIA', 2),
(70, 'HISPANIA', 2),
(71, 'ITAGUI', 2),
(72, 'ITUANGO', 2),
(73, 'JARDIN', 2),
(74, 'JERICO', 2),
(75, 'LA CEJA', 2),
(76, 'LA ESTRELLA', 2),
(77, 'LA PINTADA', 2),
(78, 'LA UNION', 2),
(79, 'LIBORINA', 2),
(80, 'MACEO', 2),
(81, 'MARINILLA', 2),
(82, 'MEDELLIN', 2),
(83, 'MONTEBELLO', 2),
(84, 'MURINDO', 2),
(85, 'MUTATA', 2),
(86, 'NARINO', 2),
(87, 'NECHI', 2),
(88, 'NECOCLI', 2),
(89, 'OLAYA', 2),
(90, 'PEQUE', 2),
(91, 'PUEBLORRICO', 2),
(92, 'PUERTO BERRIO', 2),
(93, 'PUERTO NARE', 2),
(94, 'PUERTO TRIUNFO', 2),
(95, 'REMEDIOS', 2),
(96, 'RIONEGRO', 2),
(97, 'SABANALARGA', 2),
(98, 'SABANETA', 2),
(99, 'SALGAR', 2),
(100, 'SAN ANDRES DE CUERQUIA', 2),
(101, 'SAN CARLOS', 2),
(102, 'SAN FRANCISCO', 2),
(103, 'SAN JERONIMO', 2),
(104, 'SAN JOSE DE LA MONTAÑA', 2),
(105, 'SAN JUAN DE URABA', 2),
(106, 'SAN LUIS', 2),
(107, 'SAN PEDRO DE LOS MILAGROS', 2),
(108, 'SAN PEDRO DE URABA', 2),
(109, 'SAN RAFAEL', 2),
(110, 'SAN ROQUE', 2),
(111, 'SAN VICENTE', 2),
(112, 'SANTA BARBARA', 2),
(113, 'SANTA ROSA DE OSOS', 2),
(114, 'SANTO DOMINGO', 2),
(115, 'SANTUARIO', 2),
(116, 'SEGOVIA', 2),
(117, 'SONSON', 2),
(118, 'SOPETRAN', 2),
(119, 'TAMESIS', 2),
(120, 'TARAZA', 2),
(121, 'TARSO', 2),
(122, 'TITIRIBI', 2),
(123, 'TOLEDO', 2),
(124, 'TURBO', 2),
(125, 'URAMITA', 2),
(126, 'URRAO', 2),
(127, 'VALDIVIA', 2),
(128, 'VALPARAISO', 2),
(129, 'VEGACHI', 2),
(130, 'VENECIA', 2),
(131, 'VIGIA DEL FUERTE', 2),
(132, 'YALI', 2),
(133, 'YARUMAL', 2),
(134, 'YOLOMBO', 2),
(135, 'YONDO', 2),
(136, 'ZARAGOZA', 2),
(137, 'ARAUCA', 3),
(138, 'ARAUQUITA', 3),
(139, 'CRAVO NORTE', 3),
(140, 'FORTUL', 3),
(141, 'PUERTO RONDON', 3),
(142, 'SARAVENA', 3),
(143, 'TAME', 3),
(144, 'BARANOA', 4),
(145, 'BARRANQUILLA', 4),
(146, 'CAMPO DE LA CRUZ', 4),
(147, 'CANDELARIA', 4),
(148, 'GALAPA', 4),
(149, 'JUAN DE ACOSTA', 4),
(150, 'LURUACO', 4),
(151, 'MALAMBO', 4),
(152, 'MANATI', 4),
(153, 'PALMAR DE VARELA', 4),
(154, 'PIOJO', 4),
(155, 'POLO NUEVO', 4),
(156, 'PONEDERA', 4),
(157, 'PUERTO COLOMBIA', 4),
(158, 'REPELON', 4),
(159, 'SABANAGRANDE', 4),
(160, 'SABANALARGA', 4),
(161, 'SANTA LUCIA', 4),
(162, 'SANTO TOMAS', 4),
(163, 'SOLEDAD', 4),
(164, 'SUAN', 4),
(165, 'TUBARA', 4),
(166, 'USIACURI', 4),
(167, 'ACHI', 5),
(168, 'ALTOS DEL ROSARIO', 5),
(169, 'ARENAL', 5),
(170, 'ARJONA', 5),
(171, 'ARROYOHONDO', 5),
(172, 'BARRANCO DE LOBA', 5),
(173, 'BRAZUELO DE PAPAYAL', 5),
(174, 'CALAMAR', 5),
(175, 'CANTAGALLO', 5),
(176, 'CARTAGENA DE INDIAS', 5),
(177, 'CICUCO', 5),
(178, 'CLEMENCIA', 5),
(179, 'CORDOBA', 5),
(180, 'EL CARMEN DE BOLIVAR', 5),
(181, 'EL GUAMO', 5),
(182, 'EL PENION', 5),
(183, 'HATILLO DE LOBA', 5),
(184, 'MAGANGUE', 5),
(185, 'MAHATES', 5),
(186, 'MARGARITA', 5),
(187, 'MARIA LA BAJA', 5),
(188, 'MONTECRISTO', 5),
(189, 'MORALES', 5),
(190, 'MORALES', 5),
(191, 'NOROSI', 5),
(192, 'PINILLOS', 5),
(193, 'REGIDOR', 5),
(194, 'RIO VIEJO', 5),
(195, 'SAN CRISTOBAL', 5),
(196, 'SAN ESTANISLAO', 5),
(197, 'SAN FERNANDO', 5),
(198, 'SAN JACINTO', 5),
(199, 'SAN JACINTO DEL CAUCA', 5),
(200, 'SAN JUAN DE NEPOMUCENO', 5),
(201, 'SAN MARTIN DE LOBA', 5),
(202, 'SAN PABLO', 5),
(203, 'SAN PABLO NORTE', 5),
(204, 'SANTA CATALINA', 5),
(205, 'SANTA CRUZ DE MOMPOX', 5),
(206, 'SANTA ROSA', 5),
(207, 'SANTA ROSA DEL SUR', 5),
(208, 'SIMITI', 5),
(209, 'SOPLAVIENTO', 5),
(210, 'TALAIGUA NUEVO', 5),
(211, 'TUQUISIO', 5),
(212, 'TURBACO', 5),
(213, 'TURBANA', 5),
(214, 'VILLANUEVA', 5),
(215, 'ZAMBRANO', 5),
(216, 'AQUITANIA', 6),
(217, 'ARCABUCO', 6),
(218, 'BELÉN', 6),
(219, 'BERBEO', 6),
(220, 'BETÉITIVA', 6),
(221, 'BOAVITA', 6),
(222, 'BOYACÁ', 6),
(223, 'BRICEÑO', 6),
(224, 'BUENAVISTA', 6),
(225, 'BUSBANZÁ', 6),
(226, 'CALDAS', 6),
(227, 'CAMPO HERMOSO', 6),
(228, 'CERINZA', 6),
(229, 'CHINAVITA', 6),
(230, 'CHIQUINQUIRÁ', 6),
(231, 'CHÍQUIZA', 6),
(232, 'CHISCAS', 6),
(233, 'CHITA', 6),
(234, 'CHITARAQUE', 6),
(235, 'CHIVATÁ', 6),
(236, 'CIÉNEGA', 6),
(237, 'CÓMBITA', 6),
(238, 'COPER', 6),
(239, 'CORRALES', 6),
(240, 'COVARACHÍA', 6),
(241, 'CUBARA', 6),
(242, 'CUCAITA', 6),
(243, 'CUITIVA', 6),
(244, 'DUITAMA', 6),
(245, 'EL COCUY', 6),
(246, 'EL ESPINO', 6),
(247, 'FIRAVITOBA', 6),
(248, 'FLORESTA', 6),
(249, 'GACHANTIVÁ', 6),
(250, 'GÁMEZA', 6),
(251, 'GARAGOA', 6),
(252, 'GUACAMAYAS', 6),
(253, 'GÜICÁN', 6),
(254, 'IZA', 6),
(255, 'JENESANO', 6),
(256, 'JERICÓ', 6),
(257, 'LA UVITA', 6),
(258, 'LA VICTORIA', 6),
(259, 'LABRANZA GRANDE', 6),
(260, 'MACANAL', 6),
(261, 'MARIPÍ', 6),
(262, 'MIRAFLORES', 6),
(263, 'MONGUA', 6),
(264, 'MONGUÍ', 6),
(265, 'MONIQUIRÁ', 6),
(266, 'MOTAVITA', 6),
(267, 'MUZO', 6),
(268, 'NOBSA', 6),
(269, 'NUEVO COLÓN', 6),
(270, 'OICATÁ', 6),
(271, 'OTANCHE', 6),
(272, 'PACHAVITA', 6),
(273, 'PÁEZ', 6),
(274, 'PAIPA', 6),
(275, 'PAJARITO', 6),
(276, 'PANQUEBA', 6),
(277, 'PAUNA', 6),
(278, 'PAYA', 6),
(279, 'PAZ DE RÍO', 6),
(280, 'PESCA', 6),
(281, 'PISBA', 6),
(282, 'PUERTO BOYACA', 6),
(283, 'QUÍPAMA', 6),
(284, 'RAMIRIQUÍ', 6),
(285, 'RÁQUIRA', 6),
(286, 'RONDÓN', 6),
(287, 'SABOYÁ', 6),
(288, 'SÁCHICA', 6),
(289, 'SAMACÁ', 6),
(290, 'SAN EDUARDO', 6),
(291, 'SAN JOSÉ DE PARE', 6),
(292, 'SAN LUÍS DE GACENO', 6),
(293, 'SAN MATEO', 6),
(294, 'SAN MIGUEL DE SEMA', 6),
(295, 'SAN PABLO DE BORBUR', 6),
(296, 'SANTA MARÍA', 6),
(297, 'SANTA ROSA DE VITERBO', 6),
(298, 'SANTA SOFÍA', 6),
(299, 'SANTANA', 6),
(300, 'SATIVANORTE', 6),
(301, 'SATIVASUR', 6),
(302, 'SIACHOQUE', 6),
(303, 'SOATÁ', 6),
(304, 'SOCHA', 6),
(305, 'SOCOTÁ', 6),
(306, 'SOGAMOSO', 6),
(307, 'SORA', 6),
(308, 'SORACÁ', 6),
(309, 'SOTAQUIRÁ', 6),
(310, 'SUSACÓN', 6),
(311, 'SUTARMACHÁN', 6),
(312, 'TASCO', 6),
(313, 'TIBANÁ', 6),
(314, 'TIBASOSA', 6),
(315, 'TINJACÁ', 6),
(316, 'TIPACOQUE', 6),
(317, 'TOCA', 6),
(318, 'TOGÜÍ', 6),
(319, 'TÓPAGA', 6),
(320, 'TOTA', 6),
(321, 'TUNJA', 6),
(322, 'TUNUNGUÁ', 6),
(323, 'TURMEQUÉ', 6),
(324, 'TUTA', 6),
(325, 'TUTAZÁ', 6),
(326, 'UMBITA', 6),
(327, 'VENTA QUEMADA', 6),
(328, 'VILLA DE LEYVA', 6),
(329, 'VIRACACHÁ', 6),
(330, 'ZETAQUIRA', 6),
(331, 'AGUADAS', 7),
(332, 'ANSERMA', 7),
(333, 'ARANZAZU', 7),
(334, 'BELALCAZAR', 7),
(335, 'CHINCHINÁ', 7),
(336, 'FILADELFIA', 7),
(337, 'LA DORADA', 7),
(338, 'LA MERCED', 7),
(339, 'MANIZALES', 7),
(340, 'MANZANARES', 7),
(341, 'MARMATO', 7),
(342, 'MARQUETALIA', 7),
(343, 'MARULANDA', 7),
(344, 'NEIRA', 7),
(345, 'NORCASIA', 7),
(346, 'PACORA', 7),
(347, 'PALESTINA', 7),
(348, 'PENSILVANIA', 7),
(349, 'RIOSUCIO', 7),
(350, 'RISARALDA', 7),
(351, 'SALAMINA', 7),
(352, 'SAMANA', 7),
(353, 'SAN JOSE', 7),
(354, 'SUPÍA', 7),
(355, 'VICTORIA', 7),
(356, 'VILLAMARÍA', 7),
(357, 'VITERBO', 7),
(358, 'ALBANIA', 8),
(359, 'BELÉN ANDAQUIES', 8),
(360, 'CARTAGENA DEL CHAIRA', 8),
(361, 'CURILLO', 8),
(362, 'EL DONCELLO', 8),
(363, 'EL PAUJIL', 8),
(364, 'FLORENCIA', 8),
(365, 'LA MONTAÑITA', 8),
(366, 'MILÁN', 8),
(367, 'MORELIA', 8),
(368, 'PUERTO RICO', 8),
(369, 'SAN  VICENTE DEL CAGUAN', 8),
(370, 'SAN JOSÉ DE FRAGUA', 8),
(371, 'SOLANO', 8),
(372, 'SOLITA', 8),
(373, 'VALPARAÍSO', 8),
(374, 'AGUAZUL', 9),
(375, 'CHAMEZA', 9),
(376, 'HATO COROZAL', 9),
(377, 'LA SALINA', 9),
(378, 'MANÍ', 9),
(379, 'MONTERREY', 9),
(380, 'NUNCHIA', 9),
(381, 'OROCUE', 9),
(382, 'PAZ DE ARIPORO', 9),
(383, 'PORE', 9),
(384, 'RECETOR', 9),
(385, 'SABANA LARGA', 9),
(386, 'SACAMA', 9),
(387, 'SAN LUIS DE PALENQUE', 9),
(388, 'TAMARA', 9),
(389, 'TAURAMENA', 9),
(390, 'TRINIDAD', 9),
(391, 'VILLANUEVA', 9),
(392, 'YOPAL', 9),
(393, 'ALMAGUER', 10),
(394, 'ARGELIA', 10),
(395, 'BALBOA', 10),
(396, 'BOLÍVAR', 10),
(397, 'BUENOS AIRES', 10),
(398, 'CAJIBIO', 10),
(399, 'CALDONO', 10),
(400, 'CALOTO', 10),
(401, 'CORINTO', 10),
(402, 'EL TAMBO', 10),
(403, 'FLORENCIA', 10),
(404, 'GUAPI', 10),
(405, 'INZA', 10),
(406, 'JAMBALÓ', 10),
(407, 'LA SIERRA', 10),
(408, 'LA VEGA', 10),
(409, 'LÓPEZ', 10),
(410, 'MERCADERES', 10),
(411, 'MIRANDA', 10),
(412, 'MORALES', 10),
(413, 'PADILLA', 10),
(414, 'PÁEZ', 10),
(415, 'PATIA (EL BORDO)', 10),
(416, 'PIAMONTE', 10),
(417, 'PIENDAMO', 10),
(418, 'POPAYÁN', 10),
(419, 'PUERTO TEJADA', 10),
(420, 'PURACE', 10),
(421, 'ROSAS', 10),
(422, 'SAN SEBASTIÁN', 10),
(423, 'SANTA ROSA', 10),
(424, 'SANTANDER DE QUILICHAO', 10),
(425, 'SILVIA', 10),
(426, 'SOTARA', 10),
(427, 'SUÁREZ', 10),
(428, 'SUCRE', 10),
(429, 'TIMBÍO', 10),
(430, 'TIMBIQUÍ', 10),
(431, 'TORIBIO', 10),
(432, 'TOTORO', 10),
(433, 'VILLA RICA', 10),
(434, 'AGUACHICA', 11),
(435, 'AGUSTÍN CODAZZI', 11),
(436, 'ASTREA', 11),
(437, 'BECERRIL', 11),
(438, 'BOSCONIA', 11),
(439, 'CHIMICHAGUA', 11),
(440, 'CHIRIGUANÁ', 11),
(441, 'CURUMANÍ', 11),
(442, 'EL COPEY', 11),
(443, 'EL PASO', 11),
(444, 'GAMARRA', 11),
(445, 'GONZÁLEZ', 11),
(446, 'LA GLORIA', 11),
(447, 'LA JAGUA IBIRICO', 11),
(448, 'MANAURE BALCÓN DEL CESAR', 11),
(449, 'PAILITAS', 11),
(450, 'PELAYA', 11),
(451, 'PUEBLO BELLO', 11),
(452, 'RÍO DE ORO', 11),
(453, 'ROBLES (LA PAZ)', 11),
(454, 'SAN ALBERTO', 11),
(455, 'SAN DIEGO', 11),
(456, 'SAN MARTÍN', 11),
(457, 'TAMALAMEQUE', 11),
(458, 'VALLEDUPAR', 11),
(459, 'ACANDI', 12),
(460, 'ALTO BAUDO (PIE DE PATO)', 12),
(461, 'ATRATO', 12),
(462, 'BAGADO', 12),
(463, 'BAHIA SOLANO (MUTIS)', 12),
(464, 'BAJO BAUDO (PIZARRO)', 12),
(465, 'BOJAYA (BELLAVISTA)', 12),
(466, 'CANTON DE SAN PABLO', 12),
(467, 'CARMEN DEL DARIEN', 12),
(468, 'CERTEGUI', 12),
(469, 'CONDOTO', 12),
(470, 'EL CARMEN', 12),
(471, 'ISTMINA', 12),
(472, 'JURADO', 12),
(473, 'LITORAL DEL SAN JUAN', 12),
(474, 'LLORO', 12),
(475, 'MEDIO ATRATO', 12),
(476, 'MEDIO BAUDO (BOCA DE PEPE)', 12),
(477, 'MEDIO SAN JUAN', 12),
(478, 'NOVITA', 12),
(479, 'NUQUI', 12),
(480, 'QUIBDO', 12),
(481, 'RIO IRO', 12),
(482, 'RIO QUITO', 12),
(483, 'RIOSUCIO', 12),
(484, 'SAN JOSE DEL PALMAR', 12),
(485, 'SIPI', 12),
(486, 'TADO', 12),
(487, 'UNGUIA', 12),
(488, 'UNIÓN PANAMERICANA', 12),
(489, 'AYAPEL', 13),
(490, 'BUENAVISTA', 13),
(491, 'CANALETE', 13),
(492, 'CERETÉ', 13),
(493, 'CHIMA', 13),
(494, 'CHINÚ', 13),
(495, 'CIENAGA DE ORO', 13),
(496, 'COTORRA', 13),
(497, 'LA APARTADA', 13),
(498, 'LORICA', 13),
(499, 'LOS CÓRDOBAS', 13),
(500, 'MOMIL', 13),
(501, 'MONTELÍBANO', 13),
(502, 'MONTERÍA', 13),
(503, 'MOÑITOS', 13),
(504, 'PLANETA RICA', 13),
(505, 'PUEBLO NUEVO', 13),
(506, 'PUERTO ESCONDIDO', 13),
(507, 'PUERTO LIBERTADOR', 13),
(508, 'PURÍSIMA', 13),
(509, 'SAHAGÚN', 13),
(510, 'SAN ANDRÉS SOTAVENTO', 13),
(511, 'SAN ANTERO', 13),
(512, 'SAN BERNARDO VIENTO', 13),
(513, 'SAN CARLOS', 13),
(514, 'SAN PELAYO', 13),
(515, 'TIERRALTA', 13),
(516, 'VALENCIA', 13),
(517, 'AGUA DE DIOS', 14),
(518, 'ALBAN', 14),
(519, 'ANAPOIMA', 14),
(520, 'ANOLAIMA', 14),
(521, 'ARBELAEZ', 14),
(522, 'BELTRÁN', 14),
(523, 'BITUIMA', 14),
(524, 'BOGOTÁ DC', 14),
(525, 'BOJACÁ', 14),
(526, 'CABRERA', 14),
(527, 'CACHIPAY', 14),
(528, 'CAJICÁ', 14),
(529, 'CAPARRAPÍ', 14),
(530, 'CAQUEZA', 14),
(531, 'CARMEN DE CARUPA', 14),
(532, 'CHAGUANÍ', 14),
(533, 'CHIA', 14),
(534, 'CHIPAQUE', 14),
(535, 'CHOACHÍ', 14),
(536, 'CHOCONTÁ', 14),
(537, 'COGUA', 14),
(538, 'COTA', 14),
(539, 'CUCUNUBÁ', 14),
(540, 'EL COLEGIO', 14),
(541, 'EL PEÑÓN', 14),
(542, 'EL ROSAL1', 14),
(543, 'FACATATIVA', 14),
(544, 'FÓMEQUE', 14),
(545, 'FOSCA', 14),
(546, 'FUNZA', 14),
(547, 'FÚQUENE', 14),
(548, 'FUSAGASUGA', 14),
(549, 'GACHALÁ', 14),
(550, 'GACHANCIPÁ', 14),
(551, 'GACHETA', 14),
(552, 'GAMA', 14),
(553, 'GIRARDOT', 14),
(554, 'GRANADA2', 14),
(555, 'GUACHETÁ', 14),
(556, 'GUADUAS', 14),
(557, 'GUASCA', 14),
(558, 'GUATAQUÍ', 14),
(559, 'GUATAVITA', 14),
(560, 'GUAYABAL DE SIQUIMA', 14),
(561, 'GUAYABETAL', 14),
(562, 'GUTIÉRREZ', 14),
(563, 'JERUSALÉN', 14),
(564, 'JUNÍN', 14),
(565, 'LA CALERA', 14),
(566, 'LA MESA', 14),
(567, 'LA PALMA', 14),
(568, 'LA PEÑA', 14),
(569, 'LA VEGA', 14),
(570, 'LENGUAZAQUE', 14),
(571, 'MACHETÁ', 14),
(572, 'MADRID', 14),
(573, 'MANTA', 14),
(574, 'MEDINA', 14),
(575, 'MOSQUERA', 14),
(576, 'NARIÑO', 14),
(577, 'NEMOCÓN', 14),
(578, 'NILO', 14),
(579, 'NIMAIMA', 14),
(580, 'NOCAIMA', 14),
(581, 'OSPINA PÉREZ', 14),
(582, 'PACHO', 14),
(583, 'PAIME', 14),
(584, 'PANDI', 14),
(585, 'PARATEBUENO', 14),
(586, 'PASCA', 14),
(587, 'PUERTO SALGAR', 14),
(588, 'PULÍ', 14),
(589, 'QUEBRADANEGRA', 14),
(590, 'QUETAME', 14),
(591, 'QUIPILE', 14),
(592, 'RAFAEL REYES', 14),
(593, 'RICAURTE', 14),
(594, 'SAN  ANTONIO DEL  TEQUENDAMA', 14),
(595, 'SAN BERNARDO', 14),
(596, 'SAN CAYETANO', 14),
(597, 'SAN FRANCISCO', 14),
(598, 'SAN JUAN DE RIOSECO', 14),
(599, 'SASAIMA', 14),
(600, 'SESQUILÉ', 14),
(601, 'SIBATÉ', 14),
(602, 'SILVANIA', 14),
(603, 'SIMIJACA', 14),
(604, 'SOACHA', 14),
(605, 'SOPO', 14),
(606, 'SUBACHOQUE', 14),
(607, 'SUESCA', 14),
(608, 'SUPATÁ', 14),
(609, 'SUSA', 14),
(610, 'SUTATAUSA', 14),
(611, 'TABIO', 14),
(612, 'TAUSA', 14),
(613, 'TENA', 14),
(614, 'TENJO', 14),
(615, 'TIBACUY', 14),
(616, 'TIBIRITA', 14),
(617, 'TOCAIMA', 14),
(618, 'TOCANCIPÁ', 14),
(619, 'TOPAIPÍ', 14),
(620, 'UBALÁ', 14),
(621, 'UBAQUE', 14),
(622, 'UBATÉ', 14),
(623, 'UNE', 14),
(624, 'UTICA', 14),
(625, 'VERGARA', 14),
(626, 'VIANI', 14),
(627, 'VILLA GOMEZ', 14),
(628, 'VILLA PINZÓN', 14),
(629, 'VILLETA', 14),
(630, 'VIOTA', 14),
(631, 'YACOPÍ', 14),
(632, 'ZIPACÓN', 14),
(633, 'ZIPAQUIRÁ', 14),
(634, 'BARRANCO MINAS', 15),
(635, 'CACAHUAL', 15),
(636, 'INÍRIDA', 15),
(637, 'LA GUADALUPE', 15),
(638, 'MAPIRIPANA', 15),
(639, 'MORICHAL', 15),
(640, 'PANA PANA', 15),
(641, 'PUERTO COLOMBIA', 15),
(642, 'SAN FELIPE', 15),
(643, 'CALAMAR', 16),
(644, 'EL RETORNO', 16),
(645, 'MIRAFLOREZ', 16),
(646, 'SAN JOSÉ DEL GUAVIARE', 16),
(647, 'ACEVEDO', 17),
(648, 'AGRADO', 17),
(649, 'AIPE', 17),
(650, 'ALGECIRAS', 17),
(651, 'ALTAMIRA', 17),
(652, 'BARAYA', 17),
(653, 'CAMPO ALEGRE', 17),
(654, 'COLOMBIA', 17),
(655, 'ELIAS', 17),
(656, 'GARZÓN', 17),
(657, 'GIGANTE', 17),
(658, 'GUADALUPE', 17),
(659, 'HOBO', 17),
(660, 'IQUIRA', 17),
(661, 'ISNOS', 17),
(662, 'LA ARGENTINA', 17),
(663, 'LA PLATA', 17),
(664, 'NATAGA', 17),
(665, 'NEIVA', 17),
(666, 'OPORAPA', 17),
(667, 'PAICOL', 17),
(668, 'PALERMO', 17),
(669, 'PALESTINA', 17),
(670, 'PITAL', 17),
(671, 'PITALITO', 17),
(672, 'RIVERA', 17),
(673, 'SALADO BLANCO', 17),
(674, 'SAN AGUSTÍN', 17),
(675, 'SANTA MARIA', 17),
(676, 'SUAZA', 17),
(677, 'TARQUI', 17),
(678, 'TELLO', 17),
(679, 'TERUEL', 17),
(680, 'TESALIA', 17),
(681, 'TIMANA', 17),
(682, 'VILLAVIEJA', 17),
(683, 'YAGUARA', 17),
(684, 'ALBANIA', 18),
(685, 'BARRANCAS', 18),
(686, 'DIBULLA', 18),
(687, 'DISTRACCIÓN', 18),
(688, 'EL MOLINO', 18),
(689, 'FONSECA', 18),
(690, 'HATO NUEVO', 18),
(691, 'LA JAGUA DEL PILAR', 18),
(692, 'MAICAO', 18),
(693, 'MANAURE', 18),
(694, 'RIOHACHA', 18),
(695, 'SAN JUAN DEL CESAR', 18),
(696, 'URIBIA', 18),
(697, 'URUMITA', 18),
(698, 'VILLANUEVA', 18),
(699, 'ALGARROBO', 19),
(700, 'ARACATACA', 19),
(701, 'ARIGUANI', 19),
(702, 'CERRO SAN ANTONIO', 19),
(703, 'CHIVOLO', 19),
(704, 'CIENAGA', 19),
(705, 'CONCORDIA', 19),
(706, 'EL BANCO', 19),
(707, 'EL PIÑON', 19),
(708, 'EL RETEN', 19),
(709, 'FUNDACION', 19),
(710, 'GUAMAL', 19),
(711, 'NUEVA GRANADA', 19),
(712, 'PEDRAZA', 19),
(713, 'PIJIÑO DEL CARMEN', 19),
(714, 'PIVIJAY', 19),
(715, 'PLATO', 19),
(716, 'PUEBLO VIEJO', 19),
(717, 'REMOLINO', 19),
(718, 'SABANAS DE SAN ANGEL', 19),
(719, 'SALAMINA', 19),
(720, 'SAN SEBASTIAN DE BUENAVISTA', 19),
(721, 'SAN ZENON', 19),
(722, 'SANTA ANA', 19),
(723, 'SANTA BARBARA DE PINTO', 19),
(724, 'SANTA MARTA', 19),
(725, 'SITIONUEVO', 19),
(726, 'TENERIFE', 19),
(727, 'ZAPAYAN', 19),
(728, 'ZONA BANANERA', 19),
(729, 'ACACIAS', 20),
(730, 'BARRANCA DE UPIA', 20),
(731, 'CABUYARO', 20),
(732, 'CASTILLA LA NUEVA', 20),
(733, 'CUBARRAL', 20),
(734, 'CUMARAL', 20),
(735, 'EL CALVARIO', 20),
(736, 'EL CASTILLO', 20),
(737, 'EL DORADO', 20),
(738, 'FUENTE DE ORO', 20),
(739, 'GRANADA', 20),
(740, 'GUAMAL', 20),
(741, 'LA MACARENA', 20),
(742, 'LA URIBE', 20),
(743, 'LEJANÍAS', 20),
(744, 'MAPIRIPÁN', 20),
(745, 'MESETAS', 20),
(746, 'PUERTO CONCORDIA', 20),
(747, 'PUERTO GAITÁN', 20),
(748, 'PUERTO LLERAS', 20),
(749, 'PUERTO LÓPEZ', 20),
(750, 'PUERTO RICO', 20),
(751, 'RESTREPO', 20),
(752, 'SAN  JUAN DE ARAMA', 20),
(753, 'SAN CARLOS GUAROA', 20),
(754, 'SAN JUANITO', 20),
(755, 'SAN MARTÍN', 20),
(756, 'VILLAVICENCIO', 20),
(757, 'VISTA HERMOSA', 20),
(758, 'ALBAN', 21),
(759, 'ALDAÑA', 21),
(760, 'ANCUYA', 21),
(761, 'ARBOLEDA', 21),
(762, 'BARBACOAS', 21),
(763, 'BELEN', 21),
(764, 'BUESACO', 21),
(765, 'CHACHAGUI', 21),
(766, 'COLON (GENOVA)', 21),
(767, 'CONSACA', 21),
(768, 'CONTADERO', 21),
(769, 'CORDOBA', 21),
(770, 'CUASPUD', 21),
(771, 'CUMBAL', 21),
(772, 'CUMBITARA', 21),
(773, 'EL CHARCO', 21),
(774, 'EL PEÑOL', 21),
(775, 'EL ROSARIO', 21),
(776, 'EL TABLÓN', 21),
(777, 'EL TAMBO', 21),
(778, 'FUNES', 21),
(779, 'GUACHUCAL', 21),
(780, 'GUAITARILLA', 21),
(781, 'GUALMATAN', 21),
(782, 'ILES', 21),
(783, 'IMUES', 21),
(784, 'IPIALES', 21),
(785, 'LA CRUZ', 21),
(786, 'LA FLORIDA', 21),
(787, 'LA LLANADA', 21),
(788, 'LA TOLA', 21),
(789, 'LA UNION', 21),
(790, 'LEIVA', 21),
(791, 'LINARES', 21),
(792, 'LOS ANDES', 21),
(793, 'MAGUI', 21),
(794, 'MALLAMA', 21),
(795, 'MOSQUEZA', 21),
(796, 'NARIÑO', 21),
(797, 'OLAYA HERRERA', 21),
(798, 'OSPINA', 21),
(799, 'PASTO', 21),
(800, 'PIZARRO', 21),
(801, 'POLICARPA', 21),
(802, 'POTOSI', 21),
(803, 'PROVIDENCIA', 21),
(804, 'PUERRES', 21),
(805, 'PUPIALES', 21),
(806, 'RICAURTE', 21),
(807, 'ROBERTO PAYAN', 21),
(808, 'SAMANIEGO', 21),
(809, 'SAN BERNARDO', 21),
(810, 'SAN LORENZO', 21),
(811, 'SAN PABLO', 21),
(812, 'SAN PEDRO DE CARTAGO', 21),
(813, 'SANDONA', 21),
(814, 'SANTA BARBARA', 21),
(815, 'SANTACRUZ', 21),
(816, 'SAPUYES', 21),
(817, 'TAMINANGO', 21),
(818, 'TANGUA', 21),
(819, 'TUMACO', 21),
(820, 'TUQUERRES', 21),
(821, 'YACUANQUER', 21),
(822, 'ABREGO', 22),
(823, 'ARBOLEDAS', 22),
(824, 'BOCHALEMA', 22),
(825, 'BUCARASICA', 22),
(826, 'CÁCHIRA', 22),
(827, 'CÁCOTA', 22),
(828, 'CHINÁCOTA', 22),
(829, 'CHITAGÁ', 22),
(830, 'CONVENCIÓN', 22),
(831, 'CÚCUTA', 22),
(832, 'CUCUTILLA', 22),
(833, 'DURANIA', 22),
(834, 'EL CARMEN', 22),
(835, 'EL TARRA', 22),
(836, 'EL ZULIA', 22),
(837, 'GRAMALOTE', 22),
(838, 'HACARI', 22),
(839, 'HERRÁN', 22),
(840, 'LA ESPERANZA', 22),
(841, 'LA PLAYA', 22),
(842, 'LABATECA', 22),
(843, 'LOS PATIOS', 22),
(844, 'LOURDES', 22),
(845, 'MUTISCUA', 22),
(846, 'OCAÑA', 22),
(847, 'PAMPLONA', 22),
(848, 'PAMPLONITA', 22),
(849, 'PUERTO SANTANDER', 22),
(850, 'RAGONVALIA', 22),
(851, 'SALAZAR', 22),
(852, 'SAN CALIXTO', 22),
(853, 'SAN CAYETANO', 22),
(854, 'SANTIAGO', 22),
(855, 'SARDINATA', 22),
(856, 'SILOS', 22),
(857, 'TEORAMA', 22),
(858, 'TIBÚ', 22),
(859, 'TOLEDO', 22),
(860, 'VILLA CARO', 22),
(861, 'VILLA DEL ROSARIO', 22),
(862, 'COLÓN', 23),
(863, 'MOCOA', 23),
(864, 'ORITO', 23),
(865, 'PUERTO ASÍS', 23),
(866, 'PUERTO CAYCEDO', 23),
(867, 'PUERTO GUZMÁN', 23),
(868, 'PUERTO LEGUÍZAMO', 23),
(869, 'SAN FRANCISCO', 23),
(870, 'SAN MIGUEL', 23),
(871, 'SANTIAGO', 23),
(872, 'SIBUNDOY', 23),
(873, 'VALLE DEL GUAMUEZ', 23),
(874, 'VILLAGARZÓN', 23),
(875, 'ARMENIA', 24),
(876, 'BUENAVISTA', 24),
(877, 'CALARCÁ', 24),
(878, 'CIRCASIA', 24),
(879, 'CÓRDOBA', 24),
(880, 'FILANDIA', 24),
(881, 'GÉNOVA', 24),
(882, 'LA TEBAIDA', 24),
(883, 'MONTENEGRO', 24),
(884, 'PIJAO', 24),
(885, 'QUIMBAYA', 24),
(886, 'SALENTO', 24),
(887, 'APIA', 25),
(888, 'BALBOA', 25),
(889, 'BELÉN DE UMBRÍA', 25),
(890, 'DOS QUEBRADAS', 25),
(891, 'GUATICA', 25),
(892, 'LA CELIA', 25),
(893, 'LA VIRGINIA', 25),
(894, 'MARSELLA', 25),
(895, 'MISTRATO', 25),
(896, 'PEREIRA', 25),
(897, 'PUEBLO RICO', 25),
(898, 'QUINCHÍA', 25),
(899, 'SANTA ROSA DE CABAL', 25),
(900, 'SANTUARIO', 25),
(901, 'PROVIDENCIA', 26),
(902, 'SAN ANDRES', 26),
(903, 'SANTA CATALINA', 26),
(904, 'AGUADA', 27),
(905, 'ALBANIA', 27),
(906, 'ARATOCA', 27),
(907, 'BARBOSA', 27),
(908, 'BARICHARA', 27),
(909, 'BARRANCABERMEJA', 27),
(910, 'BETULIA', 27),
(911, 'BOLÍVAR', 27),
(912, 'BUCARAMANGA', 27),
(913, 'CABRERA', 27),
(914, 'CALIFORNIA', 27),
(915, 'CAPITANEJO', 27),
(916, 'CARCASI', 27),
(917, 'CEPITA', 27),
(918, 'CERRITO', 27),
(919, 'CHARALÁ', 27),
(920, 'CHARTA', 27),
(921, 'CHIMA', 27),
(922, 'CHIPATÁ', 27),
(923, 'CIMITARRA', 27),
(924, 'CONCEPCIÓN', 27),
(925, 'CONFINES', 27),
(926, 'CONTRATACIÓN', 27),
(927, 'COROMORO', 27),
(928, 'CURITÍ', 27),
(929, 'EL CARMEN', 27),
(930, 'EL GUACAMAYO', 27),
(931, 'EL PEÑÓN', 27),
(932, 'EL PLAYÓN', 27),
(933, 'ENCINO', 27),
(934, 'ENCISO', 27),
(935, 'FLORIÁN', 27),
(936, 'FLORIDABLANCA', 27),
(937, 'GALÁN', 27),
(938, 'GAMBITA', 27),
(939, 'GIRÓN', 27),
(940, 'GUACA', 27),
(941, 'GUADALUPE', 27),
(942, 'GUAPOTA', 27),
(943, 'GUAVATÁ', 27),
(944, 'GUEPSA', 27),
(945, 'HATO', 27),
(946, 'JESÚS MARIA', 27),
(947, 'JORDÁN', 27),
(948, 'LA BELLEZA', 27),
(949, 'LA PAZ', 27),
(950, 'LANDAZURI', 27),
(951, 'LEBRIJA', 27),
(952, 'LOS SANTOS', 27),
(953, 'MACARAVITA', 27),
(954, 'MÁLAGA', 27),
(955, 'MATANZA', 27),
(956, 'MOGOTES', 27),
(957, 'MOLAGAVITA', 27),
(958, 'OCAMONTE', 27),
(959, 'OIBA', 27),
(960, 'ONZAGA', 27),
(961, 'PALMAR', 27),
(962, 'PALMAS DEL SOCORRO', 27),
(963, 'PÁRAMO', 27),
(964, 'PIEDECUESTA', 27),
(965, 'PINCHOTE', 27),
(966, 'PUENTE NACIONAL', 27),
(967, 'PUERTO PARRA', 27),
(968, 'PUERTO WILCHES', 27),
(969, 'RIONEGRO', 27),
(970, 'SABANA DE TORRES', 27),
(971, 'SAN ANDRÉS', 27),
(972, 'SAN BENITO', 27),
(973, 'SAN GIL', 27),
(974, 'SAN JOAQUÍN', 27),
(975, 'SAN JOSÉ DE MIRANDA', 27),
(976, 'SAN MIGUEL', 27),
(977, 'SAN VICENTE DE CHUCURÍ', 27),
(978, 'SANTA BÁRBARA', 27),
(979, 'SANTA HELENA', 27),
(980, 'SIMACOTA', 27),
(981, 'SOCORRO', 27),
(982, 'SUAITA', 27),
(983, 'SUCRE', 27),
(984, 'SURATA', 27),
(985, 'TONA', 27),
(986, 'VALLE SAN JOSÉ', 27),
(987, 'VÉLEZ', 27),
(988, 'VETAS', 27),
(989, 'VILLANUEVA', 27),
(990, 'ZAPATOCA', 27),
(991, 'BUENAVISTA', 28),
(992, 'CAIMITO', 28),
(993, 'CHALÁN', 28),
(994, 'COLOSO', 28),
(995, 'COROZAL', 28),
(996, 'EL ROBLE', 28),
(997, 'GALERAS', 28),
(998, 'GUARANDA', 28),
(999, 'LA UNIÓN', 28),
(1000, 'LOS PALMITOS', 28),
(1001, 'MAJAGUAL', 28),
(1002, 'MORROA', 28),
(1003, 'OVEJAS', 28),
(1004, 'PALMITO', 28),
(1005, 'SAMPUES', 28),
(1006, 'SAN BENITO ABAD', 28),
(1007, 'SAN JUAN DE BETULIA', 28),
(1008, 'SAN MARCOS', 28),
(1009, 'SAN ONOFRE', 28),
(1010, 'SAN PEDRO', 28),
(1011, 'SINCÉ', 28),
(1012, 'SINCELEJO', 28),
(1013, 'SUCRE', 28),
(1014, 'TOLÚ', 28),
(1015, 'TOLUVIEJO', 28),
(1016, 'ALPUJARRA', 29),
(1017, 'ALVARADO', 29),
(1018, 'AMBALEMA', 29),
(1019, 'ANZOATEGUI', 29),
(1020, 'ARMERO (GUAYABAL)', 29),
(1021, 'ATACO', 29),
(1022, 'CAJAMARCA', 29),
(1023, 'CARMEN DE APICALÁ', 29),
(1024, 'CASABIANCA', 29),
(1025, 'CHAPARRAL', 29),
(1026, 'COELLO', 29),
(1027, 'COYAIMA', 29),
(1028, 'CUNDAY', 29),
(1029, 'DOLORES', 29),
(1030, 'ESPINAL', 29),
(1031, 'FALÁN', 29),
(1032, 'FLANDES', 29),
(1033, 'FRESNO', 29),
(1034, 'GUAMO', 29),
(1035, 'HERVEO', 29),
(1036, 'HONDA', 29),
(1037, 'IBAGUÉ', 29),
(1038, 'ICONONZO', 29),
(1039, 'LÉRIDA', 29),
(1040, 'LÍBANO', 29),
(1041, 'MARIQUITA', 29),
(1042, 'MELGAR', 29),
(1043, 'MURILLO', 29),
(1044, 'NATAGAIMA', 29),
(1045, 'ORTEGA', 29),
(1046, 'PALOCABILDO', 29),
(1047, 'PIEDRAS PLANADAS', 29),
(1048, 'PRADO', 29),
(1049, 'PURIFICACIÓN', 29),
(1050, 'RIOBLANCO', 29),
(1051, 'RONCESVALLES', 29),
(1052, 'ROVIRA', 29),
(1053, 'SALDAÑA', 29),
(1054, 'SAN ANTONIO', 29),
(1055, 'SAN LUIS', 29),
(1056, 'SANTA ISABEL', 29),
(1057, 'SUÁREZ', 29),
(1058, 'VALLE DE SAN JUAN', 29),
(1059, 'VENADILLO', 29),
(1060, 'VILLAHERMOSA', 29),
(1061, 'VILLARRICA', 29),
(1062, 'ALCALÁ', 30),
(1063, 'ANDALUCÍA', 30),
(1064, 'ANSERMA NUEVO', 30),
(1065, 'ARGELIA', 30),
(1066, 'BOLÍVAR', 30),
(1067, 'BUENAVENTURA', 30),
(1068, 'BUGA', 30),
(1069, 'BUGALAGRANDE', 30),
(1070, 'CAICEDONIA', 30),
(1071, 'CALI', 30),
(1072, 'CALIMA (DARIEN)', 30),
(1073, 'CANDELARIA', 30),
(1074, 'CARTAGO', 30),
(1075, 'DAGUA', 30),
(1076, 'EL AGUILA', 30),
(1077, 'EL CAIRO', 30),
(1078, 'EL CERRITO', 30),
(1079, 'EL DOVIO', 30),
(1080, 'FLORIDA', 30),
(1081, 'GINEBRA GUACARI', 30),
(1082, 'JAMUNDÍ', 30),
(1083, 'LA CUMBRE', 30),
(1084, 'LA UNIÓN', 30),
(1085, 'LA VICTORIA', 30),
(1086, 'OBANDO', 30),
(1087, 'PALMIRA', 30),
(1088, 'PRADERA', 30),
(1089, 'RESTREPO', 30),
(1090, 'RIO FRÍO', 30),
(1091, 'ROLDANILLO', 30),
(1092, 'SAN PEDRO', 30),
(1093, 'SEVILLA', 30),
(1094, 'TORO', 30),
(1095, 'TRUJILLO', 30),
(1096, 'TULÚA', 30),
(1097, 'ULLOA', 30),
(1098, 'VERSALLES', 30),
(1099, 'VIJES', 30),
(1100, 'YOTOCO', 30),
(1101, 'YUMBO', 30),
(1102, 'ZARZAL', 30),
(1103, 'CARURÚ', 31),
(1104, 'MITÚ', 31),
(1105, 'PACOA', 31),
(1106, 'PAPUNAUA', 31),
(1107, 'TARAIRA', 31),
(1108, 'YAVARATÉ', 31),
(1109, 'CUMARIBO', 32),
(1110, 'LA PRIMAVERA', 32),
(1111, 'PUERTO CARREÑO', 32),
(1112, 'SANTA ROSALIA', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE IF NOT EXISTS `contrato` (
  `idContrato` int(11) NOT NULL,
  `identificacionAfiliado` varchar(12) NOT NULL,
  `fechaExpedicion` date NOT NULL,
  `lugarExpedicion` int(11) NOT NULL,
  `valorCuota` double NOT NULL,
  `frecuenciaPago` varchar(100) NOT NULL,
  `aPartir` date NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`idContrato`, `identificacionAfiliado`, `fechaExpedicion`, `lugarExpedicion`, `valorCuota`, `frecuenciaPago`, `aPartir`, `estado`) VALUES
(1212, '3333333', '2015-09-25', 436, 10000, 'Semanal', '2015-10-12', 1),
(2343, '22457098', '2015-09-25', 644, 12000, 'Semanal', '2015-10-13', 1),
(3212, '22634522', '2015-09-25', 458, 12000, 'Semanal', '2015-11-12', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `codigoDepartamento` int(11) NOT NULL,
  `nombreDepartamento` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`codigoDepartamento`, `nombreDepartamento`) VALUES
(1, 'AMAZONAS'),
(2, 'ANTIOQUIA'),
(3, 'ARAUCA'),
(4, 'ATLÁNTICO'),
(5, 'BOLÍVAR'),
(6, 'BOYACÁ'),
(7, 'CALDAS'),
(8, 'CAQUETÁ'),
(9, 'CASANARE'),
(10, 'CAUCA'),
(11, 'CESAR'),
(12, 'CHOCÓ'),
(13, 'CÓRDOBA'),
(14, 'CUNDINAMARCA'),
(15, 'GUAINÍA'),
(16, 'GUAVIARE'),
(17, 'HUILA'),
(18, 'LA GUAJIRA'),
(19, 'MAGDALENA'),
(20, 'META'),
(21, 'NARIÑO'),
(22, 'NORTE DE SANTANDER'),
(23, 'PUTUMAYO'),
(24, 'QUINDÍO'),
(25, 'RISARALDA'),
(26, 'SAN ANDRÉS Y ROVIDENCIA'),
(27, 'SANTANDER'),
(28, 'SUCRE'),
(29, 'TOLIMA'),
(30, 'VALLE DEL CAUCA'),
(31, 'VAUPÉS'),
(32, 'VICHADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `identificacionEmpleado` varchar(12) NOT NULL,
  `nombreEmpleado` varchar(255) NOT NULL,
  `apellido1Empleado` varchar(255) NOT NULL,
  `apellido2Empleado` varchar(255) NOT NULL,
  `direccionEmpleado` varchar(50) NOT NULL,
  `telefonoEmpleado` varchar(50) NOT NULL,
  `movilEmpleado` varchar(50) NOT NULL,
  `emailEmpleado` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL,
  `codigoCiudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`identificacionEmpleado`, `nombreEmpleado`, `apellido1Empleado`, `apellido2Empleado`, `direccionEmpleado`, `telefonoEmpleado`, `movilEmpleado`, `emailEmpleado`, `estado`, `codigoCiudad`) VALUES
('1065608015', 'Luz Aura', 'Alvarez', 'Ariza', 'Manzana 61 Casa 13 Garupal', '5710994', '3007629574', 'luchy01050@hotmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallecimientos`
--

CREATE TABLE IF NOT EXISTS `fallecimientos` (
  `codigoFallecimiento` int(12) NOT NULL,
  `identificacionUsuario` varchar(12) NOT NULL,
  `tipoUsuario` varchar(20) NOT NULL,
  `fechaFallecimiento` date NOT NULL,
  `actaDefuncion` longblob,
  `tipoImagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obituarios`
--

CREATE TABLE IF NOT EXISTS `obituarios` (
  `idObituario` int(11) NOT NULL,
  `identificacionFallecido` varchar(150) NOT NULL,
  `fechaExequias` date NOT NULL,
  `lugarExequias` varchar(200) NOT NULL,
  `horaExequias` timestamp NOT NULL,
  `destinoFinal` varchar(150) NOT NULL,
  `hora` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `idPago` int(11) NOT NULL,
  `idContrato` int(11) NOT NULL,
  `valorPago` double DEFAULT NULL,
  `fechaPago` date DEFAULT NULL,
  `concepto` varchar(100) DEFAULT NULL,
  `mesPago` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`idPago`, `idContrato`, `valorPago`, `fechaPago`, `concepto`, `mesPago`) VALUES
(15292, 1212, 10000, '2015-09-29', 'Pago cuota', 'Septiembre'),
(15293, 3212, 10000, '2015-09-29', 'Pgo cuota', 'Septiembre'),
(15297, 1212, 10000, '2015-10-29', 'Pago Cuota ', 'Octubre'),
(75321, 1212, 10000, '2015-10-02', 'Pago cuota atrasada', 'Noviembre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentescos`
--

CREATE TABLE IF NOT EXISTS `parentescos` (
  `codigoParentesco` int(11) NOT NULL,
  `nombreParentesco` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `parentescos`
--

INSERT INTO `parentescos` (`codigoParentesco`, `nombreParentesco`) VALUES
(1, 'Padres'),
(2, 'Hijo(a)'),
(3, 'Cónyuge'),
(4, 'Suegro(a)'),
(5, 'Hermano(a)'),
(6, 'Nieto(a)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `idPerfil` int(11) NOT NULL,
  `perfil` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idPerfil`, `perfil`) VALUES
(1, 'Admin'),
(2, 'Afiliado'),
(3, 'Asesor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `idServicio` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`idServicio`, `nombre`, `descripcion`, `estado`) VALUES
(1, 'Cofre mortuorio', '', 1),
(2, 'Preparación del cuerpo ', '24 horas', 1),
(3, 'Sala de velación', 'Cuerpo presente 24 horas', 1),
(4, 'Implemento de velación residencial ', '', 1),
(5, 'Arreglo floral', '', 1),
(6, 'Kit Cafeteria', '', 1),
(7, 'Atención y orientación permanente', '', 1),
(8, 'Servicio de telefonía local', '', 0),
(9, 'Avisos radiales', '', 1),
(10, 'Carteles', '30', 1),
(11, 'Libro de asistencia', '', 1),
(12, 'Misa de exequias', '', 1),
(13, 'Carroza fúnebre', '', 1),
(14, 'Derecho a bóveda', '', 1),
(15, 'Cinta para la carroza', '', 1),
(16, 'Diligencias notariales', '', 1),
(17, 'Traslado', 'Perímetro urbano y a nivel nacional', 1),
(18, 'Cementerio virtual', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `idPerfil` int(11) NOT NULL,
  `identificacion` varchar(12) NOT NULL,
  `nombreUsuario` varchar(15) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `idPerfil`, `identificacion`, `nombreUsuario`, `contrasena`) VALUES
(1, 1, '1065608015', 'ingluza', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 2, '1111111111', '1111111111', 'e11170b8cbd2d74102651cb967fa28e5'),
(3, 2, '20453124', '20453124', 'dc725ee35c07688623a46add893dfb3f'),
(4, 2, '1056798231', '1056798231', 'b81a14fd3c741986b132cecc4e278d0f'),
(6, 2, '8345232', '8345232', '8f7d2cefa111a0884bb6a90419996358'),
(7, 2, '222222', '222222', 'e3ceb5881a0a1fdaad01296d7554868d'),
(8, 2, '33333', '33333', 'b7bc2a2f5bb6d521e64c8974c143e9a0'),
(9, 2, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(10, 2, '43434343', '43434343', '8af5b7d44009cb63d6409d64acef0e01'),
(11, 2, '3900234', '3900234', '0b45f6bdd143736814658fcd95cd3506'),
(12, 2, '12532145', '12532145', '84856120955e6129dc9eec665e5401fe'),
(13, 2, '1054234121', '1054234121', 'e5037a17ab93da89d21f4a71e1e2ea30'),
(14, 2, '111111', '111111', '96e79218965eb72c92a549dd5a330112'),
(15, 2, '3333333', '3333333', '074fd28eff0f5adea071694061739e55'),
(16, 2, '34212567', '34212567', '56224475f4cea3c32c18281b43b0a5e6'),
(17, 2, '22457098', '22457098', 'cb50b5ec1409ffc06b7912a0a4d963c9'),
(18, 2, '22634522', '22634522', 'f2d7d745aa7e8c4f94b204e9b824cb37'),
(19, 2, '1065604234', '1065604234', '0e861b36fdb0e356483b1b1cb64aa4cc');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `afiliados`
--
ALTER TABLE `afiliados`
  ADD PRIMARY KEY (`identificacionAfiliado`),
  ADD KEY `fk_afiliados_ciudades1_idx` (`codigoCiudad`),
  ADD KEY `fk_afiliados_ciudad` (`lugarExpedicion`);

--
-- Indices de la tabla `afiliadosbeneficiarios`
--
ALTER TABLE `afiliadosbeneficiarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `identificacionAfiliado_idx` (`identificacionAfiliado`),
  ADD KEY `identificacionBeneficiario_idx` (`identificacionBeneficiario`),
  ADD KEY `codigoParentesco_idx` (`codigoParentesco`);

--
-- Indices de la tabla `auditoria`
--
ALTER TABLE `auditoria`
  ADD PRIMARY KEY (`idRegistro`);

--
-- Indices de la tabla `beneficiarios`
--
ALTER TABLE `beneficiarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`codigoCiudad`),
  ADD KEY `codigoDepartamento_idx` (`codigoDepartamento`),
  ADD KEY `codigoDepartamento_idx1` (`codigoDepartamento`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`idContrato`,`identificacionAfiliado`),
  ADD KEY `fk_Contrato_afiliados1_idx` (`identificacionAfiliado`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`codigoDepartamento`);

--
-- Indices de la tabla `fallecimientos`
--
ALTER TABLE `fallecimientos`
  ADD PRIMARY KEY (`codigoFallecimiento`);

--
-- Indices de la tabla `obituarios`
--
ALTER TABLE `obituarios`
  ADD PRIMARY KEY (`idObituario`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`idPago`,`idContrato`),
  ADD KEY `fk_Pagos_Contrato1_idx` (`idContrato`);

--
-- Indices de la tabla `parentescos`
--
ALTER TABLE `parentescos`
  ADD PRIMARY KEY (`codigoParentesco`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idPerfil`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idServicio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`),
  ADD KEY `fk_Usuarios_perfil1_idx` (`idPerfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `afiliadosbeneficiarios`
--
ALTER TABLE `afiliadosbeneficiarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `auditoria`
--
ALTER TABLE `auditoria`
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `beneficiarios`
--
ALTER TABLE `beneficiarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `codigoCiudad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1113;
--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `codigoDepartamento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `fallecimientos`
--
ALTER TABLE `fallecimientos`
  MODIFY `codigoFallecimiento` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `obituarios`
--
ALTER TABLE `obituarios`
  MODIFY `idObituario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `parentescos`
--
ALTER TABLE `parentescos`
  MODIFY `codigoParentesco` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `idServicio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `afiliados`
--
ALTER TABLE `afiliados`
  ADD CONSTRAINT `fk_afiliados_ciudad` FOREIGN KEY (`lugarExpedicion`) REFERENCES `ciudades` (`codigoCiudad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_afiliados_ciudades1` FOREIGN KEY (`codigoCiudad`) REFERENCES `ciudades` (`codigoCiudad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
