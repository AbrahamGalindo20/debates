-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-07-2025 a las 06:52:33
-- Versión del servidor: 8.0.42-0ubuntu0.24.04.1
-- Versión de PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `debates`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `edad` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `sexo` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `email` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `contrasenia` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `username`, `edad`, `sexo`, `email`, `contrasenia`) VALUES
(1, 'abrahamg', '18-25', 'Masculino', 'abraham.galindo.developer@gmail.com', '211020'),
(7, 'alonsoj', '35-45', 'Masculino', 'ajacoboandriani@gmail.com', 'Alonso1234'),
(9, 'Ajacoboandriani@gmail.com', '18-25', 'Masculino', 'prueba@gmail.com', 'AJ2019amigos'),
(10, 'alonso ', '45-55', 'Masculino', 'ajacoboandriani@gmail.com', 'AJ2019amigos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncios`
--

CREATE TABLE `anuncios` (
  `id` int NOT NULL,
  `area` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `idAnuncio` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `linkImagen` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `linkAnuncio` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `estado` varchar(500) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `anuncios`
--

INSERT INTO `anuncios` (`id`, `area`, `idAnuncio`, `linkImagen`, `linkAnuncio`, `estado`) VALUES
(1, 'sala1', '1', './assets/img/uno.jpg', 'https://www.elmundo.es/espana.html', ''),
(2, 'sala2', '1', './assets/img/dos.jpg', 'https://www.elmundo.es/espana.html', ''),
(3, 'sala3', '1', './assets/img/uno.jpg', 'https://www.elmundo.es/espana.html', ''),
(4, 'sala4', '1', './assets/img/dos.jpg', 'https://www.elmundo.es/espana.html', ''),
(5, 'general', '1', './assets/img/uno.jpg', 'https://www.elmundo.es/espana.html', ''),
(6, 'encuestas', '1', './assets/img/dos.jpg', 'https://www.elmundo.es/espana.html', ''),
(7, 'sala2', '2', './assets/img/dos.jpg', 'https://www.elmundo.es/espana.html', ''),
(8, 'sala2', '3', './assets/img/dos.jpg', 'https://www.elmundo.es/espana.html', ''),
(9, 'sala2', '4', './assets/img/dos.jpg', 'https://www.elmundo.es/espana.html', ''),
(10, 'sala1', '2', './assets/img/uno.jpg', 'https://www.elmundo.es/espana.html', ''),
(11, 'sala1', '3', './assets/img/uno.jpg', 'https://www.elmundo.es/espana.html', ''),
(12, 'sala1', '4', './assets/img/uno.jpg', 'https://www.elmundo.es/espana.html', ''),
(13, 'sala3', '2', './assets/img/uno.jpg', 'https://www.elmundo.es/espana.html', ''),
(14, 'sala4', '2', './assets/img/dos.jpg', 'https://www.elmundo.es/espana.html', ''),
(15, 'sala3', '3', './assets/img/uno.jpg', 'https://www.elmundo.es/espana.html', ''),
(16, 'sala4', '3', './assets/img/dos.jpg', 'https://www.elmundo.es/espana.html', ''),
(17, 'sala3', '4', './assets/img/uno.jpg', 'https://www.elmundo.es/espana.html', ''),
(18, 'sala4', '4', './assets/img/dos.jpg', 'https://www.elmundo.es/espana.html', ''),
(19, 'general', '2', './assets/img/uno.jpg', 'https://www.elmundo.es/espana.html', ''),
(20, 'encuestas', '2', './assets/img/dos.jpg', 'https://www.elmundo.es/espana.html', ''),
(21, 'general', '3', './assets/img/uno.jpg', 'https://www.elmundo.es/espana.html', ''),
(22, 'encuestas', '3', './assets/img/dos.jpg', 'https://www.elmundo.es/espana.html', ''),
(23, 'encuestas', '4', './assets/img/dos.jpg', 'https://www.elmundo.es/espana.html', 'Finzalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int NOT NULL,
  `nombre` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'Actividades Colectivas'),
(2, 'Actualidad '),
(3, 'Cocina y Gastronomia'),
(4, 'Comunicación'),
(5, 'Arte y Cultura'),
(6, 'Deporte'),
(7, 'Entretenimiento'),
(8, 'Feminismo'),
(9, 'Economia'),
(10, 'Medio Ambiente'),
(11, 'Mundo animal'),
(12, 'Politica '),
(13, 'Redes Sociales'),
(14, 'Salud y Bienestar'),
(15, 'Sociedad'),
(16, 'Turismo'),
(17, 'Compra-venta-alquiler'),
(18, 'Segundamano'),
(19, 'Ofertas de empleo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `debatesantiguos`
--

CREATE TABLE `debatesantiguos` (
  `id` int NOT NULL,
  `id_debate` int NOT NULL,
  `id_mensajes` int NOT NULL,
  `user_id` int NOT NULL,
  `message` varchar(5000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `debatesantiguos`
--

INSERT INTO `debatesantiguos` (`id`, `id_debate`, `id_mensajes`, `user_id`, `message`) VALUES
(58, 1, 1, 1, 'Hola'),
(59, 1, 3, 1, 'Hola'),
(60, 1, 4, 1, 'Bien'),
(61, 1, 5, 1, 'Como te llamas'),
(62, 1, 6, 1, 'quiero dar mi opinion respecto al trema que estamos tratando ya que se me hace demasiado inconsiente'),
(63, 1, 7, 1, 'adasd'),
(64, 1, 8, 1, 'asd'),
(65, 1, 9, 1, 'asd'),
(66, 1, 10, 1, 'asdas'),
(67, 1, 11, 1, 'asd'),
(68, 1, 12, 1, 'asd'),
(69, 1, 13, 1, 'asd'),
(70, 1, 14, 1, 'asd'),
(71, 1, 15, 1, 'asdsdljasdasjdiasjdoijasoidioasjd'),
(72, 1, 16, 1, 'hola'),
(73, 1, 17, 2, 'aaa'),
(74, 1, 18, 2, 'aaa'),
(75, 1, 19, 2, 'aaaa'),
(76, 1, 20, 2, 'asdasd'),
(77, 1, 21, 2, 'aa'),
(78, 1, 22, 2, 'a'),
(79, 1, 23, 1, 'asd'),
(80, 1, 24, 1, 'asd'),
(81, 1, 25, 1, 'as'),
(82, 1, 26, 1, 'jhhbh'),
(83, 1, 27, 1, 'aaa'),
(84, 1, 28, 1, 'aaa'),
(85, 1, 29, 1, 'aaa'),
(86, 1, 30, 1, 'a'),
(87, 1, 31, 1, 'asdasd'),
(88, 1, 32, 1, 'asd'),
(89, 1, 33, 1, 'asdas'),
(90, 1, 34, 1, 'asdas'),
(91, 1, 35, 1, 'Hola este es un mensaje de prueba'),
(92, 1, 36, 1, 'mensaje 3'),
(93, 1, 37, 4, '5'),
(94, 1, 38, 1, 'Hola'),
(95, 1, 39, 4, 'Como estas'),
(96, 1, 40, 4, 'esta es una demo de los mensajes'),
(97, 1, 41, 1, 'gracias por usar debatesonline.es'),
(98, 1, 42, 4, 'hola'),
(99, 1, 43, 4, 'como estas'),
(100, 1, 44, 4, 'hola'),
(101, 1, 45, 4, 'gola'),
(102, 1, 46, 0, 'jajan'),
(103, 1, 47, 4, 'gola'),
(104, 1, 48, 4, 'asdnasjnda'),
(105, 1, 49, 1, 'ads}'),
(106, 1, 50, 3, 'asdjnjasd'),
(107, 1, 51, 1, 'akjsdnjas'),
(108, 1, 52, 1, 'adkmaksmd'),
(109, 1, 53, 1, 'kmdkmaslkd'),
(110, 1, 54, 1, 'aksdkasmd'),
(111, 1, 55, 1, 'KKM'),
(112, 1, 56, 1, '1233'),
(113, 1, 57, 1, '1'),
(114, 1, 58, 6, '222'),
(115, 2, 3, 1, 'Hola'),
(116, 2, 4, 1, 'Como estas'),
(117, 2, 5, 1, 'Como te llamas'),
(118, 2, 6, 1, 'quiero dar mi opinion respecto al trema que estamos tratando ya que se me hace demasiado inconsiente'),
(119, 2, 7, 1, 'adasd'),
(120, 2, 8, 1, 'asd'),
(121, 2, 9, 1, 'asd'),
(122, 2, 10, 1, 'asdas'),
(123, 2, 11, 1, 'asd'),
(124, 2, 12, 1, 'asd'),
(125, 2, 13, 1, 'asd'),
(126, 2, 14, 1, 'asd'),
(127, 2, 15, 1, 'asdsdljasdasjdiasjdoijasoidioasjd'),
(128, 2, 16, 1, 'hola'),
(129, 2, 17, 2, 'aaa'),
(130, 2, 18, 2, 'aaa'),
(131, 2, 19, 2, 'aaaa'),
(132, 2, 20, 2, 'asdasd'),
(133, 2, 21, 2, 'aa'),
(134, 2, 22, 2, 'a'),
(135, 2, 23, 1, 'asd'),
(136, 2, 24, 1, 'asd'),
(137, 2, 25, 1, 'as'),
(138, 2, 26, 1, 'jhhbh'),
(139, 2, 27, 1, 'aaa'),
(140, 2, 28, 1, 'aaa'),
(141, 2, 29, 1, 'aaa'),
(142, 2, 30, 1, 'a'),
(143, 2, 31, 1, 'asdasd'),
(144, 2, 32, 1, 'asd'),
(145, 2, 33, 1, 'asdas'),
(146, 2, 34, 1, 'asdas'),
(147, 2, 35, 1, 'Hola este es un mensaje de prueba'),
(148, 2, 36, 1, 'mensaje 3'),
(149, 2, 37, 4, 'aasdasd'),
(150, 2, 38, 1, 'Hola'),
(151, 2, 39, 4, 'Como estas'),
(152, 2, 40, 4, 'esta es una demo de los mensajes'),
(153, 2, 41, 1, 'gracias por usar debatesonline.es'),
(154, 2, 42, 4, 'hola'),
(155, 2, 43, 4, 'como estas'),
(156, 2, 44, 4, 'hola'),
(157, 2, 45, 4, 'gola'),
(158, 2, 46, 0, 'jajan'),
(159, 2, 47, 4, 'gola'),
(160, 2, 48, 4, 'asdnasjnda'),
(161, 2, 49, 1, 'ads}'),
(162, 2, 50, 1, 'asdjnjasd'),
(163, 2, 51, 1, 'akjsdnjas'),
(164, 2, 52, 1, 'adkmaksmd'),
(165, 2, 53, 1, 'kmdkmaslkd'),
(166, 2, 54, 1, 'aksdkasmd'),
(167, 2, 55, 1, 'KKM'),
(168, 2, 56, 1, '5'),
(169, 3, 6, 1, 'quiero dar mi opinion respecto al trema que estamos tratando ya que se me hace demasiado inconsiente'),
(170, 3, 7, 1, 'adasd'),
(171, 3, 8, 1, 'asd'),
(172, 3, 9, 1, 'asd'),
(173, 3, 10, 1, 'asdas'),
(174, 3, 11, 1, 'asd'),
(175, 3, 12, 1, 'asd'),
(176, 3, 13, 1, 'asd'),
(177, 3, 14, 1, 'asd'),
(178, 3, 15, 1, 'asdsdljasdasjdiasjdoijasoidioasjd'),
(179, 3, 16, 1, 'hola'),
(180, 3, 17, 2, 'aaa'),
(181, 3, 18, 2, 'aaa'),
(182, 3, 19, 2, 'aaaa'),
(183, 3, 20, 2, 'asdasd'),
(184, 3, 21, 2, 'aa'),
(185, 3, 22, 2, 'a'),
(186, 3, 23, 1, 'asd'),
(187, 3, 24, 1, 'asd'),
(188, 3, 25, 1, 'as'),
(189, 3, 26, 1, 'jhhbh'),
(190, 3, 27, 1, 'aaa'),
(191, 3, 28, 1, 'aaa'),
(192, 3, 29, 1, 'aaa'),
(193, 3, 30, 1, 'a'),
(194, 3, 31, 1, 'asdasd'),
(195, 3, 32, 1, 'asd'),
(196, 3, 33, 1, 'asdas'),
(197, 3, 34, 1, 'asdas'),
(198, 3, 35, 1, 'Hola este es un mensaje de prueba'),
(199, 3, 36, 1, 'mensaje 3'),
(200, 3, 37, 4, 'aasdasd'),
(201, 3, 38, 1, 'Hola'),
(202, 3, 39, 4, 'Como estas'),
(203, 3, 40, 4, 'esta es una demo de los mensajes'),
(204, 3, 41, 1, 'gracias por usar debatesonline.es'),
(205, 3, 42, 4, 'hola'),
(206, 3, 43, 4, 'como estas'),
(207, 3, 44, 4, 'hola'),
(208, 3, 45, 4, 'gola'),
(209, 3, 46, 0, 'jajan'),
(210, 3, 47, 4, 'gola'),
(211, 3, 48, 4, 'asdnasjnda'),
(212, 3, 49, 1, 'ads}'),
(213, 3, 50, 1, 'asdjnjasd'),
(214, 3, 51, 1, 'akjsdnjas'),
(215, 3, 52, 1, 'adkmaksmd'),
(216, 3, 53, 1, 'kmdkmaslkd'),
(217, 3, 54, 1, 'aksdkasmd'),
(218, 3, 55, 1, 'KKM'),
(219, 0, 1, 1, 'Hola'),
(220, 0, 2, 1, '5'),
(221, 0, 3, 1, 'Hola'),
(222, 0, 4, 1, 'Como estas'),
(223, 0, 5, 1, 'Como te llamas'),
(224, 0, 6, 1, 'quiero dar mi opinion respecto al trema que estamos tratando ya que se me hace demasiado inconsiente'),
(225, 0, 7, 1, 'adasd'),
(226, 0, 8, 1, 'asd'),
(227, 0, 9, 1, 'asd'),
(228, 0, 10, 1, 'asdas'),
(229, 0, 11, 1, 'asd'),
(230, 0, 12, 1, 'asd'),
(231, 0, 13, 1, 'asd'),
(232, 0, 14, 1, 'asd'),
(233, 0, 15, 1, 'asdsdljasdasjdiasjdoijasoidioasjd'),
(234, 0, 16, 1, 'hola'),
(235, 0, 17, 2, 'aaa'),
(236, 0, 26, 1, 'jhhbh'),
(237, 0, 27, 1, 'aaa'),
(238, 0, 28, 1, 'aaa'),
(239, 0, 29, 1, 'aaa'),
(240, 0, 30, 1, 'a'),
(241, 0, 31, 1, 'asdasd'),
(242, 0, 32, 1, 'asd'),
(243, 0, 33, 1, 'asdas'),
(244, 0, 34, 1, 'asdas'),
(245, 0, 35, 1, 'Hola este es un mensaje de prueba'),
(246, 0, 36, 1, 'mensaje 3'),
(247, 0, 37, 4, 'aasdasd'),
(248, 0, 38, 1, 'Hola'),
(249, 0, 39, 4, 'Como estas'),
(250, 0, 40, 4, 'esta es una demo de los mensajes'),
(251, 0, 41, 1, 'gracias por usar debatesonline.es'),
(252, 0, 42, 4, 'hola'),
(253, 0, 43, 4, 'como estas'),
(254, 0, 44, 4, 'hola'),
(255, 0, 45, 4, 'gola'),
(256, 0, 46, 0, 'jajan'),
(257, 0, 47, 4, 'gola'),
(258, 0, 48, 4, 'asdnasjnda'),
(259, 0, 49, 1, 'ads}'),
(260, 0, 50, 1, 'asdjnjasd'),
(261, 0, 51, 1, 'akjsdnjas'),
(262, 0, 52, 1, 'adkmaksmd'),
(263, 0, 53, 1, 'kmdkmaslkd'),
(264, 0, 54, 1, 'aksdkasmd'),
(265, 0, 55, 1, 'KKM'),
(266, 0, 56, 1, '1221'),
(267, 0, 57, 1, '1212121212'),
(268, 0, 58, 1, 'ññ'),
(269, 0, 59, 1, 'mlk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestas`
--

CREATE TABLE `encuestas` (
  `id` int NOT NULL,
  `tema` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `sala` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `estado` varchar(50) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `encuestas`
--

INSERT INTO `encuestas` (`id`, `tema`, `sala`, `estado`) VALUES
(2, 'Prueba de cambio de pregunta', '2', 'Vigente'),
(3, 'Estas a favor o encontra del movimiento LGBTQ+', '3', 'Vigente'),
(4, 'Estas a favor del cuidado de la naturaleza?', '4', 'Archivado'),
(5, 'Duda de la pregunta', '2', 'Archivado'),
(7, 'Estas a favor del cuidado de la naturaleza?', '4', 'Archivado'),
(8, 'Estas a favor en españa del presidente? considerando los datos de encuestas', '1', 'Archivado'),
(9, 'Prueba de encuesta vigente', '1', 'Vigente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestasestadisticas`
--

CREATE TABLE `encuestasestadisticas` (
  `id` int NOT NULL,
  `id_test` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `respuesta` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `id_user` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `encuestasestadisticas`
--

INSERT INTO `encuestasestadisticas` (`id`, `id_test`, `respuesta`, `id_user`) VALUES
(1, '1', '1', ''),
(2, '1', '1', ''),
(3, '1', '1', ''),
(4, '1', '1', ''),
(5, '1', '1', ''),
(6, '1', '1', ''),
(7, '1', '1', ''),
(8, '1', '1', ''),
(9, '1', '1', '1'),
(10, '1', '1', '1'),
(11, '1', '2', '1'),
(12, '1', '2', '1'),
(13, '1', '2', '1'),
(14, '1', '2', '1'),
(15, '1', '2', '1'),
(16, '1', '2', '1'),
(17, '1', '2', '1'),
(18, '1', '2', '1'),
(19, '1', '2', '1'),
(20, '1', '2', '1'),
(21, '1', '2', '1'),
(22, '1', '2', '1'),
(23, '1', '2', '1'),
(24, '2', '2', '1'),
(25, '2', '1', '1'),
(26, '2', '2', '1'),
(27, '2', '1', '1'),
(28, '2', '2', '1'),
(29, '2', '1', '1'),
(30, '2', '2', '1'),
(31, '2', '1', '1'),
(32, '2', '2', '1'),
(33, '2', '1', '1'),
(34, '2', '2', '1'),
(35, '2', '1', '1'),
(36, '2', '2', '1'),
(37, '2', '1', '1'),
(38, '3', '1', '1'),
(39, '3', '1', '1'),
(40, '3', '1', '1'),
(41, '3', '1', '1'),
(42, '3', '1', '1'),
(43, '3', '1', '1'),
(44, '3', '1', '1'),
(45, '3', '1', '1'),
(46, '3', '1', '1'),
(47, '3', '1', '1'),
(48, '3', '1', '1'),
(49, '3', '1', '1'),
(50, '3', '1', '1'),
(51, '3', '1', '1'),
(52, '3', '1', '1'),
(53, '8', '1', '1'),
(54, '3', '1', '1'),
(55, '3', '1', '1'),
(56, '3', '2', '1'),
(57, '3', '2', '1'),
(58, '5', '2', '1'),
(59, '6', '2', '1'),
(60, '3', '2', '1'),
(61, '3', '2', '1'),
(62, '4', '2', '1'),
(63, '3', '2', '1'),
(64, '7', '2', '1'),
(65, '1', '1', '6'),
(67, '4', '1', '1'),
(68, '1', '1', ''),
(69, '2', '2', '10'),
(71, '9', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticasanuncios`
--

CREATE TABLE `estadisticasanuncios` (
  `id` int NOT NULL,
  `id_anuncio` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `id_user` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `estadisticasanuncios`
--

INSERT INTO `estadisticasanuncios` (`id`, `id_anuncio`, `id_user`) VALUES
(1, '1', '1'),
(2, '8', '1'),
(3, '12', '1'),
(4, '12', '1'),
(5, '12', '1'),
(6, '12', '1'),
(7, '11', '1'),
(8, '9', '1'),
(9, '7', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticasip`
--

CREATE TABLE `estadisticasip` (
  `id` int NOT NULL,
  `username` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `ip` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `navegador` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `dispositivo` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `fecha` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `hora` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `accion` varchar(5000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `idSala` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `estadisticasip`
--

INSERT INTO `estadisticasip` (`id`, `username`, `ip`, `navegador`, `dispositivo`, `fecha`, `hora`, `accion`, `idSala`) VALUES
(1, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-11', '19:05:12', 'Ingreso a sala 2', '1'),
(2, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-11', '19:05:37', 'Ingreso a sala 2', '1'),
(3, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-11', '19:07:17', 'Ingreso a sala 2', '1'),
(4, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-11', '19:07:21', 'Ingreso a sala 3', '1'),
(5, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-11', '19:07:22', 'Ingreso a sala 4', '1'),
(6, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-11', '19:35:08', 'Ingreso a sala 4', '1'),
(7, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '05:46:11', 'Ingreso a Salas', '1'),
(8, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '05:48:11', 'Ingreso a Salas', '1'),
(9, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '05:48:15', 'Ingreso a historico debates', '2'),
(10, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '05:48:16', 'Ingreso a Salas', '12'),
(11, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '05:54:28', 'Ingreso a Salas', '12'),
(12, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '05:54:55', 'Ingreso a Salas', '2'),
(13, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '05:54:56', 'Ingreso a Salas', '12'),
(14, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '05:55:08', 'Ingreso a sala 1', '12'),
(15, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '05:55:09', 'Ingreso a Salas', '2'),
(16, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '05:59:46', 'Ingreso a Salas', '12'),
(17, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:00:07', 'Ingreso a Salas', '4'),
(18, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:02:35', 'Ingreso a Salas', '4'),
(19, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:02:46', 'Ingreso a Salas', '2'),
(20, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:02:52', 'Ingreso a Salas', '2'),
(21, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:02:56', 'Ingreso a Salas', '12'),
(22, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:03:00', 'Ingreso a Salas', '4'),
(23, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:03:03', 'Ingreso a Salas', '4'),
(24, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:03:14', 'Ingreso a Salas', '12'),
(25, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:03:17', 'Ingreso a Salas', '12'),
(26, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:03:25', 'Ingreso a Salas', '12'),
(27, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:04:11', 'Ingreso a Salas', '12'),
(28, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:04:19', 'Ingreso a Salas', '12'),
(29, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:04:43', 'Ingreso a Salas', '12'),
(30, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:04:50', 'Ingreso a Salas', '12'),
(31, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:04:56', 'Ingreso a Salas', '12'),
(32, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:04:57', 'Ingreso a Salas', '12'),
(33, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:05:00', 'Ingreso a Salas', '12'),
(34, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:05:06', 'Ingreso a Salas', '12'),
(35, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:05:16', 'Ingreso a Salas', '12'),
(36, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:05:17', 'Ingreso a Salas', '12'),
(37, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:05:22', 'Ingreso a Salas', '12'),
(38, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:05:50', 'Ingreso a Salas', '12'),
(39, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:05:56', 'Ingreso a Salas', '12'),
(40, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:06:12', 'Ingreso a Salas', '12'),
(41, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:06:16', 'Ingreso a Salas', '12'),
(42, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:06:19', 'Ingreso a Salas', '12'),
(43, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:06:32', 'Ingreso a Salas', '12'),
(44, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:06:39', 'Ingreso a Salas', '12'),
(45, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:06:49', 'Ingreso a Salas', '12'),
(46, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:07:38', 'Ingreso a Salas', '12'),
(47, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:07:46', 'Ingreso a Salas', '12'),
(48, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:07:54', 'Ingreso a Salas', '12'),
(49, '1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'Windows', '2024-03-22', '06:08:04', 'Ingreso a Salas', '12'),
(50, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '14:57:12', 'Ingreso a Salas', ''),
(51, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '14:57:26', 'Ingreso a Salas', ''),
(52, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:31:45', 'Ingreso a Salas', ''),
(53, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:31:58', 'Ingreso a sala 2', '11'),
(54, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:32:01', 'Ingreso a sala 2', '11'),
(55, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:32:04', 'Ingreso a sala 3', '16'),
(56, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:32:15', 'Ingreso a sala 3', '16'),
(57, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:32:17', 'Ingreso a sala 2', '11'),
(58, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:32:21', 'Ingreso a sala 3', '16'),
(59, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:32:28', 'Ingreso a sala 3', '16'),
(60, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:32:30', 'Ingreso a sala 2', '11'),
(61, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:32:37', 'Ingreso a sala 2', '11'),
(62, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:32:43', 'Ingreso a sala 3', '16'),
(63, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:32:46', 'Ingreso a sala 1', '15'),
(64, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:32:59', 'Ingreso a sala 1 maximizada', ''),
(65, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:33:01', 'Ingreso a sala 1', '15'),
(66, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:33:57', 'Ingreso a Salas', ''),
(67, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:34:01', 'Ingreso a sala 2', '11'),
(68, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:34:03', 'Ingreso a sala 2', '11'),
(69, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:34:06', 'Ingreso a sala 3', '16'),
(70, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:34:10', 'Ingreso a sala 1', '15'),
(71, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:34:14', 'Ingreso a sala 2', '11'),
(72, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:34:56', 'Ingreso a Salas', ''),
(73, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:44:45', 'Ingreso a Salas', ''),
(74, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:44:47', 'Ingreso a sala 2', '11'),
(75, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:44:49', 'Ingreso a sala 2', '11'),
(76, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:44:51', 'Ingreso a sala 3', '16'),
(77, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:45:15', 'Ingreso a sala 1', '15'),
(78, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:45:19', 'Ingreso a sala 1', '15'),
(79, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:45:20', 'Ingreso a sala 1', '15'),
(80, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:45:21', 'Ingreso a sala 1', '15'),
(81, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:45:21', 'Ingreso a sala 1', '15'),
(82, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:45:22', 'Ingreso a sala 1', '15'),
(83, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:45:23', 'Ingreso a sala 1', '15'),
(84, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:45:28', 'Ingreso a sala 1', '15'),
(85, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:47:19', 'Ingreso a historico debates', ''),
(86, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:47:28', 'Ingreso a encuestas', ''),
(87, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:47:34', 'Ingreso a historico debates', ''),
(88, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:47:39', 'Ingreso a encuestas', ''),
(89, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:47:41', 'Ingreso a historico debates', ''),
(90, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:47:45', 'Ingreso a encuestas', ''),
(91, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:47:55', 'Ingreso a historico debates', ''),
(92, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:47:59', 'Ingreso a encuestas', ''),
(93, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:48:10', 'Ingreso a historico debates', ''),
(94, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:48:14', 'Ingreso a encuestas', ''),
(95, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:48:17', 'Ingreso a historico debates', ''),
(96, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:48:21', 'Ingreso a sala 1', '15'),
(97, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:51:00', 'Ingreso a sala 2', '11'),
(98, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:51:02', 'Ingreso a sala 2', '11'),
(99, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:51:06', 'Ingreso a sala 3', '16'),
(100, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:51:08', 'Ingreso a sala 1', '15'),
(101, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:51:09', 'Ingreso a sala 1', '15'),
(102, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:51:10', 'Ingreso a sala 1', '15'),
(103, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '19:55:42', 'Ingreso a sala 2', '11'),
(104, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:03:10', 'Ingreso a Salas', ''),
(105, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:03:20', 'Ingreso a sala 2', '11'),
(106, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:03:24', 'Ingreso a sala 2', '11'),
(107, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:03:31', 'Ingreso a sala 3', '16'),
(108, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:03:31', 'Ingreso a sala 3', '16'),
(109, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:03:44', 'Ingreso a sala 1', '15'),
(110, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:03:45', 'Ingreso a sala 1', '15'),
(111, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:03:45', 'Ingreso a sala 1', '15'),
(112, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:03:46', 'Ingreso a sala 1', '15'),
(113, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:03:46', 'Ingreso a sala 1', '15'),
(114, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:16', 'Ingreso a sala 1', '15'),
(115, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:16', 'Ingreso a sala 1', '15'),
(116, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:17', 'Ingreso a sala 1', '15'),
(117, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:28', 'Ingreso a sala 1', '15'),
(118, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:28', 'Ingreso a sala 1', '15'),
(119, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:29', 'Ingreso a sala 1', '15'),
(120, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:29', 'Ingreso a sala 1', '15'),
(121, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:30', 'Ingreso a sala 1', '15'),
(122, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:30', 'Ingreso a sala 1', '15'),
(123, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:31', 'Ingreso a sala 1', '15'),
(124, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:31', 'Ingreso a sala 1', '15'),
(125, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:31', 'Ingreso a sala 1', '15'),
(126, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:32', 'Ingreso a sala 1', '15'),
(127, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:32', 'Ingreso a sala 1', '15'),
(128, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:33', 'Ingreso a sala 1', '15'),
(129, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:33', 'Ingreso a sala 1', '15'),
(130, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:33', 'Ingreso a sala 1', '15'),
(131, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:34', 'Ingreso a sala 1', '15'),
(132, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:34', 'Ingreso a sala 1', '15'),
(133, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:35', 'Ingreso a sala 1', '15'),
(134, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:38', 'Ingreso a sala 1', '15'),
(135, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:38', 'Ingreso a sala 1', '15'),
(136, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:39', 'Ingreso a sala 1', '15'),
(137, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:40', 'Ingreso a sala 2', '11'),
(138, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:43', 'Ingreso a sala 2', '11'),
(139, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:46', 'Ingreso a sala 2', '11'),
(140, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:46', 'Ingreso a sala 2', '11'),
(141, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:50', 'Ingreso a sala 3', '16'),
(142, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:04:53', 'Ingreso a sala 3', '16'),
(143, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:05:07', 'Ingreso a sala 1', '15'),
(144, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:05:07', 'Ingreso a sala 1', '15'),
(145, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:05:08', 'Ingreso a sala 1', '15'),
(146, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:05:08', 'Ingreso a sala 1', '15'),
(147, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:05:09', 'Ingreso a sala 1', '15'),
(148, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:06:12', 'Ingreso a Salas', ''),
(149, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:06:15', 'Ingreso a sala 3', '16'),
(150, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-07-31', '20:06:49', 'Ingreso a sala 3', '16'),
(151, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:07:37', 'Ingreso a sala 3', '16'),
(152, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:07:38', 'Ingreso a sala 3', '16'),
(153, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:07:40', 'Ingreso a sala 1', '15'),
(154, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:08:19', 'Ingreso a sala 1', '4'),
(155, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:08:20', 'Ingreso a sala 1', '4'),
(156, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:09:44', 'Ingreso a sala 1', '4'),
(157, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:09:45', 'Ingreso a sala 1', '4'),
(158, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:10:11', 'Ingreso a sala 1', '4'),
(159, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:10:19', 'Ingreso a sala 1', '4'),
(160, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:10:21', 'Ingreso a Salas', ''),
(161, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:10:51', 'Ingreso a Salas', ''),
(162, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:10:57', 'Ingreso a sala 1', '4'),
(163, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:10:58', 'Ingreso a Salas', ''),
(164, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:11:08', 'Ingreso a Salas', ''),
(165, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:11:14', 'Ingreso a sala 2', '11'),
(166, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:11:16', 'Ingreso a Salas', ''),
(167, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:11:39', 'Ingreso a sala 1', '4'),
(168, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:11:53', 'Ingreso a encuestas', ''),
(169, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:11:55', 'Ingreso a encuestas', ''),
(170, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:11:57', 'Ingreso a encuestas', ''),
(171, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:12:00', 'Ingreso a encuestas', ''),
(172, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:12:02', 'Ingreso a Salas', ''),
(173, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:12:08', 'Ingreso a Salas', ''),
(174, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:12:26', 'Ingreso a historico debates', ''),
(175, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:12:29', 'Ingreso a Salas', ''),
(176, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:13:25', 'Ingreso a sala 1', '4'),
(177, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:13:46', 'Ingreso a sala 1', '4'),
(178, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:13:47', 'Ingreso a sala 3', '16'),
(179, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:13:50', 'Ingreso a sala 2', '11'),
(180, '1', '187.191.42.195', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Linux', '2024-07-31', '20:13:53', 'Ingreso a sala 2', '11'),
(181, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:33:38', 'Ingreso a Salas', ''),
(182, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:33:40', 'Ingreso a sala 1', '4'),
(183, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:33:48', 'Ingreso a sala 3', '16'),
(184, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:34:03', 'Ingreso a sala 2', '11'),
(185, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:34:05', 'Ingreso a sala 2', '11'),
(186, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:34:06', 'Ingreso a sala 3', '16'),
(187, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:34:08', 'Ingreso a sala 3', '16'),
(188, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:34:09', 'Ingreso a sala 1', '4'),
(189, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:34:49', 'Ingreso a sala 1', '4'),
(190, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:34:57', 'Ingreso a Salas', ''),
(191, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:35:07', 'Ingreso a Salas', ''),
(192, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:35:33', 'Ingreso a sala 2', '11'),
(193, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:35:53', 'Ingreso a Salas', ''),
(194, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:35:56', 'Ingreso a Salas', ''),
(195, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:46:26', 'Ingreso a Salas', ''),
(196, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:47:10', 'Ingreso a sala 1', '17'),
(197, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:51:09', 'Ingreso a Salas', ''),
(198, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-01', '13:51:12', 'Ingreso a sala 1', '17'),
(199, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-05', '17:23:08', 'Ingreso a Salas', ''),
(200, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-05', '17:23:13', 'Ingreso a sala 2', '11'),
(201, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-05', '17:23:16', 'Ingreso a sala 2', '11'),
(202, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-05', '17:23:20', 'Ingreso a sala 3', '16'),
(203, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-05', '17:23:22', 'Ingreso a sala 1', '17'),
(204, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-05', '17:23:33', 'Ingreso a sala 1', '17'),
(205, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-07', '23:03:43', 'Ingreso a Salas', ''),
(206, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-07', '23:03:50', 'Ingreso a sala 1', '17'),
(207, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-07', '23:04:02', 'Ingreso a sala 3', '16'),
(208, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-07', '23:04:08', 'Ingreso a sala 2', '11'),
(209, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-07', '23:04:11', 'Ingreso a sala 1', '17'),
(210, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-07', '23:04:20', 'Ingreso a Salas', ''),
(211, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-07', '23:04:45', 'Ingreso a Salas', ''),
(212, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-08', '00:34:31', 'Ingreso a Salas', ''),
(213, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-08', '13:07:01', 'Ingreso a Salas', ''),
(214, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-08', '13:07:05', 'Ingreso a sala 3', '16'),
(215, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-08', '13:07:11', 'Ingreso a sala 1', '17'),
(216, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-08', '13:07:21', 'Ingreso a sala 3', '16'),
(217, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-08', '13:07:24', 'Ingreso a sala 3 maximizada', ''),
(218, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-08', '13:07:29', 'Ingreso a sala 3', '16'),
(219, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-08', '13:07:40', 'Ingreso a Salas', ''),
(220, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-08', '13:07:45', 'Ingreso a sala 2', '11'),
(221, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-08', '13:07:47', 'Ingreso a sala 2 maximizada', ''),
(222, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-08', '13:07:56', 'Ingreso a sala 2', '11'),
(223, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-08', '13:07:59', 'Ingreso a Salas', ''),
(224, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-08', '13:08:05', 'Ingreso a encuestas', ''),
(225, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-08', '13:08:09', 'Ingreso a Salas', ''),
(226, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-08', '13:08:14', 'Ingreso a encuestas', ''),
(227, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-08', '13:08:31', 'Ingreso a Salas', ''),
(228, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-09', '00:03:12', 'Ingreso a Salas', ''),
(229, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-09', '00:03:14', 'Ingreso a sala 1', '17'),
(230, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-09', '00:03:19', 'Ingreso a Salas', ''),
(231, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Windows', '2024-08-09', '01:19:12', 'Ingreso a Salas', ''),
(232, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Windows', '2024-08-09', '01:19:14', 'Ingreso a sala 1', '17'),
(233, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Windows', '2024-08-09', '17:21:08', 'Ingreso a Salas', ''),
(234, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Windows', '2024-08-09', '17:21:16', 'Ingreso a sala 2', '11'),
(235, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Windows', '2024-08-09', '17:21:27', 'Ingreso a Salas', '');
INSERT INTO `estadisticasip` (`id`, `username`, `ip`, `navegador`, `dispositivo`, `fecha`, `hora`, `accion`, `idSala`) VALUES
(236, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Windows', '2024-08-09', '17:22:03', 'Ingreso a sala 2', '11'),
(237, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'Windows', '2024-08-09', '17:22:13', 'Ingreso a Salas', ''),
(238, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-12', '23:31:37', 'Ingreso a Salas', ''),
(239, '10', '188.127.190.86', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'Windows', '2024-08-12', '23:31:41', 'Ingreso a sala 1', '17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticasnoticias`
--

CREATE TABLE `estadisticasnoticias` (
  `id` int NOT NULL,
  `id_anuncio` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `id_user` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `estadisticasnoticias`
--

INSERT INTO `estadisticasnoticias` (`id`, `id_anuncio`, `id_user`) VALUES
(1, '1', '1'),
(2, '8', '1'),
(3, '19', '1'),
(4, '16', '1'),
(5, '16', '1'),
(6, '17', '1'),
(7, '2', '1'),
(8, '2', '1'),
(9, '8', '1'),
(10, '10', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadousuarios`
--

CREATE TABLE `estadousuarios` (
  `id` int NOT NULL,
  `id_usuario` int NOT NULL,
  `username` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL,
  `state` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `estadousuarios`
--

INSERT INTO `estadousuarios` (`id`, `id_usuario`, `username`, `state`) VALUES
(1, 1, '1234', 'Habilitado'),
(2, 10, 'ALONSO JACOBO FONSECA', 'Habilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id` int NOT NULL,
  `idCategoria` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `idGenero` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `Genero` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `idCategoria`, `idGenero`, `Genero`) VALUES
(1, '1', '1.1', 'Actividad en grupo'),
(2, '1', '1.2', 'Activismo Social'),
(3, '1', '1.3', 'Amistad'),
(4, '1', '1.4', 'Club de fans'),
(5, '1', '1.5', 'ONG'),
(6, '1', '1.6', 'Partido Politico'),
(7, '2', '2.1', 'Figura Publica'),
(8, '2', '2.2', 'Medio de Comunicación'),
(9, '2', '2.3', 'TV'),
(10, '2', '2.4', 'Internet'),
(11, '3', '3.1', 'Restaurantes'),
(12, '3', '3.2', 'Cocineros'),
(13, '3', '3.3', 'Escuelas'),
(14, '3', '3.4', 'Internet'),
(15, '3', '3.5', 'Asociaciones'),
(16, '3', '3.6', 'Recetas'),
(17, '3', '3.7', 'D.O'),
(18, '4', '4.1', 'Personaje Publico'),
(19, '4', '4.2', 'Nacional'),
(20, '4', '4.3', 'Internacional'),
(21, '4', '4.4', 'Local'),
(22, '4', '4.5', 'Medios Digitales'),
(23, '4', '4.6', 'Redes Sociales'),
(24, '4', '4.7', 'Internet'),
(25, '4', '4.8', 'Publicidad'),
(26, '5', '5.1', 'Arte'),
(27, '5', '5.2', 'Fotografia'),
(28, '5', '5.3', 'Cine'),
(29, '5', '5.4', 'Teatro'),
(30, '5', '5.5', 'Musica'),
(31, '5', '5.6', 'Educación'),
(32, '5', '5.7', 'Literatura'),
(33, '5', '5.8', 'Historia'),
(34, '6', '6.1', 'Asociacionismo'),
(35, '6', '6.2', 'Deportista'),
(36, '6', '6.3', 'Club deporte'),
(37, '6', '6.4', 'Futbol'),
(38, '6', '6.5', 'Basket'),
(39, '6', '6.6', 'Ciclismo'),
(40, '6', '6.7', 'Otros deportes'),
(41, '7', '7.1', 'Espectaculos'),
(42, '7', '7.2', 'Musicales'),
(43, '7', '7.3', 'Humor'),
(44, '7', '7.4', 'Tv'),
(45, '7', '7.5', 'Club de fans'),
(46, '7', '7.6', 'Hobbies'),
(47, '7', '7.7', 'Recuerdos de'),
(48, '8', '8.1', 'Asociaciones'),
(49, '8', '8.2', 'Figura Publica'),
(50, '8', '8.3', 'Legal'),
(51, '8', '8.4', 'Igualdad'),
(52, '8', '8.5', 'Educación'),
(53, '9', '9.1', 'Empresa y Negocios'),
(54, '9', '9.2', 'Emprendimiento'),
(55, '9', '9.3', 'Figura Publica'),
(56, '9', '9.4', 'Tecnologia'),
(57, '9', '9.5', 'industria'),
(58, '9', '9.6', 'Moda'),
(59, '10', '10.1', 'Naturaleza'),
(60, '10', '10.2', 'Ecologia'),
(61, '10', '10.3', 'Cambio Climatico'),
(62, '10', '10.4', 'Climatologia'),
(63, '10', '10.5', 'Divulgación'),
(64, '11', '11.1', 'Mascotas'),
(65, '11', '11.2', 'Adopción'),
(66, '11', '11.3', 'Refugios/Protectoras'),
(67, '11', '11.4', 'Razas'),
(68, '11', '11.5', 'Legal'),
(69, '12', '12.1', 'Figura Publica'),
(70, '12', '12.2', 'Partido Politico'),
(71, '12', '12.3', 'Sindicalismo'),
(72, '12', '12.4', 'Monarquia'),
(73, '12', '12.5', 'Religion'),
(74, '12', '12.6', 'FFAA'),
(75, '13', '13.1', 'Legal'),
(76, '13', '13.2', 'Amistad /Relaciones'),
(77, '13', '13.3', 'Influencer'),
(78, '13', '13.4', 'Streamer'),
(79, '13', '13.5', 'Youtuber'),
(80, '13', '13.6', 'Tik Toker'),
(81, '13', '13.7', 'Instagramer'),
(82, '13', '13.8', 'Twittero'),
(83, '14', '14.1', 'Medicina'),
(84, '14', '14.2', 'Nutrición '),
(85, '14', '14.3', 'Belleza'),
(86, '14', '14.4', 'Yoga'),
(87, '14', '14.5', 'Meditacion'),
(88, '14', '14.6', 'Reiki'),
(89, '14', '14.7', 'Coaching'),
(90, '15', '15.1', 'Asociaciones'),
(91, '15', '15.2', 'Famosos'),
(92, '15', '15.3', 'Discapacidad'),
(93, '15', '15.4', 'Infancia'),
(94, '15', '15.5', 'Mayores'),
(95, '15', '15.6', 'Relaciones'),
(96, '15', '15.7', 'Legal'),
(97, '16', '16.1', 'Viajes'),
(98, '16', '16.2', 'Grupos viajeros'),
(99, '16', '16.3', 'Alojamiento'),
(100, '16', '16.4', 'Organismos'),
(101, '16', '16.5', 'Medios Transporte'),
(102, '16', '16.6', 'Lugares');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes1`
--

CREATE TABLE `mensajes1` (
  `id` int NOT NULL,
  `user_id` varchar(200) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `message` varchar(5000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `timestamp` varchar(500) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `mensajes1`
--

INSERT INTO `mensajes1` (`id`, `user_id`, `message`, `timestamp`) VALUES
(59, '10', 'LBKJHKJHVJHBLHB', ''),
(60, '10', 'xxxxxxxxxxxxxxxxxxxxxxxx', ''),
(61, '1', 'asdsad', ''),
(62, '1', 'asdasdas', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes2`
--

CREATE TABLE `mensajes2` (
  `id` int NOT NULL,
  `user_id` varchar(200) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `message` varchar(5000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `timestamp` varchar(500) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes3`
--

CREATE TABLE `mensajes3` (
  `id` int NOT NULL,
  `user_id` varchar(200) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `message` varchar(5000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `timestamp` varchar(500) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `mensajes3`
--

INSERT INTO `mensajes3` (`id`, `user_id`, `message`, `timestamp`) VALUES
(56, '10', 'GBDBDFBD', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes4`
--

CREATE TABLE `mensajes4` (
  `id` int NOT NULL,
  `user_id` varchar(200) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `message` varchar(5000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `timestamp` varchar(500) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `mensajes4`
--

INSERT INTO `mensajes4` (`id`, `user_id`, `message`, `timestamp`) VALUES
(60, '10', 'Tiene usted toda la razon...', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int NOT NULL,
  `tema` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `linkImagen` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `linkNoticia` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `tema`, `linkImagen`, `linkNoticia`) VALUES
(1, 'La presidencia de México', './assets/img/sliders/uno.jpg', './assets/img/sliders/uno.jpg'),
(2, 'Votaciones en España', './assets/img/sliders/uno.jpg', './assets/img/sliders/uno.jpg'),
(3, 'Diversidad de genero LGBT+', './assets/img/sliders/uno.jpg', './assets/img/sliders/uno.jpg'),
(4, 'La naturaleza y los ecosistemas de España', './assets/img/sliders/uno.jpg', './assets/img/sliders/uno.jpg'),
(5, 'La presidencia de México', './assets/img/sliders/uno.jpg', './assets/img/sliders/uno.jpg'),
(6, 'Votaciones en España', './assets/img/sliders/uno.jpg', './assets/img/sliders/uno.jpg'),
(7, 'Diversidad de genero LGBT+', './assets/img/sliders/uno.jpg', './assets/img/sliders/uno.jpg'),
(8, 'La naturaleza y los ecosistemas de España', './assets/img/sliders/uno.jpg', './assets/img/sliders/uno.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticiasgenerales`
--

CREATE TABLE `noticiasgenerales` (
  `id` int NOT NULL,
  `idRoom` varchar(500) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `tema` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `linkImagen` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `linkNoticia` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `fecha` varchar(5000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `estado` varchar(500) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `tipo` varchar(500) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `noticiasgenerales`
--

INSERT INTO `noticiasgenerales` (`id`, `idRoom`, `tema`, `linkImagen`, `linkNoticia`, `fecha`, `estado`, `tipo`) VALUES
(1, '1', 'La presidencia de México', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Octubre', '', ''),
(2, '2', 'Votaciones en España', './assets/img/sliders/dos.jpg', 'https://www.elmundo.es/espana.html', 'Marzo', '', 'Anuncio'),
(3, '3', 'Diversidad de genero LGBT+', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Abril', '', ''),
(4, '4', 'La naturaleza y los ecosistemas de España', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Mayo', '', ''),
(5, 'Todas', 'Noticia general de ayuda', './assets/img/sliders/dos.jpg', 'https://www.elmundo.es/espana.html', 'Febrero', '', 'Publicidad'),
(6, '1', 'La presidencia de México', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Febrero', '', ''),
(7, '1', 'La presidencia de México', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Febrero', '', ''),
(8, '1', 'La presidencia de México', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Febrero', '', ''),
(9, '1', 'La presidencia de México', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Febrero', '', ''),
(10, '1', 'La presidencia de México', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Febrero', '', ''),
(11, '1', 'La presidencia de México', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Febrero', '', ''),
(12, '1', 'La presidencia de México', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Febrero', '', ''),
(13, '2', 'Votaciones en España', './assets/img/sliders/dos.jpg', 'https://www.elmundo.es/espana.html', 'Marzo', '', ''),
(14, '2', 'Votaciones en España', './assets/img/sliders/dos.jpg', 'https://www.elmundo.es/espana.html', 'Marzo', '', ''),
(15, '2', 'Votaciones en España', './assets/img/sliders/dos.jpg', 'https://www.elmundo.es/espana.html', 'Marzo', '', ''),
(16, '2', 'Votaciones en España', './assets/img/sliders/dos.jpg', 'https://www.elmundo.es/espana.html', 'Marzo', '', ''),
(17, '2', 'Votaciones en España', './assets/img/sliders/dos.jpg', 'https://www.elmundo.es/espana.html', 'Marzo', '', ''),
(18, '2', 'Votaciones en España', './assets/img/sliders/dos.jpg', 'https://www.elmundo.es/espana.html', 'Marzo', '', ''),
(19, '2', 'Votaciones en España', './assets/img/sliders/dos.jpg', 'https://www.elmundo.es/espana.html', 'Marzo', '', ''),
(20, '3', 'Diversidad de genero LGBT+', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Abril', '', ''),
(21, '3', 'Diversidad de genero LGBT+', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Abril', '', ''),
(22, '3', 'Diversidad de genero LGBT+', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Abril', '', ''),
(23, '3', 'Diversidad de genero LGBT+', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Abril', '', ''),
(24, '3', 'Diversidad de genero LGBT+', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Abril', '', ''),
(25, '3', 'Diversidad de genero LGBT+', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Abril', '', ''),
(26, '3', 'Diversidad de genero LGBT+', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Abril', '', ''),
(27, '4', 'La naturaleza y los ecosistemas de España', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Mayo', '', ''),
(28, '4', 'La naturaleza y los ecosistemas de España', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Mayo', '', ''),
(29, '4', 'La naturaleza y los ecosistemas de España', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Mayo', '', ''),
(30, '4', 'La naturaleza y los ecosistemas de España', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Mayo', '', ''),
(31, '4', 'La naturaleza y los ecosistemas de España', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Mayo', '', ''),
(32, '4', 'La naturaleza y los ecosistemas de España', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Mayo', '', ''),
(33, '4', 'La naturaleza y los ecosistemas de España', './assets/img/sliders/uno.jpg', 'https://www.elmundo.es/espana.html', 'Mayo', '', ''),
(34, 'Todas', 'Noticia general de ayuda', './assets/img/sliders/dos.jpg', 'https://www.elmundo.es/espana.html', 'Febrero', '', 'Anuncio'),
(35, 'Todas', 'Noticia general de ayuda', './assets/img/sliders/dos.jpg', 'https://www.elmundo.es/espana.html', 'Febrero', '', 'Anuncio'),
(36, 'Todas', 'Noticia general de ayuda', './assets/img/sliders/dos.jpg', 'https://www.elmundo.es/espana.html', 'Febrero', '', 'Anuncio'),
(37, 'Todas', 'Noticia general de ayuda', './assets/img/sliders/dos.jpg', 'https://www.elmundo.es/espana.html', 'Febrero', '', 'Anuncio'),
(38, 'Todas', 'Noticia general de ayuda', './assets/img/sliders/dos.jpg', 'https://www.elmundo.es/espana.html', 'Febrero', '', 'Anuncio'),
(39, 'Todas', 'Noticia general de ayuda', './assets/img/sliders/dos.jpg', 'https://www.elmundo.es/espana.html', 'Febrero', '', 'Anuncio'),
(40, 'Todas', 'Noticia general de ayuda', './assets/img/sliders/dos.jpg', 'https://www.elmundo.es/espana.html', 'Febrero', 'Finzalizado', 'Anuncio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

CREATE TABLE `salas` (
  `id` int NOT NULL,
  `numero` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `tema` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `subtitulo` varchar(2000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `imagen` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `estado` varchar(50) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `categoria` varchar(500) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `genero` varchar(500) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `temaG` varchar(500) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`id`, `numero`, `tema`, `subtitulo`, `imagen`, `estado`, `categoria`, `genero`, `temaG`) VALUES
(1, '1', 'La presidencia de México', 'esta es una prueba de subtitulo dentro de las salas', './assets/img/sliders/uno.jpg', 'Archivado', '5', '2.2', '3.2.1'),
(2, '2', 'Votaciones en España', '', './assets/img/sliders/uno.jpg', 'Archivado', '6', '1.1', '1.1.1'),
(4, '4', 'La naturaleza y los ecosistemas de España', 'esto es una prueba de subtitulo dentro de la sala de debates', './assets/img/sliders/uno.jpg', 'Archivado', '6', '3.2', '3.2.3'),
(5, '4', 'Historico 1', '', './assets/img/sliders/uno.jpg', 'Archivado', '2', '', ''),
(6, '4', 'Historico 2', '', './assets/img/sliders/uno.jpg', 'Archivado', '3', '', ''),
(11, '2', 'Prueba', 'Datos', './assets/img/rooms/./../../../assets/img/rooms/Captura de pantalla 2023-09-19 013101.png', 'Vigente', '1', '', ''),
(12, '1', 'Prueba', 'esta es una prueba de carga de tema', './assets/img/rooms/./../../../assets/img/rooms/Captura de pantalla 2023-09-19 000922.png', 'Archivado', '1', '1.2', '1.2.1'),
(15, '1', '¿A quien le interesa la guerra en Ucrania?', '¿Es un negocio la Guerra?', './assets/img/rooms/./../../../assets/img/rooms/1280px-U.S._Navy_guided-missile_frigate_FFG(X)_artist_rendering,_30_April_2020_(200430-N-NO101-150).jfif', 'Vigente', '3', '', ''),
(16, '3', 'Colectivo LGTBI', '¿Se respetan los derechos del colectivo?', './assets/img/rooms/./../../../assets/img/rooms/23795748_10213664955633464_8964437157470966921_n.jpg', 'Vigente', '1', '', ''),
(17, '4', 'Elecciones en Venezuela', 'Fraude o Libertad?', './assets/img/rooms/./../../../assets/img/rooms/OIP (1).jpg', 'Vigente', '2', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE `temas` (
  `id` int NOT NULL,
  `idGenero` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `idTema` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `Tema` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`id`, `idGenero`, `idTema`, `Tema`) VALUES
(1, '1.1', '1.1.1', 'Runing'),
(2, '1.1', '1.1.2', 'Meditación'),
(3, '1.1', '1.1.3', 'yoga'),
(4, '1.1', '1.1.4', 'Reiki'),
(5, '1.1', '1.1.5', 'Naturaleza'),
(6, '1.1', '1.1.6', 'Viajes'),
(7, '1.1', '1.1.7', 'Cultura'),
(8, '1.1', '1.1.8', 'Senderismo'),
(9, '1.2', '1.2.1', 'Feminismo'),
(10, '1.2', '1.2.2', 'Ecologia'),
(11, '1.2', '1.2.3', 'Sindicalismo'),
(12, '1.2', '1.2.4', 'Vecinal'),
(13, '1.2', '1.2.5', 'Derechos Humanos'),
(14, '1.2', '1.2.6', 'Org. Consumidores'),
(15, '1.3', '1.3.1', 'Citas'),
(16, '1.3', '1.3.2', 'Quedadas'),
(17, '1.3', '1.3.3', 'Viajes'),
(18, '1.3', '1.3.4', 'Relaciones'),
(19, '1.3', '1.3.5', 'Naturaleza'),
(20, '1.4', '1.4.1', 'Cantante'),
(21, '1.4', '1.4.2', 'Influencer'),
(22, '1.4', '1.4.3', 'Actor'),
(23, '1.4', '1.4.4', 'Grupo Musical'),
(24, '1.5', '1.5.1', 'Derechos Humanos'),
(25, '1.5', '1.5.2', 'Anmistia Internacional'),
(26, '1.5', '1.5.3', 'Cruz Roja'),
(27, '1.5', '1.5.4', 'Human Rights'),
(28, '1.6', '1.6.1', 'Partido Socialista'),
(29, '1.6', '1.6.2', 'Partido Popular'),
(30, '1.6', '1.6.3', 'Vox'),
(31, '1.6', '1.6.4', 'Podemos'),
(32, '1.6', '1.6.5', 'Ciudadanos'),
(33, '1.6', '1.6.6', 'PNV'),
(34, '1.6', '1.6.7', 'PDcat'),
(35, '1.6', '1.6.8', 'Esquerra Catalana'),
(36, '1.6', '1.6.9', 'otros'),
(37, '2.1', '2.1.1', 'Politico'),
(38, '2.1', '2.1.2', 'Lider de opinion'),
(39, '2.1', '2.1.2', 'Coach'),
(40, '2.2', '2.2.1', 'Nacional'),
(41, '2.2', '2.2.2', 'Internacional'),
(42, '2.2', '2.2.3', 'Streaming'),
(43, '2.2', '2.2.4', 'Local'),
(44, '2.3', '2.3.1', 'Programa'),
(45, '2.3', '2.3.2', 'Presentador'),
(46, '2.4', '2.4.1', 'Empresas Tecnologicas'),
(47, '2.4', '2.4.2', 'RRSS'),
(48, '2.4', '2.4.3', 'Buscadores'),
(49, '2.4', '2.4.4', 'Plataformas'),
(50, '2.4', '2.4.5', 'Videojuegos'),
(51, '3.1', '3.1.1', 'Alta Cocina'),
(52, '3.1', '3.1.2', 'Asiatico'),
(53, '3.1', '3.1.3', 'Cocina Fusión'),
(54, '3.1', '3.1.4', 'Internacional'),
(55, '3.1', '3.1.5', 'Italiano'),
(56, '3.1', '3.1.6', 'Tapeo'),
(57, '3.1', '3.1.7', 'Tradicional'),
(58, '3.1', '3.1.8', 'Vegano'),
(59, '3.1', '3.1.9', 'Otros'),
(60, '3.2', '3.2.1', 'Figura Publica'),
(61, '3.2', '3.2.2', 'Estrella Michelin'),
(62, '3.2', '3.2.3', 'Club de fans'),
(63, '3.2', '3.2.4', 'Asociacion'),
(64, '3.3', '3.3.1', 'Master chef'),
(65, '3.3', '3.3.2', 'Recetas'),
(66, '3.3', '3.3.3', 'Otros'),
(67, '3.4', '3.4.1', 'Reservas de Restaurantes'),
(68, '3.4', '3.4.2', 'Valoraciones'),
(69, '3.4', '3.4.3', 'Grupos de cocina'),
(70, '3.4', '3.4.4', 'Recetarios'),
(71, '3.5', '3.5.1', 'Hermandad Gastronomica'),
(72, '3.5', '3.5.2', 'Productores de'),
(73, '3.5', '3.5.3', 'Consumidores de'),
(74, '3.5', '3.5.4', 'amigos de'),
(75, '3.5', '3.5.5', 'Profesionales'),
(76, '3.6', '3.6.1', 'Asociaciones'),
(77, '3.6', '3.6.2', 'Dietas'),
(78, '3.6', '3.6.3', 'Plataformas'),
(79, '3.6', '3.6.4', 'Canales'),
(80, '3.7', '3.7.1', 'Vinos'),
(81, '3.7', '3.7.2', 'Quesos'),
(82, '3.7', '3.7.3', 'Ibericos'),
(83, '3.7', '3.7.4', 'Agrarios'),
(84, '3.7', '3.7.5', 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `username` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `edad` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `sexo` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `email` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `contrasenia` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL,
  `estado` varchar(1000) CHARACTER SET utf32 COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `edad`, `sexo`, `email`, `contrasenia`, `estado`) VALUES
(1, '1234', '35-45', 'Masculino', 'ag.dev2@gmail.com', '1234', 'habilitado'),
(10, 'ALONSO JACOBO FONSECA', '45-55', 'Masculino', 'Ajacoboandriani@gmail.com', 'AJ2019amigos', 'habilitado'),
(11, 'Alonso PR', '18-25', 'Masculino', 'alonso@dinamica.es', '12341234', 'deshabilitado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `debatesantiguos`
--
ALTER TABLE `debatesantiguos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `encuestasestadisticas`
--
ALTER TABLE `encuestasestadisticas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadisticasanuncios`
--
ALTER TABLE `estadisticasanuncios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadisticasip`
--
ALTER TABLE `estadisticasip`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadisticasnoticias`
--
ALTER TABLE `estadisticasnoticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadousuarios`
--
ALTER TABLE `estadousuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes1`
--
ALTER TABLE `mensajes1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes2`
--
ALTER TABLE `mensajes2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes3`
--
ALTER TABLE `mensajes3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes4`
--
ALTER TABLE `mensajes4`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticiasgenerales`
--
ALTER TABLE `noticiasgenerales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `debatesantiguos`
--
ALTER TABLE `debatesantiguos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;

--
-- AUTO_INCREMENT de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `encuestasestadisticas`
--
ALTER TABLE `encuestasestadisticas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `estadisticasanuncios`
--
ALTER TABLE `estadisticasanuncios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `estadisticasip`
--
ALTER TABLE `estadisticasip`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT de la tabla `estadisticasnoticias`
--
ALTER TABLE `estadisticasnoticias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `estadousuarios`
--
ALTER TABLE `estadousuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT de la tabla `mensajes1`
--
ALTER TABLE `mensajes1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `mensajes2`
--
ALTER TABLE `mensajes2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mensajes3`
--
ALTER TABLE `mensajes3`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `mensajes4`
--
ALTER TABLE `mensajes4`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `noticiasgenerales`
--
ALTER TABLE `noticiasgenerales`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `salas`
--
ALTER TABLE `salas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
