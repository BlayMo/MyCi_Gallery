-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-08-2016 a las 05:39:42
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `myci_gallery`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id_image` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `descripcion` text,
  `foto` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id_image`, `nombre`, `descripcion`, `foto`) VALUES
(1, 'Jarron cristal con flores', '<p>\r\n	Stunfisk regirock piloswine caterpie stunky shelgon krabby rhydon jirachi arcanine accelgor crobat. Zubat slowpoke honchkrow hariyama walrein spiritomb pikachu gardevoir squirtle honchkrow nidoran wailmer!</p>\r\n', 'Foto-0001.jpg'),
(2, 'Huevo de Colon', '<p>\r\n	Stunfisk regirock piloswine caterpie stunky shelgon krabby rhydon jirachi arcanine accelgor crobat. Zubat slowpoke honchkrow hariyama walrein spiritomb pikachu gardevoir squirtle honchkrow nidoran wailmer!</p>\r\n', 'Foto-0002.jpg'),
(3, 'Jarron blanco con orquideas', '<p>\r\n	Stunfisk regirock piloswine caterpie stunky shelgon krabby rhydon jirachi arcanine accelgor crobat. Zubat slowpoke honchkrow hariyama walrein spiritomb pikachu gardevoir squirtle honchkrow nidoran wailmer!</p>\r\n', 'Foto-0003.jpg'),
(4, 'Floristeria Jardin', 'Stunfisk regirock piloswine caterpie stunky shelgon krabby rhydon jirachi arcanine accelgor crobat. Zubat slowpoke honchkrow hariyama walrein spiritomb pikachu gardevoir squirtle honchkrow nidoran wailmer!', 'Foto-0004.jpg'),
(5, 'Floristeria Jardin', 'Stunfisk regirock piloswine caterpie stunky shelgon krabby rhydon jirachi arcanine accelgor crobat. Zubat slowpoke honchkrow hariyama walrein spiritomb pikachu gardevoir squirtle honchkrow nidoran wailmer!', '4e5fd-foto-0005.jpg'),
(7, 'Floristeria Jardin', 'Stunfisk regirock piloswine caterpie stunky shelgon krabby rhydon jirachi arcanine accelgor crobat. Zubat slowpoke honchkrow hariyama walrein spiritomb pikachu gardevoir squirtle honchkrow nidoran wailmer!', '1c46d-foto-0007.jpg'),
(8, 'Floristeria Jardin', 'Stunfisk regirock piloswine caterpie stunky shelgon krabby rhydon jirachi arcanine accelgor crobat. Zubat slowpoke honchkrow hariyama walrein spiritomb pikachu gardevoir squirtle honchkrow nidoran wailmer!', 'add20-foto-0008.jpg'),
(9, 'Floristeria Jardin', 'Stunfisk regirock piloswine caterpie stunky shelgon krabby rhydon jirachi arcanine accelgor crobat. Zubat slowpoke honchkrow hariyama walrein spiritomb pikachu gardevoir squirtle honchkrow nidoran wailmer!', '0da35-foto-0009.jpg'),
(10, 'Floristeria Jardin', 'Stunfisk regirock piloswine caterpie stunky shelgon krabby rhydon jirachi arcanine accelgor crobat. Zubat slowpoke honchkrow hariyama walrein spiritomb pikachu gardevoir squirtle honchkrow nidoran wailmer!', '32a9d-foto-0010.jpg'),
(11, 'Floristeria Jardin', '<p>\r\n	Esto es una prueba del programa. Descripcion del articulo</p>\r\n', '889d7-foto-0011.jpg'),
(12, 'Floristeria Jardin', '\r\n\r\nTyphlosion, weedle darkrai machamp blissey loudred spinarak whismur whirlipede wormadam zangoose stunfisk vileplume ekans starly skiploom chinchou ducklett eelektross chingling.\r\n\r\nCrobat sandshrew houndour virizion dusknoir altaria heatran azelf golurk yanma gastly corphish haunter lunatone tentacool, miltank clefairy azelf roselia vullaby.\r\n\r\nMunchlax surskit ludicolo zigzagoon grumpig pineco vanillish combee scolipede deerling vanillish mankey cloyster ho zubat voltorb purugly carvanha weedle houndoom?\r\n\r\nSnivy togepi raikou sigilyph carvanha heatran dusknoir munchlax taillow tympole slowking bulbasaur cyndaquil ludicolo wailmer mime mantyke drilbur tympole geodude!\r\n\r\nDelibird conkeldurr bellossom golett exploud tangrowth bayleef stantler samurott staraptor vanilluxe absol corsola golett phanpy bidoof dialga spoink woobat volcarona.\r\n\r\n', '31c17-foto-0012.jpg'),
(13, 'Floristeria Jardin', '\r\n\r\nTyphlosion, weedle darkrai machamp blissey loudred spinarak whismur whirlipede wormadam zangoose stunfisk vileplume ekans starly skiploom chinchou ducklett eelektross chingling.\r\n\r\nCrobat sandshrew houndour virizion dusknoir altaria heatran azelf golurk yanma gastly corphish haunter lunatone tentacool, miltank clefairy azelf roselia vullaby.\r\n\r\nMunchlax surskit ludicolo zigzagoon grumpig pineco vanillish combee scolipede deerling vanillish mankey cloyster ho zubat voltorb purugly carvanha weedle houndoom?\r\n\r\nSnivy togepi raikou sigilyph carvanha heatran dusknoir munchlax taillow tympole slowking bulbasaur cyndaquil ludicolo wailmer mime mantyke drilbur tympole geodude!\r\n\r\n\r\n\r\n', '5f078-foto-0013.jpg'),
(14, 'Floristeria Jardin', '\r\n\r\nMunchlax surskit ludicolo zigzagoon grumpig pineco vanillish combee scolipede deerling vanillish mankey cloyster ho zubat voltorb purugly carvanha weedle houndoom?\r\n\r\nSnivy togepi raikou sigilyph carvanha heatran dusknoir munchlax taillow tympole slowking bulbasaur cyndaquil ludicolo wailmer mime mantyke drilbur tympole geodude!\r\n\r\nDelibird conkeldurr bellossom golett exploud tangrowth bayleef stantler samurott staraptor vanilluxe absol corsola golett phanpy bidoof dialga spoink woobat volcarona.\r\n\r\n', '10210-foto-0015.jpg'),
(15, 'Floristeria Jardin', '', 'e07ca-foto-0016.jpg'),
(16, 'Floristeria Jardin', '', '8d384-foto-0017.jpg'),
(17, 'Floristeria Jardin', '', '6ed51-foto-0019.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
