-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2015 a las 09:38:55
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `adopcion4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adopcion`
--

CREATE TABLE IF NOT EXISTS `adopcion` (
`id_adopcion` int(11) NOT NULL,
  `id_animal` int(11) DEFAULT NULL,
  `id_rut` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_adopcion` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `adopcion`
--

INSERT INTO `adopcion` (`id_adopcion`, `id_animal`, `id_rut`, `fecha_adopcion`) VALUES
(1, 1, '18414437-9', '2014-12-16'),
(2, 1, '13800414-7', '2015-01-12'),
(3, 3, '10387850-0', '2015-05-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE IF NOT EXISTS `animal` (
`id_animal` int(11) NOT NULL,
  `numero_chip` int(11) DEFAULT NULL,
  `nombre_animal` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `id_especie` int(11) NOT NULL,
  `id_raza` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `genero_animal` enum('Sin definir','Macho','Hembra') COLLATE utf8_spanish_ci DEFAULT NULL,
  `edad_animal` int(11) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `desparasitado` enum('Sin definir','Si','No') COLLATE utf8_spanish_ci DEFAULT NULL,
  `esterilizado` enum('Sin definir','Si','No') COLLATE utf8_spanish_ci DEFAULT NULL,
  `vacunas` text COLLATE utf8_spanish_ci,
  `observaciones` text COLLATE utf8_spanish_ci,
  `fecha_ingreso` date NOT NULL,
  `image` varchar(1024) COLLATE utf8_spanish_ci NOT NULL,
  `adoptado` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`id_animal`, `numero_chip`, `nombre_animal`, `id_especie`, `id_raza`, `id_color`, `genero_animal`, `edad_animal`, `peso`, `desparasitado`, `esterilizado`, `vacunas`, `observaciones`, `fecha_ingreso`, `image`, `adoptado`) VALUES
(1, 123246, 'Andy', 2, 69, 5, 'Macho', 8, 1.5, 'Si', 'No', 'Pendiente', '', '2014-12-13', '85-2014-12-07 01.37.27.jpg', 'Si'),
(2, 4335, 'Papi', 1, 27, 3, 'Macho', 36, 3, 'Si', 'No', 'asdfgh', 'adghkfhcvbsgsfgf', '2014-12-11', '5456-papi.jpg', 'No'),
(3, 687541, 'Lulu', 1, 27, 3, 'Hembra', 24, 3, 'Si', 'No', '', '', '2014-12-13', '5390-lulu.jpg', 'Si'),
(12, NULL, 'Monin', 2, 67, 8, 'Macho', 36, 1.5, 'Si', 'No', 'Ninguna', '', '2014-12-14', '7689-gato siames.jpg', 'No'),
(13, NULL, 'Alter', 1, 1, 1, 'Macho', 1, 2.4, 'Si', 'No', '', '', '2014-12-16', '4571-akita.jpeg', 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE IF NOT EXISTS `colores` (
`id_color` int(11) NOT NULL,
  `nombre_color` varchar(1024) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`id_color`, `nombre_color`) VALUES
(1, 'Amarillo'),
(2, 'Negro'),
(3, 'Blanco'),
(4, 'Café oscuro'),
(5, 'Café claro'),
(6, 'Gris'),
(7, 'Rojizo '),
(8, 'Crema'),
(9, 'A.F.P.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

CREATE TABLE IF NOT EXISTS `comuna` (
`id_comuna` int(11) NOT NULL,
  `nombre_comuna` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `id_provincia` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=346 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comuna`
--

INSERT INTO `comuna` (`id_comuna`, `nombre_comuna`, `id_provincia`) VALUES
(1, 'Arica', 1),
(2, 'Camarones', 1),
(3, 'General Lagos', 2),
(4, 'Putre', 2),
(5, 'Alto Hospicio', 3),
(6, 'Iquique', 3),
(7, 'Camiña', 4),
(8, 'Colchane', 4),
(9, 'Huara', 4),
(10, 'Pica', 4),
(11, 'Pozo Almonte', 4),
(12, 'Antofagasta', 5),
(13, 'Mejillones', 5),
(14, 'Sierra Gorda', 5),
(15, 'Taltal', 5),
(16, 'Calama', 6),
(17, 'Ollague', 6),
(18, 'San Pedro de Atacama', 6),
(19, 'María Elena', 7),
(20, 'Tocopilla', 7),
(21, 'Chañaral', 8),
(22, 'Diego de Almagro', 8),
(23, 'Caldera', 9),
(24, 'Copiapó', 9),
(25, 'Tierra Amarilla', 9),
(26, 'Alto del Carmen', 10),
(27, 'Freirina', 10),
(28, 'Huasco', 10),
(29, 'Vallenar', 10),
(30, 'Canela', 11),
(31, 'Illapel', 11),
(32, 'Los Vilos', 11),
(33, 'Salamanca', 11),
(34, 'Andacollo', 12),
(35, 'Coquimbo', 12),
(36, 'La Higuera', 12),
(37, 'La Serena', 12),
(38, 'Paihuaco', 12),
(39, 'Vicuña', 12),
(40, 'Combarbalá', 13),
(41, 'Monte Patria', 13),
(42, 'Ovalle', 13),
(43, 'Punitaqui', 13),
(44, 'Río Hurtado', 13),
(45, 'Isla de Pascua', 14),
(46, 'Calle Larga', 15),
(47, 'Los Andes', 15),
(48, 'Rinconada', 15),
(49, 'San Esteban', 15),
(50, 'La Ligua', 16),
(51, 'Papudo', 16),
(52, 'Petorca', 16),
(53, 'Zapallar', 16),
(54, 'Hijuelas', 17),
(55, 'La Calera', 17),
(56, 'La Cruz', 17),
(57, 'Limache', 17),
(58, 'Nogales', 17),
(59, 'Olmué', 17),
(60, 'Quillota', 17),
(61, 'Algarrobo', 18),
(62, 'Cartagena', 18),
(63, 'El Quisco', 18),
(64, 'El Tabo', 18),
(65, 'San Antonio', 18),
(66, 'Santo Domingo', 18),
(67, 'Catemu', 19),
(68, 'Llaillay', 19),
(69, 'Panquehue', 19),
(70, 'Putaendo', 19),
(71, 'San Felipe', 19),
(72, 'Santa María', 19),
(73, 'Casablanca', 20),
(74, 'Concón', 20),
(75, 'Juan Fernández', 20),
(76, 'Puchuncaví', 20),
(77, 'Quilpué', 20),
(78, 'Quintero', 20),
(79, 'Valparaíso', 20),
(80, 'Villa Alemana', 20),
(81, 'Viña del Mar', 20),
(82, 'Colina', 21),
(83, 'Lampa', 21),
(84, 'Tiltil', 21),
(85, 'Pirque', 22),
(86, 'Puente Alto', 22),
(87, 'San José de Maipo', 22),
(88, 'Buin', 23),
(89, 'Calera de Tango', 23),
(90, 'Paine', 23),
(91, 'San Bernardo', 23),
(92, 'Alhué', 24),
(93, 'Curacaví', 24),
(94, 'María Pinto', 24),
(95, 'Melipilla', 24),
(96, 'San Pedro', 24),
(97, 'Cerrillos', 25),
(98, 'Cerro Navia', 25),
(99, 'Conchalí', 25),
(100, 'El Bosque', 25),
(101, 'Estación Central', 25),
(102, 'Huechuraba', 25),
(103, 'Independencia', 25),
(104, 'La Cisterna', 25),
(105, 'La Granja', 25),
(106, 'La Florida', 25),
(107, 'La Pintana', 25),
(108, 'La Reina', 25),
(109, 'Las Condes', 25),
(110, 'Lo Barnechea', 25),
(111, 'Lo Espejo', 25),
(112, 'Lo Prado', 25),
(113, 'Macul', 25),
(114, 'Maipú', 25),
(115, 'Ñuñoa', 25),
(116, 'Pedro Aguirre Cerda', 25),
(117, 'Peñalolén', 25),
(118, 'Providencia', 25),
(119, 'Pudahuel', 25),
(120, 'Quilicura', 25),
(121, 'Quinta Normal', 25),
(122, 'Recoleta', 25),
(123, 'Renca', 25),
(124, 'San Miguel', 25),
(125, 'San Joaquín', 25),
(126, 'San Ramón', 25),
(127, 'Santiago', 25),
(128, 'Vitacura', 25),
(129, 'El Monte', 26),
(130, 'Isla de Maipo', 26),
(131, 'Padre Hurtado', 26),
(132, 'Peñaflor', 26),
(133, 'Talagante', 26),
(134, 'Codegua', 27),
(135, 'Coínco', 27),
(136, 'Coltauco', 27),
(137, 'Doñihue', 27),
(138, 'Graneros', 27),
(139, 'Las Cabras', 27),
(140, 'Machalí', 27),
(141, 'Malloa', 27),
(142, 'Mostazal', 27),
(143, 'Olivar', 27),
(144, 'Peumo', 27),
(145, 'Pichidegua', 27),
(146, 'Quinta de Tilcoco', 27),
(147, 'Rancagua', 27),
(148, 'Rengo', 27),
(149, 'Requínoa', 27),
(150, 'San Vicente de Tagua Tagua', 27),
(151, 'La Estrella', 28),
(152, 'Litueche', 28),
(153, 'Marchihue', 28),
(154, 'Navidad', 28),
(155, 'Peredones', 28),
(156, 'Pichilemu', 28),
(157, 'Chépica', 29),
(158, 'Chimbarongo', 29),
(159, 'Lolol', 29),
(160, 'Nancagua', 29),
(161, 'Palmilla', 29),
(162, 'Peralillo', 29),
(163, 'Placilla', 29),
(164, 'Pumanque', 29),
(165, 'San Fernando', 29),
(166, 'Santa Cruz', 29),
(167, 'Cauquenes', 30),
(168, 'Chanco', 30),
(169, 'Pelluhue', 30),
(170, 'Curicó', 31),
(171, 'Hualañé', 31),
(172, 'Licantén', 31),
(173, 'Molina', 31),
(174, 'Rauco', 31),
(175, 'Romeral', 31),
(176, 'Sagrada Familia', 31),
(177, 'Teno', 31),
(178, 'Vichuquén', 31),
(179, 'Colbún', 32),
(180, 'Linares', 32),
(181, 'Longaví', 32),
(182, 'Parral', 32),
(183, 'Retiro', 32),
(184, 'San Javier', 32),
(185, 'Villa Alegre', 32),
(186, 'Yerbas Buenas', 32),
(187, 'Constitución', 33),
(188, 'Curepto', 33),
(189, 'Empedrado', 33),
(190, 'Maule', 33),
(191, 'Pelarco', 33),
(192, 'Pencahue', 33),
(193, 'Río Claro', 33),
(194, 'San Clemente', 33),
(195, 'San Rafael', 33),
(196, 'Talca', 33),
(197, 'Arauco', 34),
(198, 'Cañete', 34),
(199, 'Contulmo', 34),
(200, 'Curanilahue', 34),
(201, 'Lebu', 34),
(202, 'Los Álamos', 34),
(203, 'Tirúa', 34),
(204, 'Alto Biobío', 35),
(205, 'Antuco', 35),
(206, 'Cabrero', 35),
(207, 'Laja', 35),
(208, 'Los Ángeles', 35),
(209, 'Mulchén', 35),
(210, 'Nacimiento', 35),
(211, 'Negrete', 35),
(212, 'Quilaco', 35),
(213, 'Quilleco', 35),
(214, 'San Rosendo', 35),
(215, 'Santa Bárbara', 35),
(216, 'Tucapel', 35),
(217, 'Yumbel', 35),
(218, 'Chiguayante', 36),
(219, 'Concepción', 36),
(220, 'Coronel', 36),
(221, 'Florida', 36),
(222, 'Hualpén', 36),
(223, 'Hualqui', 36),
(224, 'Lota', 36),
(225, 'Penco', 36),
(226, 'San Pedro de La Paz', 36),
(227, 'Santa Juana', 36),
(228, 'Talcahuano', 36),
(229, 'Tomé', 36),
(230, 'Bulnes', 37),
(231, 'Chillán', 37),
(232, 'Chillán Viejo', 37),
(233, 'Cobquecura', 37),
(234, 'Coelemu', 37),
(235, 'Coihueco', 37),
(236, 'El Carmen', 37),
(237, 'Ninhue', 37),
(238, 'Ñiquen', 37),
(239, 'Pemuco', 37),
(240, 'Pinto', 37),
(241, 'Portezuelo', 37),
(242, 'Quillón', 37),
(243, 'Quirihue', 37),
(244, 'Ránquil', 37),
(245, 'San Carlos', 37),
(246, 'San Fabián', 37),
(247, 'San Ignacio', 37),
(248, 'San Nicolás', 37),
(249, 'Treguaco', 37),
(250, 'Yungay', 37),
(251, 'Carahue', 38),
(252, 'Cholchol', 38),
(253, 'Cunco', 38),
(254, 'Curarrehue', 38),
(255, 'Freire', 38),
(256, 'Galvarino', 38),
(257, 'Gorbea', 38),
(258, 'Lautaro', 38),
(259, 'Loncoche', 38),
(260, 'Melipeuco', 38),
(261, 'Nueva Imperial', 38),
(262, 'Padre Las Casas', 38),
(263, 'Perquenco', 38),
(264, 'Pitrufquén', 38),
(265, 'Pucón', 38),
(266, 'Saavedra', 38),
(267, 'Temuco', 38),
(268, 'Teodoro Schmidt', 38),
(269, 'Toltén', 38),
(270, 'Vilcún', 38),
(271, 'Villarrica', 38),
(272, 'Angol', 39),
(273, 'Collipulli', 39),
(274, 'Curacautín', 39),
(275, 'Ercilla', 39),
(276, 'Lonquimay', 39),
(277, 'Los Sauces', 39),
(278, 'Lumaco', 39),
(279, 'Purén', 39),
(280, 'Renaico', 39),
(281, 'Traiguén', 39),
(282, 'Victoria', 39),
(283, 'Corral', 40),
(284, 'Lanco', 40),
(285, 'Los Lagos', 40),
(286, 'Máfil', 40),
(287, 'Mariquina', 40),
(288, 'Paillaco', 40),
(289, 'Panguipulli', 40),
(290, 'Valdivia', 40),
(291, 'Futrono', 41),
(292, 'La Unión', 41),
(293, 'Lago Ranco', 41),
(294, 'Río Bueno', 41),
(295, 'Ancud', 42),
(296, 'Castro', 42),
(297, 'Chonchi', 42),
(298, 'Curaco de Vélez', 42),
(299, 'Dalcahue', 42),
(300, 'Puqueldón', 42),
(301, 'Queilén', 42),
(302, 'Quemchi', 42),
(303, 'Quellón', 42),
(304, 'Quinchao', 42),
(305, 'Calbuco', 43),
(306, 'Cochamó', 43),
(307, 'Fresia', 43),
(308, 'Frutillar', 43),
(309, 'Llanquihue', 43),
(310, 'Los Muermos', 43),
(311, 'Maullín', 43),
(312, 'Puerto Montt', 43),
(313, 'Puerto Varas', 43),
(314, 'Osorno', 44),
(315, 'Puero Octay', 44),
(316, 'Purranque', 44),
(317, 'Puyehue', 44),
(318, 'Río Negro', 44),
(319, 'San Juan de la Costa', 44),
(320, 'San Pablo', 44),
(321, 'Chaitén', 45),
(322, 'Futaleufú', 45),
(323, 'Hualaihué', 45),
(324, 'Palena', 45),
(325, 'Aisén', 46),
(326, 'Cisnes', 46),
(327, 'Guaitecas', 46),
(328, 'Cochrane', 47),
(329, 'O''higgins', 47),
(330, 'Tortel', 47),
(331, 'Coihaique', 48),
(332, 'Lago Verde', 48),
(333, 'Chile Chico', 49),
(334, 'Río Ibáñez', 49),
(335, 'Antártica', 50),
(336, 'Cabo de Hornos', 50),
(337, 'Laguna Blanca', 51),
(338, 'Punta Arenas', 51),
(339, 'Río Verde', 51),
(340, 'San Gregorio', 51),
(341, 'Porvenir', 52),
(342, 'Primavera', 52),
(343, 'Timaukel', 52),
(344, 'Natales', 53),
(345, 'Torres del Paine', 53);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authassignment`
--

CREATE TABLE IF NOT EXISTS `cruge_authassignment` (
  `userid` int(11) NOT NULL,
  `bizrule` text COLLATE utf8_spanish_ci,
  `data` text COLLATE utf8_spanish_ci,
  `itemname` varchar(64) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cruge_authassignment`
--

INSERT INTO `cruge_authassignment` (`userid`, `bizrule`, `data`, `itemname`) VALUES
(1, NULL, 'N;', 'Administrador'),
(2, NULL, 'N;', 'invitados'),
(3, NULL, 'N;', 'Administrador'),
(10, NULL, 'N;', 'Administrador'),
(17, NULL, 'N;', 'Adoptante'),
(18, NULL, 'N;', 'Adoptante'),
(20, NULL, 'N;', 'Adoptante'),
(21, NULL, 'N;', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authitem`
--

CREATE TABLE IF NOT EXISTS `cruge_authitem` (
  `name` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_spanish_ci,
  `bizrule` text COLLATE utf8_spanish_ci,
  `data` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cruge_authitem`
--

INSERT INTO `cruge_authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('action_adopcion_admin', 0, '', NULL, 'N;'),
('action_adopcion_create', 0, '', NULL, 'N;'),
('action_adopcion_delete', 0, '', NULL, 'N;'),
('action_adopcion_index', 0, '', NULL, 'N;'),
('action_adopcion_update', 0, '', NULL, 'N;'),
('action_adopcion_view', 0, '', NULL, 'N;'),
('action_animal_admin', 0, '', NULL, 'N;'),
('action_animal_adoptados', 0, '', NULL, 'N;'),
('action_animal_create', 0, '', NULL, 'N;'),
('action_animal_delete', 0, '', NULL, 'N;'),
('action_animal_index', 0, '', NULL, 'N;'),
('action_animal_razasporespecie', 0, '', NULL, 'N;'),
('action_animal_update', 0, '', NULL, 'N;'),
('action_animal_view', 0, '', NULL, 'N;'),
('action_colores_admin', 0, '', NULL, 'N;'),
('action_colores_create', 0, '', NULL, 'N;'),
('action_colores_delete', 0, '', NULL, 'N;'),
('action_colores_index', 0, '', NULL, 'N;'),
('action_colores_update', 0, '', NULL, 'N;'),
('action_colores_view', 0, '', NULL, 'N;'),
('action_especie_admin', 0, '', NULL, 'N;'),
('action_especie_create', 0, '', NULL, 'N;'),
('action_especie_delete', 0, '', NULL, 'N;'),
('action_especie_index', 0, '', NULL, 'N;'),
('action_especie_update', 0, '', NULL, 'N;'),
('action_especie_view', 0, '', NULL, 'N;'),
('action_noticia_admin', 0, '', NULL, 'N;'),
('action_noticia_create', 0, '', NULL, 'N;'),
('action_noticia_delete', 0, '', NULL, 'N;'),
('action_noticia_index', 0, '', NULL, 'N;'),
('action_noticia_update', 0, '', NULL, 'N;'),
('action_noticia_view', 0, '', NULL, 'N;'),
('action_persona_admin', 0, '', NULL, 'N;'),
('action_persona_comunasporprovincia', 0, '', NULL, 'N;'),
('action_persona_create', 0, '', NULL, 'N;'),
('action_persona_delete', 0, '', NULL, 'N;'),
('action_persona_index', 0, '', NULL, 'N;'),
('action_persona_provinciasporregion', 0, '', NULL, 'N;'),
('action_persona_update', 0, '', NULL, 'N;'),
('action_persona_view', 0, '', NULL, 'N;'),
('action_raza_admin', 0, '', NULL, 'N;'),
('action_raza_create', 0, '', NULL, 'N;'),
('action_raza_delete', 0, '', NULL, 'N;'),
('action_raza_index', 0, '', NULL, 'N;'),
('action_raza_update', 0, '', NULL, 'N;'),
('action_raza_view', 0, '', NULL, 'N;'),
('action_site_contact', 0, '', NULL, 'N;'),
('action_site_error', 0, '', NULL, 'N;'),
('action_site_index', 0, '', NULL, 'N;'),
('action_site_login', 0, '', NULL, 'N;'),
('action_site_logout', 0, '', NULL, 'N;'),
('action_ui_comunasPorProvincia', 0, '', NULL, 'N;'),
('action_ui_editprofile', 0, '', NULL, 'N;'),
('action_ui_fieldsadmincreate', 0, '', NULL, 'N;'),
('action_ui_fieldsadmindelete', 0, '', NULL, 'N;'),
('action_ui_fieldsadminlist', 0, '', NULL, 'N;'),
('action_ui_fieldsadminupdate', 0, '', NULL, 'N;'),
('action_ui_provinciasPorRegion', 0, '', NULL, 'N;'),
('action_ui_rbacajaxassignment', 0, '', NULL, 'N;'),
('action_ui_rbacajaxsetchilditem', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemchilditems', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemcreate', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemdelete', 0, '', NULL, 'N;'),
('action_ui_rbacauthitemupdate', 0, '', NULL, 'N;'),
('action_ui_rbaclistops', 0, '', NULL, 'N;'),
('action_ui_rbaclistroles', 0, '', NULL, 'N;'),
('action_ui_rbaclisttasks', 0, '', NULL, 'N;'),
('action_ui_rbacusersassignments', 0, '', NULL, 'N;'),
('action_ui_sessionadmin', 0, '', NULL, 'N;'),
('action_ui_systemupdate', 0, '', NULL, 'N;'),
('action_ui_usermanagementadmin', 0, '', NULL, 'N;'),
('action_ui_usermanagementcreate', 0, '', NULL, 'N;'),
('action_ui_usermanagementdelete', 0, '', NULL, 'N;'),
('action_ui_usermanagementupdate', 0, '', NULL, 'N;'),
('admin', 0, '', NULL, 'N;'),
('Administrador', 2, 'admin', '', 'N;'),
('Adoptante', 2, '', '', 'N;'),
('controller_adopcion', 0, '', NULL, 'N;'),
('controller_animal', 0, '', NULL, 'N;'),
('controller_colores', 0, '', NULL, 'N;'),
('controller_especie', 0, '', NULL, 'N;'),
('controller_noticia', 0, '', NULL, 'N;'),
('controller_persona', 0, '', NULL, 'N;'),
('controller_raza', 0, '', NULL, 'N;'),
('controller_site', 0, '', NULL, 'N;'),
('edit-advanced-profile-features', 0, 'D:\\xampp\\htdocs\\yii\\adopcion4\\protected\\modules\\cruge\\views\\ui\\usermanagementupdate.php linea 114', NULL, 'N;'),
('invitados', 2, '', '', 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_authitemchild`
--

CREATE TABLE IF NOT EXISTS `cruge_authitemchild` (
  `parent` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cruge_authitemchild`
--

INSERT INTO `cruge_authitemchild` (`parent`, `child`) VALUES
('Administrador', 'action_adopcion_admin'),
('Administrador', 'action_adopcion_create'),
('Administrador', 'action_adopcion_delete'),
('Administrador', 'action_adopcion_index'),
('Administrador', 'action_adopcion_update'),
('Administrador', 'action_adopcion_view'),
('Administrador', 'action_animal_admin'),
('Administrador', 'action_animal_adoptados'),
('Adoptante', 'action_animal_adoptados'),
('Administrador', 'action_animal_create'),
('Administrador', 'action_animal_delete'),
('Administrador', 'action_animal_index'),
('Adoptante', 'action_animal_index'),
('invitados', 'action_animal_index'),
('Administrador', 'action_animal_razasporespecie'),
('Adoptante', 'action_animal_razasporespecie'),
('Administrador', 'action_animal_update'),
('Administrador', 'action_animal_view'),
('Adoptante', 'action_animal_view'),
('invitados', 'action_animal_view'),
('Administrador', 'action_colores_admin'),
('Administrador', 'action_colores_create'),
('Administrador', 'action_colores_delete'),
('Administrador', 'action_colores_index'),
('Administrador', 'action_colores_update'),
('Administrador', 'action_colores_view'),
('Administrador', 'action_especie_admin'),
('Administrador', 'action_especie_create'),
('Administrador', 'action_especie_delete'),
('Administrador', 'action_especie_index'),
('Administrador', 'action_especie_update'),
('Administrador', 'action_especie_view'),
('Administrador', 'action_noticia_admin'),
('Administrador', 'action_noticia_create'),
('Administrador', 'action_noticia_delete'),
('Administrador', 'action_noticia_index'),
('Adoptante', 'action_noticia_index'),
('Administrador', 'action_noticia_update'),
('Administrador', 'action_noticia_view'),
('Adoptante', 'action_noticia_view'),
('Administrador', 'action_persona_admin'),
('Administrador', 'action_persona_comunasporprovincia'),
('Administrador', 'action_persona_create'),
('Administrador', 'action_persona_delete'),
('Administrador', 'action_persona_index'),
('Administrador', 'action_persona_provinciasporregion'),
('Administrador', 'action_persona_update'),
('Administrador', 'action_persona_view'),
('Administrador', 'action_raza_admin'),
('Administrador', 'action_raza_create'),
('Administrador', 'action_raza_delete'),
('Administrador', 'action_raza_index'),
('Administrador', 'action_raza_update'),
('Administrador', 'action_raza_view'),
('Administrador', 'action_site_contact'),
('Adoptante', 'action_site_contact'),
('invitados', 'action_site_contact'),
('Administrador', 'action_site_error'),
('Adoptante', 'action_site_error'),
('invitados', 'action_site_error'),
('Administrador', 'action_site_index'),
('Adoptante', 'action_site_index'),
('invitados', 'action_site_index'),
('Administrador', 'action_site_login'),
('Adoptante', 'action_site_login'),
('invitados', 'action_site_login'),
('Administrador', 'action_site_logout'),
('Adoptante', 'action_site_logout'),
('Administrador', 'action_ui_comunasPorProvincia'),
('Administrador', 'action_ui_editprofile'),
('Administrador', 'action_ui_fieldsadmincreate'),
('Administrador', 'action_ui_fieldsadmindelete'),
('Administrador', 'action_ui_fieldsadminlist'),
('Adoptante', 'action_ui_fieldsadminlist'),
('Administrador', 'action_ui_fieldsadminupdate'),
('Administrador', 'action_ui_provinciasPorRegion'),
('Administrador', 'action_ui_rbacajaxassignment'),
('Administrador', 'action_ui_rbacajaxsetchilditem'),
('Administrador', 'action_ui_rbacauthitemchilditems'),
('Adoptante', 'action_ui_rbacauthitemchilditems'),
('Administrador', 'action_ui_rbacauthitemcreate'),
('Administrador', 'action_ui_rbacauthitemdelete'),
('Administrador', 'action_ui_rbacauthitemupdate'),
('Administrador', 'action_ui_rbaclistops'),
('Administrador', 'action_ui_rbaclistroles'),
('Administrador', 'action_ui_rbaclisttasks'),
('Administrador', 'action_ui_rbacusersassignments'),
('Administrador', 'action_ui_sessionadmin'),
('Administrador', 'action_ui_systemupdate'),
('Administrador', 'action_ui_usermanagementadmin'),
('Administrador', 'action_ui_usermanagementcreate'),
('Administrador', 'action_ui_usermanagementdelete'),
('Administrador', 'action_ui_usermanagementupdate'),
('Administrador', 'admin'),
('Administrador', 'controller_adopcion'),
('Adoptante', 'controller_adopcion'),
('Administrador', 'controller_animal'),
('Adoptante', 'controller_animal'),
('Administrador', 'controller_colores'),
('Administrador', 'controller_especie'),
('Administrador', 'controller_noticia'),
('Administrador', 'controller_persona'),
('Administrador', 'controller_raza'),
('Administrador', 'controller_site'),
('invitados', 'controller_site'),
('Administrador', 'edit-advanced-profile-features');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_field`
--

CREATE TABLE IF NOT EXISTS `cruge_field` (
`idfield` int(11) NOT NULL,
  `fieldname` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `longname` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `position` int(11) DEFAULT '0',
  `required` int(11) DEFAULT '0',
  `fieldtype` int(11) DEFAULT '0',
  `fieldsize` int(11) DEFAULT '20',
  `maxlength` int(11) DEFAULT '45',
  `showinreports` int(11) DEFAULT '0',
  `useregexp` varchar(512) COLLATE utf8_spanish_ci DEFAULT NULL,
  `useregexpmsg` varchar(512) COLLATE utf8_spanish_ci DEFAULT NULL,
  `predetvalue` mediumblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_fieldvalue`
--

CREATE TABLE IF NOT EXISTS `cruge_fieldvalue` (
`idfieldvalue` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idfield` int(11) NOT NULL,
  `value` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_session`
--

CREATE TABLE IF NOT EXISTS `cruge_session` (
`idsession` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `created` bigint(30) DEFAULT NULL,
  `expire` bigint(30) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `ipaddress` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usagecount` int(11) DEFAULT '0',
  `lastusage` bigint(30) DEFAULT NULL,
  `logoutdate` bigint(30) DEFAULT NULL,
  `ipaddressout` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cruge_session`
--

INSERT INTO `cruge_session` (`idsession`, `iduser`, `created`, `expire`, `status`, `ipaddress`, `usagecount`, `lastusage`, `logoutdate`, `ipaddressout`) VALUES
(1, 1, 1416860203, 1416862003, 0, '::1', 1, 1416860203, 1416860207, '::1'),
(2, 1, 1416860211, 1416862011, 0, '::1', 1, 1416860211, NULL, NULL),
(3, 1, 1416866240, 1416868040, 0, '::1', 1, 1416866240, NULL, NULL),
(4, 1, 1416868218, 1416870018, 0, '::1', 1, 1416868218, 1416868445, '::1'),
(5, 1, 1416868457, 1416870257, 0, '::1', 1, 1416868457, NULL, NULL),
(6, 1, 1416870306, 1416872106, 0, '::1', 1, 1416870306, NULL, NULL),
(7, 1, 1416877474, 1416879274, 0, '::1', 1, 1416877474, NULL, NULL),
(8, 1, 1416962015, 1416963815, 0, '::1', 1, 1416962015, NULL, NULL),
(9, 1, 1417076560, 1417078360, 0, '::1', 1, 1417076560, NULL, NULL),
(10, 1, 1417078476, 1417080276, 0, '::1', 1, 1417078476, NULL, NULL),
(11, 1, 1417215706, 1417217506, 0, '::1', 1, 1417215706, NULL, NULL),
(12, 1, 1417217595, 1417219395, 1, '::1', 1, 1417217595, NULL, NULL),
(13, 1, 1417715407, 1417717207, 0, '::1', 1, 1417715407, NULL, NULL),
(14, 1, 1417726072, 1417727872, 0, '::1', 1, 1417726072, NULL, NULL),
(15, 1, 1417741827, 1417743627, 0, '::1', 1, 1417741827, NULL, NULL),
(16, 1, 1417788581, 1417790381, 0, '::1', 2, 1417788729, NULL, NULL),
(17, 1, 1417790394, 1417792194, 0, '::1', 1, 1417790394, NULL, NULL),
(18, 1, 1417793545, 1417795345, 0, '::1', 1, 1417793545, NULL, NULL),
(19, 1, 1417916432, 1417918232, 0, '::1', 1, 1417916432, NULL, NULL),
(20, 1, 1417992336, 1417994136, 0, '::1', 1, 1417992336, NULL, NULL),
(21, 1, 1417998101, 1417999901, 1, '::1', 1, 1417998101, NULL, NULL),
(22, 1, 1418006408, 1418008208, 0, '::1', 1, 1418006408, NULL, NULL),
(23, 1, 1418008270, 1418010070, 0, '::1', 1, 1418008270, NULL, NULL),
(24, 1, 1418013552, 1418015352, 0, '::1', 1, 1418013552, NULL, NULL),
(25, 1, 1418019167, 1418020967, 0, '::1', 1, 1418019167, NULL, NULL),
(26, 1, 1418021039, 1418022839, 0, '::1', 1, 1418021039, NULL, NULL),
(27, 1, 1418022915, 1418024715, 0, '::1', 1, 1418022915, 1418022943, '::1'),
(28, 1, 1418022965, 1418024765, 0, '::1', 1, 1418022965, NULL, NULL),
(29, 1, 1418050661, 1418052461, 0, '192.168.1.115', 3, 1418052156, NULL, NULL),
(30, 1, 1418052570, 1418054370, 0, '::1', 2, 1418053116, NULL, NULL),
(31, 1, 1418055281, 1418057081, 0, '192.168.1.116', 2, 1418055719, NULL, NULL),
(32, 1, 1418057543, 1418059343, 0, '192.168.1.116', 3, 1418057599, NULL, NULL),
(33, 1, 1418059401, 1418061201, 0, '::1', 1, 1418059401, NULL, NULL),
(34, 1, 1418061932, 1418063732, 0, '::1', 1, 1418061932, NULL, NULL),
(35, 1, 1418063777, 1418065577, 0, '::1', 1, 1418063777, NULL, NULL),
(36, 1, 1418066743, 1418068543, 0, '::1', 2, 1418066854, NULL, NULL),
(37, 1, 1418069687, 1418071487, 0, '::1', 1, 1418069687, NULL, NULL),
(38, 1, 1418071786, 1418073586, 0, '192.168.1.116', 2, 1418072545, 1418072869, '192.168.1.116'),
(39, 1, 1418072876, 1418074676, 0, '::1', 3, 1418073214, NULL, NULL),
(40, 1, 1418075206, 1418077006, 0, '::1', 2, 1418076042, NULL, NULL),
(41, 1, 1418077133, 1418078933, 0, '::1', 1, 1418077133, NULL, NULL),
(42, 1, 1418078934, 1418080734, 0, '::1', 2, 1418078973, NULL, NULL),
(43, 1, 1418094199, 1418095999, 0, '::1', 1, 1418094199, NULL, NULL),
(44, 1, 1418136653, 1418138453, 0, '::1', 1, 1418136653, NULL, NULL),
(45, 1, 1418152427, 1418154227, 0, '::1', 1, 1418152427, NULL, NULL),
(46, 1, 1418252105, 1418253905, 0, '::1', 1, 1418252105, NULL, NULL),
(47, 1, 1418254507, 1418256307, 0, '::1', 1, 1418254507, NULL, NULL),
(48, 1, 1418260347, 1418262147, 0, '::1', 1, 1418260347, NULL, NULL),
(49, 1, 1418264392, 1418266192, 0, '::1', 1, 1418264392, NULL, NULL),
(50, 1, 1418270304, 1418272104, 0, '::1', 1, 1418270304, NULL, NULL),
(51, 1, 1418321275, 1418324875, 0, '::1', 1, 1418321275, NULL, NULL),
(52, 1, 1418324963, 1418328563, 0, '::1', 1, 1418324963, NULL, NULL),
(53, 1, 1418347737, 1418351337, 0, '::1', 1, 1418347737, NULL, NULL),
(54, 1, 1418423682, 1418427282, 0, '::1', 1, 1418423682, NULL, NULL),
(55, 1, 1418439678, 1418443278, 0, '::1', 1, 1418439678, 1418441118, '::1'),
(56, 1, 1418441119, 1418444719, 0, '::1', 1, 1418441119, NULL, NULL),
(57, 1, 1418498040, 1418501640, 0, '::1', 1, 1418498040, NULL, NULL),
(58, 1, 1418502186, 1418505786, 0, '::1', 1, 1418502186, NULL, NULL),
(59, 1, 1418505902, 1418509502, 0, '::1', 1, 1418505902, NULL, NULL),
(60, 1, 1418513844, 1418517444, 0, '::1', 1, 1418513844, NULL, NULL),
(61, 1, 1418518006, 1418521606, 0, '::1', 1, 1418518006, NULL, NULL),
(62, 1, 1418524923, 1418528523, 0, '::1', 1, 1418524923, NULL, NULL),
(63, 1, 1418529247, 1418532847, 0, '::1', 1, 1418529247, NULL, NULL),
(64, 1, 1418533260, 1418536860, 0, '::1', 1, 1418533260, 1418535294, '::1'),
(65, 1, 1418537066, 1418540666, 0, '::1', 1, 1418537066, 1418537158, '::1'),
(66, 1, 1418538023, 1418541623, 0, '::1', 1, 1418538023, 1418538026, '::1'),
(67, 1, 1418538227, 1418541827, 0, '::1', 1, 1418538227, 1418538230, '::1'),
(68, 1, 1418538238, 1418541838, 0, '::1', 2, 1418540521, 1418541506, '::1'),
(69, 1, 1418541522, 1418545122, 0, '::1', 1, 1418541522, NULL, NULL),
(70, 1, 1418554228, 1418557828, 0, '::1', 2, 1418554903, NULL, NULL),
(71, 1, 1418587312, 1418590912, 0, '::1', 1, 1418587312, 1418587468, '::1'),
(72, 1, 1418587609, 1418591209, 0, '::1', 1, 1418587609, 1418587616, '::1'),
(73, 1, 1418587643, 1418591243, 0, '::1', 1, 1418587643, 1418587651, '::1'),
(74, 1, 1418587695, 1418591295, 0, '::1', 1, 1418587695, 1418587923, '::1'),
(75, 1, 1418587987, 1418591587, 0, '::1', 1, 1418587987, NULL, NULL),
(76, 18, 1418591036, 1418594636, 0, '192.168.1.134', 1, 1418591036, 1418591329, '192.168.1.134'),
(77, 18, 1418591336, 1418594936, 0, '192.168.1.134', 1, 1418591336, 1418591481, '192.168.1.134'),
(78, 1, 1418591590, 1418595190, 0, '::1', 1, 1418591590, 1418592525, '::1'),
(79, 18, 1418591712, 1418595312, 0, '192.168.1.134', 1, 1418591712, 1418592387, '192.168.1.134'),
(80, 18, 1418592400, 1418596000, 0, '192.168.1.134', 1, 1418592400, 1418592411, '192.168.1.134'),
(81, 18, 1418592429, 1418596029, 0, '192.168.1.134', 1, 1418592429, 1418592447, '192.168.1.134'),
(82, 18, 1418592462, 1418596062, 0, '::1', 2, 1418594501, 1418594513, '::1'),
(83, 1, 1418594517, 1418598117, 0, '::1', 1, 1418594517, 1418594569, '::1'),
(84, 18, 1418594603, 1418598203, 0, '::1', 1, 1418594603, 1418594635, '::1'),
(85, 18, 1418594751, 1418598351, 0, '::1', 2, 1418594796, 1418595046, '::1'),
(86, 1, 1418595050, 1418598650, 0, '::1', 1, 1418595050, 1418595211, '::1'),
(87, 10, 1418595219, 1418598819, 0, '::1', 1, 1418595219, 1418595224, '::1'),
(88, 1, 1418595228, 1418598828, 0, '::1', 1, 1418595228, 1418595605, '::1'),
(89, 1, 1418595766, 1418599366, 0, '::1', 1, 1418595766, 1418595924, '::1'),
(90, 1, 1418595962, 1418599562, 0, '::1', 1, 1418595962, 1418595999, '::1'),
(91, 1, 1418596160, 1418599760, 0, '::1', 1, 1418596160, 1418596225, '::1'),
(92, 1, 1418596566, 1418600166, 0, '::1', 1, 1418596566, 1418599116, '::1'),
(93, 1, 1418599465, 1418603065, 0, '::1', 1, 1418599465, 1418601610, '::1'),
(94, 10, 1418601617, 1418605217, 0, '::1', 1, 1418601617, 1418601659, '::1'),
(95, 1, 1418601663, 1418605263, 0, '::1', 1, 1418601663, NULL, NULL),
(96, 1, 1418605430, 1418609030, 0, '::1', 1, 1418605430, NULL, NULL),
(97, 1, 1418609077, 1418612677, 0, '::1', 1, 1418609077, 1418609837, '::1'),
(98, 10, 1418609869, 1418613469, 0, '::1', 1, 1418609869, 1418610310, '::1'),
(99, 1, 1418610319, 1418613919, 0, '::1', 1, 1418610319, 1418611124, '::1'),
(100, 1, 1418611130, 1418614730, 0, '::1', 1, 1418611130, 1418611174, '::1'),
(101, 10, 1418611192, 1418614792, 0, '::1', 1, 1418611192, 1418613105, '::1'),
(102, 1, 1418611329, 1418614929, 0, '::1', 2, 1418613109, 1418613122, '::1'),
(103, 10, 1418613133, 1418616733, 0, '::1', 1, 1418613133, 1418613202, '::1'),
(104, 1, 1418613216, 1418616816, 0, '::1', 1, 1418613216, 1418613907, '::1'),
(105, 10, 1418613928, 1418617528, 0, '::1', 1, 1418613928, 1418614061, '::1'),
(106, 1, 1418614069, 1418617669, 0, '::1', 1, 1418614069, 1418614785, '::1'),
(107, 10, 1418614789, 1418618389, 0, '::1', 1, 1418614789, 1418614800, '::1'),
(108, 1, 1418614805, 1418618405, 0, '::1', 1, 1418614805, NULL, NULL),
(109, 10, 1418670568, 1418674168, 0, '::1', 1, 1418670568, 1418670584, '::1'),
(110, 1, 1418670715, 1418674315, 0, '::1', 1, 1418670715, 1418671112, '::1'),
(111, 1, 1418765741, 1418769341, 0, '::1', 1, 1418765741, NULL, NULL),
(112, 10, 1418780952, 1418784552, 0, '::1', 1, 1418780952, 1418780956, '::1'),
(113, 1, 1418780964, 1418784564, 0, '::1', 1, 1418780964, 1418783331, '::1'),
(114, 1, 1418783395, 1418786995, 0, '::1', 1, 1418783395, NULL, NULL),
(115, 1, 1418787631, 1418791231, 0, '::1', 1, 1418787631, NULL, NULL),
(116, 1, 1418793307, 1418796907, 0, '::1', 1, 1418793307, NULL, NULL),
(117, 1, 1418797477, 1418801077, 0, '::1', 1, 1418797477, NULL, NULL),
(118, 1, 1418801328, 1418804928, 0, '::1', 1, 1418801328, 1418804351, '::1'),
(119, 1, 1420822201, 1420825801, 1, '::1', 1, 1420822201, NULL, NULL),
(120, 1, 1421070426, 1421074026, 0, '127.0.0.1', 1, 1421070426, NULL, NULL),
(121, 1, 1421084306, 1421087906, 1, '127.0.0.1', 1, 1421084306, NULL, NULL),
(122, 1, 1421938299, 1421941899, 1, '127.0.0.1', 1, 1421938299, NULL, NULL),
(123, 1, 1427481037, 1427484637, 1, '127.0.0.1', 1, 1427481037, NULL, NULL),
(124, 1, 1431640570, 1431644170, 1, '127.0.0.1', 1, 1431640570, NULL, NULL),
(125, 1, 1434858843, 1434862443, 1, '::1', 1, 1434858843, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_system`
--

CREATE TABLE IF NOT EXISTS `cruge_system` (
`idsystem` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `largename` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sessionmaxdurationmins` int(11) DEFAULT '30',
  `sessionmaxsameipconnections` int(11) DEFAULT '10',
  `sessionreusesessions` int(11) DEFAULT '1' COMMENT '1yes 0no',
  `sessionmaxsessionsperday` int(11) DEFAULT '-1',
  `sessionmaxsessionsperuser` int(11) DEFAULT '-1',
  `systemnonewsessions` int(11) DEFAULT '0' COMMENT '1yes 0no',
  `systemdown` int(11) DEFAULT '0',
  `registerusingcaptcha` int(11) DEFAULT '0',
  `registerusingterms` int(11) DEFAULT '0',
  `terms` blob,
  `registerusingactivation` int(11) DEFAULT '1',
  `defaultroleforregistration` varchar(64) COLLATE utf8_spanish_ci DEFAULT NULL,
  `registerusingtermslabel` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `registrationonlogin` int(11) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cruge_system`
--

INSERT INTO `cruge_system` (`idsystem`, `name`, `largename`, `sessionmaxdurationmins`, `sessionmaxsameipconnections`, `sessionreusesessions`, `sessionmaxsessionsperday`, `sessionmaxsessionsperuser`, `systemnonewsessions`, `systemdown`, `registerusingcaptcha`, `registerusingterms`, `terms`, `registerusingactivation`, `defaultroleforregistration`, `registerusingtermslabel`, `registrationonlogin`) VALUES
(1, 'default', NULL, 60, 10, 1, -1, -1, 0, 0, 0, 0, '', 2, '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cruge_user`
--

CREATE TABLE IF NOT EXISTS `cruge_user` (
`iduser` int(11) NOT NULL,
  `regdate` bigint(30) DEFAULT NULL,
  `actdate` bigint(30) DEFAULT NULL,
  `logondate` bigint(30) DEFAULT NULL,
  `username` varchar(64) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(64) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'Hashed password',
  `authkey` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL COMMENT 'llave de autentificacion',
  `state` int(11) DEFAULT '0',
  `totalsessioncounter` int(11) DEFAULT '0',
  `currentsessioncounter` int(11) DEFAULT '0',
  `persona_rut` char(12) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cruge_user`
--

INSERT INTO `cruge_user` (`iduser`, `regdate`, `actdate`, `logondate`, `username`, `email`, `password`, `authkey`, `state`, `totalsessioncounter`, `currentsessioncounter`, `persona_rut`) VALUES
(1, NULL, NULL, 1434858843, 'admin', 'admin@tucorreo.com', 'admin', NULL, 1, 0, 0, NULL),
(2, NULL, NULL, NULL, 'invitado', 'invitado@invitado.cl', 'nopassword', NULL, 1, 0, 0, NULL),
(10, 1418270415, NULL, 1418780952, 'pgsoto', 'pgsoto@alumnos.ubiobio.cl', 'pgsoto', '5bc3a7b3de4b727d6964d55d9fe0d848', 1, 0, 0, '18414437-9'),
(17, 1418556146, NULL, NULL, 'nery103', 'nerysoto.contador@gmail.com', 'nery103', '848e9fc4631d144312154ba0211705b5', 1, 0, 0, '10387850-0'),
(18, 1418590885, NULL, 1418594796, 'msaez', 'marcelo.saez.t@hotmail.com', 'msaez01', 'be18fef9220110ab108e8dc5b848fc34', 1, 0, 0, '16818192-2'),
(20, 1418801428, NULL, NULL, 'ximesoto', 'amenix@gmail.com', 'ximenasoto', 'c121c7fd2733508f139ad1526a16adaa', 0, 0, 0, '13800414-7'),
(21, 1418801534, NULL, NULL, 'pgcampos', 'pgcampos@ubiobio.cl', 'profesor', '48f9f2962c1777818f3169c68d73a199', 1, 0, 0, '5449029-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especie`
--

CREATE TABLE IF NOT EXISTS `especie` (
`id_especie` int(11) NOT NULL,
  `nombre_especie` varchar(1024) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `especie`
--

INSERT INTO `especie` (`id_especie`, `nombre_especie`) VALUES
(1, 'Perro'),
(2, 'Gato'),
(3, 'A.F.P');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
`id_noticia` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_publicacion` date NOT NULL,
  `cuerpo` text COLLATE utf8_spanish_ci NOT NULL,
  `image` varchar(128) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `titulo`, `fecha_publicacion`, `cuerpo`, `image`) VALUES
(1, '¿Pueden los humanos infectar a los animales de ébola?', '2014-12-08', 'El presidente del Consejo General de Veterinaria, Juan José Badiola, aseguró a BBC Mundo, que hasta el momento no hay ningún estudio que haya demostrado que el virus del ébola se pueda contagiar de seres humanos a perros. Badiola explicó que el único estudio que demostró la exposición de estos animales al virus se realizó en Gabón entre 2001 y 2002 como consecuencia de un brote en humanos. Tras analizar varias muestras de sangre canina se vio que había un pequeño porcentaje de perros que presentaron "reacciones inmunitarias" pero "ni presentaron síntomas de la enfermedad ni fallecieron". "Se demostró que el ébola estuvo en su sistema inmune, pero en ningún momento el estudio constató que los humanos fueran el origen de la transmisión", dijo Badiola. Según Badiola, estos animales podrían haberse expuesto al virus mediante el contacto con otros animales o por la ingesta de animales muertos. De hecho, por el momento lo único que se ha demostrado es la transmisión del ébola a humanos procedente de murciélagos, simios e incluso algún antílope.', '5053-ebola_virus.jpg'),
(2, 'Adoptar a un animal es salvarle la vida	', '2014-12-08', '“Charlot es una gata que fue abandonada por sus propietarios, cerca de una manada de gatos, que la atacaron e hirieron. A diferencia de ellos, ella no estaba acostumbrada a vivir en la calle”, cuenta Martha Ruiz, miembro de la campaña de protección animal Socio Fiel y quien ha participado en el rescate de varios animales abandonados. Charlot fue encontrada con varias heridas en su cuerpo. Los rescatistas la atendieron y la llevaron a un refugio para mascotas, donde la han ayudado en su rehabilitación, para que pueda compartir de nuevo con una familia. Hoy ya está lista y hace parte del grupo de animales que participan en la jornada de adopción realizada por la fundación Salvando Huellas y Socio Fiel. “Todos los perros y gatos han sido rescatados de las calles en condiciones muy malas. Sin embargo, ya han sido vacunados, desparasitados y esterilizados”, afirma Ruiz. Y para que una familia lo pueda adoptar debe cumplir con ciertas características. Es decir, al llenar un formulario se demuestra si es apta para acoger a una de las mascotas. Igualmente, las personas recibirán asesoría para escoger al animal y durante un tiempo serán visitados por miembros de Salvando Huellas y Socio Fiel, para hacer un seguimiento a la mascota. Para el cirujano veterinario Guillermo Forero, del Centro Clínico Veterinario Dingo, esta es una labor en la que la nueva familia debe tener mucha paciencia para acoger al animal. “La mascota, sobre todo si es perro, puede estar un poco receloso, ya que otros humanos lo han maltratado en el pasado. En este caso se recomienda que los miembros de la familia sean firmes con los horarios y un poco autoritarios con los mandatos hacia el animal, pero sin ser agresivos”, comenta Forero. Agrega que es necesario que el animal tenga un chequeo médico para saber en qué condiciones se encuentra. Igualmente, si quiere adoptar, busque fundaciones que lo guíen en el proceso, pues la idea es que el animal no sea abandonado nuevamente.	', '4867-animales.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `id_rut` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `iduser` int(11) DEFAULT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_p` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_m` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` enum('Sin definir','Masculino','Femenino') COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(1024) COLLATE utf8_spanish_ci NOT NULL,
  `id_comuna` int(11) NOT NULL,
  `id_provincia` int(11) NOT NULL,
  `id_region` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `lista` enum('Blanca','Gris','Negra') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_rut`, `iduser`, `nombre`, `apellido_p`, `apellido_m`, `fecha_nacimiento`, `genero`, `direccion`, `id_comuna`, `id_provincia`, `id_region`, `telefono`, `lista`) VALUES
('10387850-0', 17, 'Nery Ana', 'Soto', 'Jara', '1965-07-26', 'Femenino', 'Hipolito Salas 1515 Depto. 303', 219, 36, 10, 90504308, 'Blanca'),
('13800414-7', 20, 'Ximena', 'Soto', 'Jara', '1985-05-23', 'Femenino', 'Lautaro 333', 227, 36, 10, 75463512, 'Blanca'),
('16818192-2', 18, 'Marcelo', 'Saez', 'Tapia', '1988-01-29', 'Masculino', 'Lota Alto', 224, 36, 10, 55512345, 'Negra'),
('18414437-9', 10, 'Pedro', 'Soto', 'Soto', '1993-01-08', 'Masculino', 'Hipolito Salas 1515 Depto. 303', 219, 36, 10, 72174944, 'Blanca'),
('5449029-1', 21, 'Pedro', 'Campos', 'Soto', '1985-06-30', 'Masculino', 'Avda. Collao 1202', 219, 36, 10, 3111524, 'Blanca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE IF NOT EXISTS `provincia` (
`id_provincia` int(11) NOT NULL,
  `nombre_provincia` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `id_region` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id_provincia`, `nombre_provincia`, `id_region`) VALUES
(1, 'Arica', 1),
(2, 'Parinacota', 1),
(3, 'Iquique', 2),
(4, 'El Tamarugal', 2),
(5, 'Antofagasta', 3),
(6, 'El Loa', 3),
(7, 'Tocopilla', 3),
(8, 'Chañaral', 4),
(9, 'Copiapó', 4),
(10, 'Huasco', 4),
(11, 'Choapa', 5),
(12, 'Elqui', 5),
(13, 'Limarí', 5),
(14, 'Isla de Pascua', 6),
(15, 'Los Andes', 6),
(16, 'Petorca', 6),
(17, 'Quillota', 6),
(18, 'San Antonio', 6),
(19, 'San Felipe de Aconcagua', 6),
(20, 'Valparaiso', 6),
(21, 'Chacabuco', 7),
(22, 'Cordillera', 7),
(23, 'Maipo', 7),
(24, 'Melipilla', 7),
(25, 'Santiago', 7),
(26, 'Talagante', 7),
(27, 'Cachapoal', 8),
(28, 'Cardenal Caro', 8),
(29, 'Colchagua', 8),
(30, 'Cauquenes', 9),
(31, 'Curicó', 9),
(32, 'Linares', 9),
(33, 'Talca', 9),
(34, 'Arauco', 10),
(35, 'Bio Bío', 10),
(36, 'Concepción', 10),
(37, 'Ñuble', 10),
(38, 'Cautín', 11),
(39, 'Malleco', 11),
(40, 'Valdivia', 12),
(41, 'Ranco', 12),
(42, 'Chiloé', 13),
(43, 'Llanquihue', 13),
(44, 'Osorno', 13),
(45, 'Palena', 13),
(46, 'Aisén', 14),
(47, 'Capitán Prat', 14),
(48, 'Coihaique', 14),
(49, 'General Carrera', 14),
(50, 'Antártica Chilena', 15),
(51, 'Magallanes', 15),
(52, 'Tierra del Fuego', 15),
(53, 'Última Esperanza', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE IF NOT EXISTS `raza` (
`id_raza` int(11) NOT NULL,
  `id_especie` int(11) NOT NULL,
  `nombre_raza` varchar(1024) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `raza`
--

INSERT INTO `raza` (`id_raza`, `id_especie`, `nombre_raza`) VALUES
(1, 1, 'Akita'),
(2, 1, 'Alaskan Husky'),
(3, 1, 'American Foxhound'),
(4, 1, 'American pit bull terrier'),
(5, 1, 'BBasset Hound'),
(6, 1, 'Basset Leonado de Bretaña'),
(7, 1, 'Beagle'),
(8, 1, 'Boxer'),
(9, 1, 'Bull terrier'),
(10, 1, 'Bulldog'),
(11, 1, 'Chihuahua'),
(12, 1, 'Collie'),
(13, 1, 'Dálmata'),
(14, 1, 'Dobermann'),
(15, 1, 'Galgo'),
(16, 1, 'Golden Retriever'),
(17, 1, 'Gran Danés'),
(18, 1, 'Husky siberiano'),
(19, 1, 'Jack Russell terrier'),
(20, 1, 'klee klai alaskan'),
(21, 1, 'Pastor Alemán'),
(22, 1, 'Pill bull terrier americano'),
(23, 1, 'Rottweiler'),
(24, 1, 'San Bernardo'),
(25, 1, 'Shar Pei'),
(26, 1, 'Xoloitzcuintle'),
(27, 1, 'Poodle'),
(50, 1, 'Otros'),
(51, 2, 'Angora'),
(52, 2, 'Bengal'),
(53, 2, 'Azul Ruso'),
(54, 2, 'Balinés'),
(55, 2, 'Bobtail Japonés'),
(56, 2, 'Bombay'),
(57, 2, 'Británico'),
(58, 2, 'British Shorthair'),
(59, 2, 'Himalayo'),
(60, 2, 'Javanés'),
(61, 2, 'Korat'),
(62, 2, 'Maine Coon'),
(63, 2, 'Mau Egipcio'),
(64, 2, 'Pelicorto Americano'),
(65, 2, 'Rex selkirk'),
(66, 2, 'Sagrados de Birmania'),
(67, 2, 'Siamés'),
(68, 2, 'Snowshoe'),
(69, 2, 'Bosque de Noruega'),
(100, 2, 'Otros'),
(101, 3, 'Habitat');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE IF NOT EXISTS `region` (
`id_region` int(11) NOT NULL,
  `nombre_region` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `orginal` varchar(4) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`id_region`, `nombre_region`, `orginal`) VALUES
(1, 'Arica y Parinacota', 'XV'),
(2, 'Tarapacá', 'I'),
(3, 'Antofagasta', 'II'),
(4, 'Atacama', 'III'),
(5, 'Coquimbo', 'IV'),
(6, 'Valparaiso', 'V'),
(7, 'Metropolitana de Santiago', 'RM'),
(8, 'Libertador General Bernardo OHiggins', 'VI'),
(9, 'Maule', 'VII'),
(10, 'Biobío', 'VIII'),
(11, 'La Araucanía', 'IX'),
(12, 'Los Ríos', 'XIV'),
(13, 'Los Lagos', 'X'),
(14, 'Aisén del General Carlos Ibáñez del Campo', 'XI'),
(15, 'Magallanes y de la Antártica Chilena', 'XII');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adopcion`
--
ALTER TABLE `adopcion`
 ADD PRIMARY KEY (`id_adopcion`), ADD KEY `FK_adopta` (`id_rut`), ADD KEY `FK_adoptado` (`id_animal`);

--
-- Indices de la tabla `animal`
--
ALTER TABLE `animal`
 ADD PRIMARY KEY (`id_animal`), ADD KEY `FK_es_de` (`id_especie`), ADD KEY `FK_tiene_color` (`id_color`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
 ADD PRIMARY KEY (`id_color`);

--
-- Indices de la tabla `comuna`
--
ALTER TABLE `comuna`
 ADD PRIMARY KEY (`id_comuna`), ADD KEY `FK_provincia` (`id_provincia`);

--
-- Indices de la tabla `cruge_authassignment`
--
ALTER TABLE `cruge_authassignment`
 ADD PRIMARY KEY (`userid`,`itemname`), ADD KEY `fk_cruge_authassignment_cruge_authitem1` (`itemname`), ADD KEY `fk_cruge_authassignment_user` (`userid`);

--
-- Indices de la tabla `cruge_authitem`
--
ALTER TABLE `cruge_authitem`
 ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `cruge_authitemchild`
--
ALTER TABLE `cruge_authitemchild`
 ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indices de la tabla `cruge_field`
--
ALTER TABLE `cruge_field`
 ADD PRIMARY KEY (`idfield`);

--
-- Indices de la tabla `cruge_fieldvalue`
--
ALTER TABLE `cruge_fieldvalue`
 ADD PRIMARY KEY (`idfieldvalue`), ADD KEY `fk_cruge_fieldvalue_cruge_user1` (`iduser`), ADD KEY `fk_cruge_fieldvalue_cruge_field1` (`idfield`);

--
-- Indices de la tabla `cruge_session`
--
ALTER TABLE `cruge_session`
 ADD PRIMARY KEY (`idsession`), ADD KEY `crugesession_iduser` (`iduser`);

--
-- Indices de la tabla `cruge_system`
--
ALTER TABLE `cruge_system`
 ADD PRIMARY KEY (`idsystem`);

--
-- Indices de la tabla `cruge_user`
--
ALTER TABLE `cruge_user`
 ADD PRIMARY KEY (`iduser`), ADD KEY `FK_cruge_persona_login` (`persona_rut`);

--
-- Indices de la tabla `especie`
--
ALTER TABLE `especie`
 ADD PRIMARY KEY (`id_especie`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
 ADD PRIMARY KEY (`id_noticia`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
 ADD PRIMARY KEY (`id_rut`), ADD KEY `FK_persona_login` (`iduser`), ADD KEY `FK_vive_comuna` (`id_comuna`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
 ADD PRIMARY KEY (`id_provincia`), ADD KEY `FK_region` (`id_region`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
 ADD PRIMARY KEY (`id_raza`), ADD KEY `FK_tiene_raza` (`id_especie`);

--
-- Indices de la tabla `region`
--
ALTER TABLE `region`
 ADD PRIMARY KEY (`id_region`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adopcion`
--
ALTER TABLE `adopcion`
MODIFY `id_adopcion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `animal`
--
ALTER TABLE `animal`
MODIFY `id_animal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `comuna`
--
ALTER TABLE `comuna`
MODIFY `id_comuna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=346;
--
-- AUTO_INCREMENT de la tabla `cruge_field`
--
ALTER TABLE `cruge_field`
MODIFY `idfield` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cruge_fieldvalue`
--
ALTER TABLE `cruge_fieldvalue`
MODIFY `idfieldvalue` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cruge_session`
--
ALTER TABLE `cruge_session`
MODIFY `idsession` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT de la tabla `cruge_system`
--
ALTER TABLE `cruge_system`
MODIFY `idsystem` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cruge_user`
--
ALTER TABLE `cruge_user`
MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `especie`
--
ALTER TABLE `especie`
MODIFY `id_especie` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
MODIFY `id_provincia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
MODIFY `id_raza` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT de la tabla `region`
--
ALTER TABLE `region`
MODIFY `id_region` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adopcion`
--
ALTER TABLE `adopcion`
ADD CONSTRAINT `FK_adopta` FOREIGN KEY (`id_rut`) REFERENCES `persona` (`id_rut`),
ADD CONSTRAINT `FK_adoptado` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id_animal`);

--
-- Filtros para la tabla `animal`
--
ALTER TABLE `animal`
ADD CONSTRAINT `FK_es_de` FOREIGN KEY (`id_especie`) REFERENCES `especie` (`id_especie`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_tiene_color` FOREIGN KEY (`id_color`) REFERENCES `colores` (`id_color`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comuna`
--
ALTER TABLE `comuna`
ADD CONSTRAINT `FK_provincia` FOREIGN KEY (`id_provincia`) REFERENCES `provincia` (`id_provincia`);

--
-- Filtros para la tabla `cruge_authassignment`
--
ALTER TABLE `cruge_authassignment`
ADD CONSTRAINT `fk_cruge_authassignment_cruge_authitem1` FOREIGN KEY (`itemname`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cruge_authitemchild`
--
ALTER TABLE `cruge_authitemchild`
ADD CONSTRAINT `crugeauthitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `crugeauthitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `cruge_authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cruge_fieldvalue`
--
ALTER TABLE `cruge_fieldvalue`
ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_field1` FOREIGN KEY (`idfield`) REFERENCES `cruge_field` (`idfield`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cruge_fieldvalue_cruge_user1` FOREIGN KEY (`iduser`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cruge_user`
--
ALTER TABLE `cruge_user`
ADD CONSTRAINT `FK_cruge_persona_login` FOREIGN KEY (`persona_rut`) REFERENCES `persona` (`id_rut`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
ADD CONSTRAINT `FK_persona_login` FOREIGN KEY (`iduser`) REFERENCES `cruge_user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `FK_vive_comuna` FOREIGN KEY (`id_comuna`) REFERENCES `comuna` (`id_comuna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `provincia`
--
ALTER TABLE `provincia`
ADD CONSTRAINT `FK_region` FOREIGN KEY (`id_region`) REFERENCES `region` (`id_region`);

--
-- Filtros para la tabla `raza`
--
ALTER TABLE `raza`
ADD CONSTRAINT `FK_tiene_raza` FOREIGN KEY (`id_especie`) REFERENCES `especie` (`id_especie`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
