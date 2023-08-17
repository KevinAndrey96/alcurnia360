-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2023 at 11:47 PM
-- Server version: 10.5.18-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alcurnia_clientes`
--

-- --------------------------------------------------------

--
-- Table structure for table `Administradores`
--

CREATE TABLE `Administradores` (
  `IdAdministrador` int(11) NOT NULL,
  `Documento` varchar(15) NOT NULL,
  `Nombres` varchar(25) NOT NULL,
  `Apellidos` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contrasena` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Administradores`
--

INSERT INTO `Administradores` (`IdAdministrador`, `Documento`, `Nombres`, `Apellidos`, `Email`, `Contrasena`) VALUES
(1, '123456', 'Admin', 'Admin', 'legal@alcurnia360.com.co', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(45, 'Alcurnia2020@', 'Alcurnia2020@', 'Alcurnia2020@', 'Alcurnia2020@', 'b6c58f92c856431968429d1fd6c218122dfc4101');

-- --------------------------------------------------------

--
-- Table structure for table `Clientes`
--

CREATE TABLE `Clientes` (
  `IdCliente` int(11) NOT NULL,
  `Nombres` varchar(25) NOT NULL,
  `Apellidos` varchar(25) NOT NULL,
  `Telefono` varchar(20) DEFAULT '',
  `Email` varchar(50) NOT NULL,
  `Contrasena` varchar(60) NOT NULL DEFAULT 'NO CONFIGURADA',
  `Validado` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `Clientes`
--

INSERT INTO `Clientes` (`IdCliente`, `Nombres`, `Apellidos`, `Telefono`, `Email`, `Contrasena`, `Validado`) VALUES
(3472, 'GLORIA MARCELA', 'BARRETO RODRIGUEZ', '', 'julianrobayo8000@gmail.com', 'NO CONFIGURADA', 0),
(3473, 'ALDRUAN DE', 'JESUS LONDOÑO', '', 'aldruanlp20@gmail.com', 'NO CONFIGURADA', 0),
(3474, 'SANDRA MILENA', 'FAGUA ABELLA', '', 'SAMIFA_0424@HOTMAIL.COM', 'NO CONFIGURADA', 0),
(3475, 'NUBIA ESPINEL', 'MENDOZA ', '', 'nubiaem903@gmail.com', 'NO CONFIGURADA', 0),
(3476, 'JENNY PAOLA', 'NINO MOSO', '', 'KRJENNY09@GMAIL.COM', 'NO CONFIGURADA', 0),
(3477, 'ANGIE ALEJANDRA', 'VEGA VASQUEZ', '', 'aleja.vega.91@gmail.com', 'NO CONFIGURADA', 0),
(3478, 'LUZ BETTY', 'MARTINEZ DE', '', 'luzbetty@gmail.com', 'NO CONFIGURADA', 0),
(3479, 'LINA MARIA', 'HERNANDEZ GARAVITO', '', 'linamh14@outlook.com', 'NO CONFIGURADA', 0),
(3480, 'NATHALIA LORENA', 'GONZALEZ CUBIDES', '', 'nathagonzales7@hotmail.com', 'NO CONFIGURADA', 0),
(3481, 'FABIO RENEN', 'CORTES PINILLA', '', 'febreco@hotmail.com', 'NO CONFIGURADA', 0),
(3482, 'GLORIA PATRICIA', 'GARZON CASTRO', '', 'garzongloria patricia@hotmail.com', 'NO CONFIGURADA', 0),
(3483, 'MARIO ALBERTO', 'NIÑO CONTRERAS', '', 'yasmin199827@hotmail.com', 'NO CONFIGURADA', 0),
(3484, 'MARIA FERNANDA', 'LOPERA JIMENEZ', '', 'mafelj22@gmail.com', 'NO CONFIGURADA', 0),
(3485, 'ELIANA MERCEDES', 'PULIDO RODRIGUEZ', '', 'elispunk@hotmail.com', 'NO CONFIGURADA', 0),
(3486, 'VICTOR ALFONSO', 'CASAS RUIZ', '', 'vitrolo06@gmail.com', 'NO CONFIGURADA', 0),
(3487, 'LUZ MARINA', 'PEÑA SANCHEZ', '', 'negra468@hotmail.com', 'NO CONFIGURADA', 0),
(3488, 'ESPERANZA DE', 'MARIA ARIZA', '', 'caroarizaespe@gmail.com', 'NO CONFIGURADA', 0),
(3489, 'NANCY PEÑA', 'MAJE ', '', 'pnancymaje@hotmail.com', 'NO CONFIGURADA', 0),
(3490, 'LIZETH LORENA', 'RINCON LOPEZ', '', 'lore9009@hotmail.com', 'NO CONFIGURADA', 0),
(3491, 'OMAIRA ZUÑIGA', 'BENITEZ ', '', 'jdmaya1326@hotmail.com', 'NO CONFIGURADA', 0),
(3492, 'YULY PAOLA', 'MORALES VELEZ', '', 'yuli.morales2013@gmail.com', 'NO CONFIGURADA', 0),
(3493, 'JONATHAN RAMIREZ', ' ', '', 'JOL.RAMIREZ85@HOTMAIL.COM', 'NO CONFIGURADA', 0),
(3494, 'MARITZA VIVIANA', 'MURCIA MARTINEZ', '', 'vivianita bjfre@gmail.com', 'NO CONFIGURADA', 0),
(3495, 'INGRID NATALIA', 'CASTELLANOS LAMPREA', '', 'linathy_an@hotmail.com', 'NO CONFIGURADA', 0),
(3496, 'BERNARDO OSORIO', ' ', '', 'bosorio388@gmail.com', 'NO CONFIGURADA', 0),
(3497, 'ELCY DUARTE', ' ', '', 'elcyireh28@hotmail.com', 'NO CONFIGURADA', 0),
(3498, 'LORENA MARIA', 'PEREZ GALEANO', '', 'lperezgaleano@gmail.com', 'NO CONFIGURADA', 0),
(3499, 'JENNY CAROLINA', 'TORRES HERNANDEZ', '', 'jecatobe@gmail.com', 'NO CONFIGURADA', 0),
(3500, 'SANDRA CAROLAIN', 'PEREZ CALLEJAS', '', 'sandracarolainperez@gmail.com', 'NO CONFIGURADA', 0),
(3501, 'DENISSE GIANNYNA', 'GONZALEZ CIFUENTES', '', 'denisse.gonzalez1234@gmaiol.com', 'NO CONFIGURADA', 0),
(3502, 'KALET JAVIT', 'VILLAFAÑE LOPEZ', '', 'notiene@gmaiol.com', 'NO CONFIGURADA', 0),
(3503, 'ANA ROSALBA', 'DAZA MARTINEZ', '', 'anitatutun12@hotmail.com', 'NO CONFIGURADA', 0),
(3504, 'GERMAN EDUARDO', 'PIZA MANRIQUE', '', 'fannyalejandra@hotmail.com', 'NO CONFIGURADA', 0),
(3505, 'LUZ STELLA', 'BERDUGO REYES', '', 'luzbery20du@gmail.com', 'NO CONFIGURADA', 0),
(3506, '	JUAN PABLO', 'MORA GOMEZ', '', 'juan99012@gmail.com', 'NO CONFIGURADA', 0),
(3507, 'NIDIA ALEJANDRA', 'RUIZ MATEUS', '', 'kathe3687_@hotmail.com', 'NO CONFIGURADA', 0),
(3508, '	LIVI LUCERO', 'RINCON ', '', 'lucero25.rincon@gmail.com', 'NO CONFIGURADA', 0),
(3509, 'MARTA YANNETTE', 'FONSECA VALERO', '', 'mfonseca_31@gmail.com', 'NO CONFIGURADA', 0),
(3510, 'JOSE EDWIN', 'JIMENEZ MALDONADO', '', 'edj186@gmail.com', 'NO CONFIGURADA', 0),
(3511, 'YULI PAOLA', 'TRIANA JUNCO', '', 'fredy.castro2209@gmail.com', 'NO CONFIGURADA', 0),
(3512, 'JHON FREDY', 'HERNANDEZ PINZON', '', 'jhofer201352@gmail.com', 'NO CONFIGURADA', 0),
(3513, 'LEONARDO MORA', 'GOMEZ ', '', 'yanid.fuentes@gmail.com', 'NO CONFIGURADA', 0),
(3514, 'JEISSON DAVID', 'SIERRA NUÑEZ', '', 'jsasesores11@gmail.com', 'NO CONFIGURADA', 0),
(3515, 'JOSE VLADIMIR', 'GALVIS RANGEL', '', 'vladimirgalviz@gmail.com', 'NO CONFIGURADA', 0),
(3516, 'ANDERSON ALBEIRO', 'VILLAMIL CHAVEZ', '', 'andresca05@gmail.com', 'NO CONFIGURADA', 0),
(3517, 'CLARA INES', 'ALVAREZ ORTIZ', '', 'clarisa49@gmail.com', 'NO CONFIGURADA', 0),
(3518, 'ANDRIS BALEYDIS', 'GACHA MARTINEZ', '', 'psi.andrisgacha@gmail.com', 'NO CONFIGURADA', 0),
(3519, 'EDWARD ALEJANDRO', 'LOPEZ RIVIERA', '', 'alejandrolopez888@hotmail.com', 'NO CONFIGURADA', 0),
(3520, 'JULIO CESAR', 'QUEVEDO MORA', '', 'julioquevedo2020@gmail.com', 'NO CONFIGURADA', 0),
(3521, 'ELIZABETH CASTELLANOS', 'BERNAL ', '', 'elicasber@gmail.com', 'NO CONFIGURADA', 0),
(3522, 'DIANNA SOPHIA', 'GOMEZ ANTONIO', '', 'disogoa@hotmail.com', 'NO CONFIGURADA', 0),
(3523, 'MARIA ANDREA', 'VILLADA CADAVID', '', 'paulacadavid13@hotmail.com', 'NO CONFIGURADA', 0),
(3524, 'Ruben', 'Rojas', '3223481522', 'ruben@feelagencia.net', '1e17b4e7b714e451d49a075360e7819069cf7a76', 1),
(3525, 'MARTHA LUZMILA', 'RODRIGUEZ ', '', 'martharodriguez152013@hotmail.com', 'NO CONFIGURADA', 0),
(3526, 'DALLAN MARCELA', 'CARANTON SANCHEZ', '', 'marcelacaranton@gmail.com', 'NO CONFIGURADA', 0),
(3527, 'MARCELA ALEJANDRA', 'NAVAS RODRIGUEZ', '', 'marcealenavas@hotmail.com', 'NO CONFIGURADA', 0),
(3528, 'EDTIH ALEJANDRA', 'NOVOA VACCA', '', 'alejandranovoa15@gmail.com', 'NO CONFIGURADA', 0),
(3529, 'CLAUDIA MARCELA', 'BADILLO PULIDO', '', 'claudiamarcela234@hotmail.com', 'NO CONFIGURADA', 0),
(3530, 'JAIME ALDAHIR', 'PRECIADO MENDEZ', '', 'jaldahir@hotmail.com', 'NO CONFIGURADA', 0),
(3531, 'NOHRA STELLA', 'PEREZ PIRATOVA', '', 'nohrapp@hotmail.com', 'NO CONFIGURADA', 0),
(3532, 'OMAR MARTINEZ', 'GARCIA ', '', 'omar.mg180@gmail.com', 'NO CONFIGURADA', 0),
(3533, 'KELLY DAYAN', 'MEDINA OLAYA', '', 'k.medina 0694@gmail.com', 'NO CONFIGURADA', 0),
(3534, 'ANDREA VIVIANA', 'BUITRAGO GONZALEZ', '', 'andreab-0219@hotmail.com', 'NO CONFIGURADA', 0),
(3535, 'MARTHA VILMA', 'NAVARRETE RODRIGUEZ', '', 'marvilmarvi@hotmail.com', 'NO CONFIGURADA', 0),
(3536, 'DIANA MARCELA', 'ROMERO SANCHEZ', '', 'romediana@gmail.com', 'NO CONFIGURADA', 0),
(3537, 'ANA ISABEL', 'PINZON DE', '', 'germangomez63@gmail.com', 'NO CONFIGURADA', 0),
(3538, 'CRISTOBAL HERVEY', 'BARRERA MONTAÑA', '', 'chelsyblanco@icloud.com', 'NO CONFIGURADA', 0),
(3539, 'SANTIAGO JAIMES', 'CALDERON ', '', 'suspect_702@hotmail.com', 'NO CONFIGURADA', 0),
(3540, 'OMAR ALFONSO', 'MOLANO ', '', 'omarleonmolano@gmail.com', 'NO CONFIGURADA', 0),
(3541, 'YEIMI CAROLINA', 'ORTIZMATEUS', '', 'yeimiortiz09@hotmail.es', 'NO CONFIGURADA', 0),
(3542, 'ANGY LORENA', 'GUTIERREZ POLO', '', 'angylgutierrezpolo@gmail.com', 'NO CONFIGURADA', 0),
(3543, 'JUAN CARLOS', 'HERRERA PEREZ', '', 'juan.168@hotmail.com', 'NO CONFIGURADA', 0),
(3544, 'DIMAS DANIEL', 'BARRIOS BARRIOS', '', 'dimas080791@gmail.com', 'NO CONFIGURADA', 0),
(3545, '	DORYS RODRIGUEZ', 'DE DEFELIPE', '', 'rysro@yahoo.com', 'NO CONFIGURADA', 0),
(3546, 'RICARDO CONTRERAS', 'GELVEZ ', '', 'gelvez.cricardo@gmail.com', 'NO CONFIGURADA', 0),
(3547, 'CLAUDIA MARCELA', 'MOLINA MELO', '', 'claudimmpp@gmail.com', 'NO CONFIGURADA', 0),
(3548, 'ERICK SANTIAGO', 'GARZON QUINTERO', '', 'erickgson@hotmail.com', 'NO CONFIGURADA', 0),
(3549, 'NASLY MILENA', 'MORA CACAIS', '', 'milenamora01@hotmail.com', 'NO CONFIGURADA', 0),
(3550, 'ESTEBAN CASTRO', 'DELGADO ', '', 'estebanpublicista@gmail.com', 'NO CONFIGURADA', 0),
(3551, 'MARIA ALEJANDRA', 'OLARTE PIRAGAUTA', '', 'aleja_olarte15_02@hotmail.com', 'NO CONFIGURADA', 0),
(3552, 'CLAUDIA PATRICIA', 'PEREZ MADERA', '', 'claudiapatriciaperezmadera@gmail.com', 'NO CONFIGURADA', 0),
(3553, 'JUAN CARLOS', 'PINDQA TORRES', '', 'juancapinedat@gmaill.com', 'NO CONFIGURADA', 0),
(3554, 'ANGIE CAROLINA', 'CUASTUZA ROSERO', '', 'angie.karo.528@gmail.com', 'NO CONFIGURADA', 0),
(3555, 'JANETH FAJARDO', 'ARIAS ', '', 'wuas20@hotmail.com', 'NO CONFIGURADA', 0),
(3556, 'EDILSON ORLANDO', 'MADERO HURTADO', '', 'eomadero@hotmail.com', 'NO CONFIGURADA', 0),
(3557, 'DANIEL SEBASTIAN', 'VELOZA PENAGOS', '', 'doemo16@hotmaiol.com', 'NO CONFIGURADA', 0),
(3558, 'CAMILO ANDRES', 'HERNANDEZ RAMOS', '', 'camilo.chavarro99@gmail.com', 'NO CONFIGURADA', 0),
(3559, 'HANNA KAROLINA', 'TIRANO ZAPATA', '', 'hannatiranoz@gmail.com', 'NO CONFIGURADA', 0),
(3560, 'LINA MARCELA', 'CASTRO LOPEZ', '', 'lina.castrolopez@yahoo.com', 'NO CONFIGURADA', 0),
(3561, 'JOSE DE', 'LA CRUZ', '', 'marisolbz1@hotmail.com', 'NO CONFIGURADA', 0),
(3562, 'CRISTIAN SEBASTIAN', 'CRISTANCHO MARROQUIN', '', 's.tiro@hotmail.com', 'NO CONFIGURADA', 0),
(3563, 'IVAN FERNANDO', 'REYES AVILA', '', 'jferchis84@gmail.com', 'NO CONFIGURADA', 0),
(3564, 'DANIEL ESTEBAN', 'AREVALOCHAPARRO', '', 'daniel.arevalo@cancilleria.gov.co', 'NO CONFIGURADA', 0),
(3565, 'LADY JANETH', 'NUÑEZ CALDERON', '', 'ladynuñezca@gmail.com', 'NO CONFIGURADA', 0),
(3566, 'VICTOR FERNANDO', 'ZUÑIGA ENRIQUEZ', '', 'victorz90@hotmail.com', 'NO CONFIGURADA', 0),
(3567, 'RAFAEL ANGEL', 'TORRES CAVIEDES', '', 'angelica.tcaviedes@gmail.com', 'NO CONFIGURADA', 0),
(3568, 'SANDRA MILENA', 'CASTILLO MERCHAN', '', 'milenacastillo451@hotmail.com', 'NO CONFIGURADA', 0),
(3569, 'OSCAR ERNESTO', 'CHAVES CHAVES', '', 'oscar.chaves@javeriana.edu.co', 'NO CONFIGURADA', 0),
(3570, 'DIYER HARVEY', 'PEREZ MANCERA', '', 'diyer.perez@correopolicia.gov.co', 'NO CONFIGURADA', 0),
(3571, 'LEIDY NAYIBE', 'AVENDAÑOROJAS', '', 'de.gonzalez@uniandes.edu.co', 'NO CONFIGURADA', 0),
(3572, 'CARLOS ALBERTO', 'MORALES GONZALEZ', '', 'carlosmoralesvtm@gmail.com', 'NO CONFIGURADA', 0),
(3573, 'AURA MARIA', 'MIRANDA MARTINEZ', '', 'mirandaaa.blondie@gmail.com', 'NO CONFIGURADA', 0),
(3574, 'EMILIANO LEON', ' ', '', 'emilianoleon354@gmail.com', 'NO CONFIGURADA', 0),
(3575, 'LAURA TULIA', 'ARIZA VELASCO', '', 'laura.ariza.velasco@gmail.com', 'NO CONFIGURADA', 0),
(3576, 'WILMAR HUMBERTO', 'QUEVEDO GARCIA', '', 'wilmarqq1976@hotmail.com', 'NO CONFIGURADA', 0),
(3577, 'MIREILLE ARDILA', ' ', '', 'miardila15@hotmail.com', 'NO CONFIGURADA', 0),
(3578, 'PAOLA ANDREA', 'LARA RODRIGUEZ', '', 'davidmunoz2415@hotmail.com', 'NO CONFIGURADA', 0),
(3579, 'SARA FERNANDA', 'RAMIREZ ', '', 'sarytafda0624@hotmail.com', 'NO CONFIGURADA', 0),
(3580, 'KAREN ESTEPHANIA', 'PRIETO CONTRERAS', '', 'karenprietocontreras@gmail.com', 'NO CONFIGURADA', 0),
(3581, 'WILLIAN HUMBERTO', 'MARTINEZ ROZO', '', 'williamrozo@hotmailo.com', 'NO CONFIGURADA', 0),
(3582, 'ANA CECILIA', 'SUAREZ GUTIERREZ', '', 'anacs.3@hotmail.com', 'NO CONFIGURADA', 0),
(3583, 'FERNANDO RUEDA', 'PEREZ ', '', 'ferupe2011@gmail.com', 'NO CONFIGURADA', 0),
(3584, 'SANDRA LORENA', 'GONZALEZ ALBA', '', 'slgonzalez_1979@yahoo.com', 'NO CONFIGURADA', 0),
(3585, 'PEDRO NICOLAS', 'MENDEZ HERNANDEZ', '', 'mendezpedro620@gmail.com', 'NO CONFIGURADA', 0),
(3586, 'CLAUDIA MARCELA', 'TOVAR RODRIGUEZ', '', 'machela9022@hotmail.com', 'NO CONFIGURADA', 0),
(3587, 'ANDRES RICARDO', 'ROBAYO MORENO', '', 'robayo.andres22@gmail.com', 'NO CONFIGURADA', 0),
(3588, 'RUBEN DARIO', 'MOLINA SANCHEZ', '', 'rubenmolina15@outlook.com', 'NO CONFIGURADA', 0),
(3589, 'JAIRO MANUEL', 'BLANQUICETH SILVA', '', 'jairomanuelblaquicth@gmail.com', 'NO CONFIGURADA', 0),
(3590, 'MONICA CAROLINA', 'MARTINEZ CASTAÑEDA', '', 'carolinamartinezc4@gmail.com', 'NO CONFIGURADA', 0),
(3591, 'MARIA ISABEL', 'FRANCO RODRIGUEZ', '', 'francoisabelmaria@hotmail.com', 'NO CONFIGURADA', 0),
(3592, 'WIDALLYS VILLARREAL', 'LASSO ', '', 'widallys-v-@hotmail.com', 'NO CONFIGURADA', 0),
(3593, 'JUAN CAMILO', 'JIMENEZ CASTELLANOS', '', 'angiehrs11@gmail.com', 'NO CONFIGURADA', 0),
(3594, 'DORA CECILIA', 'RINCON CETINA', '', 'doritayoyo@gmail.com', 'NO CONFIGURADA', 0),
(3595, 'XIMENA QUINTERO', 'BALAGUERA ', '', 'ximenaquinteribalaguera@gmail.com', 'NO CONFIGURADA', 0),
(3596, 'MARCOS JULIAN', 'GUTIERREZ ACEVEDO', '', 'marcosjgutierrez@gmail.com', 'NO CONFIGURADA', 0),
(3597, 'JONATHAN MAURICIO', 'GLAVIS AGUILAR', '', 'estefi1095@hotmail.com', 'NO CONFIGURADA', 0),
(3598, 'LEIDY YESENIA', 'MARTINEZ PINEDA', '', 'yesis154@hotmailo.com', 'NO CONFIGURADA', 0),
(3599, 'LEONARDO FABIO', 'AGUDELO ROMERO', '', 'maria.arango.z@hotmail.com', 'NO CONFIGURADA', 0),
(3600, 'JOHN EDWARD', 'PINEDA PALACIOS', '', 'johnbaed@gmail.com', 'NO CONFIGURADA', 0),
(3601, 'MARIA YO9LANDA', 'PORRAS PORRAS', '', 'yoliporras@hotmail.com', 'NO CONFIGURADA', 0),
(3602, 'JOSE DAVID', 'HUMANEZ YANEZ', '', 'jdhumanez-0992@hotmail.com', 'NO CONFIGURADA', 0),
(3603, 'MARTHA ISABEL', 'GALINDO MORENO', '', 'mariaisabelgalindo@hotmail.es', 'NO CONFIGURADA', 0),
(3604, 'MILTON ENRIQUE', 'CARRERA GARCIA', '', 'milton38cindy@gmail.com', 'NO CONFIGURADA', 0),
(3605, 'Francisco', 'Leon', '', 'leonfrancisco183@gmail.com', 'NO CONFIGURADA', 0),
(3606, 'Kevin', 'Herrera', '3185563342', 'kaherreras@unal.edu.co', 'ad4f6fa5fff6e45384d9ba9b847c2925d337b291', 0),
(3607, 'Andrey', 'Herrera', '3156654448', 'kahs_kevin@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(3608, 'OSCAR', 'MERCHAN', '312569569', 'oscarmerchan7@hotmail.com', 'f4c7e2870043beb26137c4d99b05bca86d56ae34', 0),
(3609, 'LEIDY YOHANA', 'GOYES CAIPE', '3102313666', 'ydielabril@hotmail.com', '6990fcbb5ee9efdec8322c52769649f1009b3674', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Paquetes`
--

CREATE TABLE `Paquetes` (
  `IdPaquete` int(11) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Descripcion` text NOT NULL,
  `Precio` varchar(20) NOT NULL,
  `Moneda` varchar(3) NOT NULL,
  `Fechas` varchar(100) NOT NULL,
  `Vigencia` varchar(100) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Traslados` tinyint(1) NOT NULL,
  `Guia` tinyint(1) NOT NULL,
  `Desayuno` tinyint(1) NOT NULL,
  `SitiosTuristicos` tinyint(1) NOT NULL,
  `Hotel` tinyint(1) NOT NULL,
  `Alojamiento` tinyint(1) NOT NULL,
  `Impuestos` tinyint(1) NOT NULL,
  `Equipaje` tinyint(1) NOT NULL,
  `Shopping` tinyint(1) NOT NULL,
  `Asistencia` tinyint(1) NOT NULL,
  `Alimentacion` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Paquetes`
--

INSERT INTO `Paquetes` (`IdPaquete`, `Nombre`, `Descripcion`, `Precio`, `Moneda`, `Fechas`, `Vigencia`, `Tipo`, `Traslados`, `Guia`, `Desayuno`, `SitiosTuristicos`, `Hotel`, `Alojamiento`, `Impuestos`, `Equipaje`, `Shopping`, `Asistencia`, `Alimentacion`) VALUES
(12, 'ORLANDO SUPER PROMOCION', '*Traslados Aeropuerto - Hotel – *Aeropuerto en Orlando en horario diurno\r\n*07 (Siete) noches en habitación estandar en el hotel elegido\r\n*Desayuno Continental (Café y Pan) diario de cortesia en el hotel\r\n*06 (Seis) días de admisiones con traslados hotel – parque – hotel para visitar un parque por dia a: Universal Studios - Islas De La Aventura – Volcano Bay Water Park - Busch Gardens – Sea World – Aquatica wáter park\r\n*Tour de compras \r\n*Coordinadores de habla hispana\r\n*Impuestos hoteleros', '880', 'USD', 'Consulta Salidas con tu Asesor de Viajes Alcurnia 360.', 'Hasta el 15 de Diciembre de 2020', 'Internacional', 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0),
(9, 'CIRCUITO LO DEMJOR DEL NORTE', 'Incluye:\r\nWashington D.C - Niágara Falls\r\n\r\n*Hoteles entre Turista Superior y/ó Primera Superior\r\n*Desayuno americano diario en los hoteles\r\n*Propinas a maleteros en los hoteles a razón de una maleta por persona, *Las demás tendrán un cargo extra por cuenta de los pasajeros.\r\n*Autobuses de Lujo con aire acondicionado, vidrios panorámicos y video; en algunas fechas por efectos del clima y el número de pasajeros el programa se podrá realizar en minibús con todas las comodidades.\r\n*Guías profesionales de habla hispana\r\n*Visitas mencionadas en las diferentes ciudades.\r\n*Crucero en Las Cataratas del Niágara, de acuerdo a la temporada.', '600', 'USD', 'Consulta Fechas de salida con tu asesor de viajes Mundo Hoteles', 'Hasta el 20 de Diciembre.', 'Internacional', 1, 1, 1, 0, 1, 0, 1, 0, 0, 0, 0),
(10, 'OESTE LEGENDARIO', '*Hoteles entre Turista Superior y/o Primera Superior\r\n*Desayuno americano diario en los hoteles.\r\n*Propinas a maleteros en los hoteles a razón de una maleta por persona, las demás tendrán un cargo extra por cuenta de los pasajeros.\r\n*Autobuses de Lujo con aire acondicionado, vidrios panorámicos y video; en algunas fechas por efectos del clima y el número de pasajeros el programa se podrá realizar en minibús con todas las comodidades.\r\n*Guías profesionales de habla hispana\r\n*Visitas mencionadas en las diferentes ciudades.\r\n*Un Almuerzo en el Gran Cañon sin bebidas\r\n ', '1840', 'USD', 'Consulta Fechas de salida con tu asesor de viajes Mundo Hoteles', 'Hasta el 25 de Diciembre.', 'Internacional', 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0),
(11, 'AVENTURA EN ORLANDO', '*Traslados aeropuerto – hotel – aeropuerto en Orlando en horario diurno.\r\n*06 (Seis) Noches en Orlando en habitación estándar en el hotel elegido\r\n*Desayuno continental (Cafe y pan) diario de cortesía en el hotel\r\n*05 (Cinco) Días de traslados regulares para visitar un parque por día.\r\n*Admisiones de un día cada una para visitar los siguientes parques; Magic Kingdom - Animal Kingdom - Universal Studios - Vulcano Water Park - Islas de la Aventura\r\n*Coordinadores de habla hispana\r\n*Impuestos hoteleros', '998', 'USD', 'Consulta Fechas de salida con tu asesor de viajes Mundo Hoteles', 'Hasta el 15 de Diciembre de 2020', 'Internacional', 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0),
(13, 'CANADA CLASICO', '*Traslados aeropuerto - hotel - aeropuerto en horario diurno\r\n*Alojamiento en estándar en hoteles Turista Superior y/ó Primera.\r\n*Desayuno americano diario en los hoteles\r\n*Propinas a maleteros en los hoteles a razón de una maleta por persona, las demás tendrán un cargo extra por cuenta de los pasajeros.\r\n*Autobuses de Lujo con aire acondicionado, vidrios panorámicos y video; en algunas fechas por efectos del clima y el número de pasajeros el programa se podrá realizar en minibús ó van con todas las comodidades.\r\n*Guías profesionales de habla hispana ó portuguesa.* Visitas mencionadas en las diferentes ciudades.\r\n* Admisión al Barco Hornblower, * opera de Mayo a Octubre. Fuera de temporada será sustituido por los túneles escénicos.\r\n* Manejo de 1 maleta por pasajero durante el recorrido, maletas adicionales serán cobradas', '1368', 'USD', 'Consulta Fechas de salida con tu asesor de viajes Alcurnia 360.', 'Hasta el 13 de Abril.', 'Internacional', 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0),
(14, 'HONOLULU PARAISO TERRENAL', '* Traslados aeropuerto – hotel – aeropuerto en horarios diurnos\r\n* Recibimiento con collar de flores\r\n* 04 (Cuatro) Noches de alojamiento \r\n* Visita de la ciudad de Honolulu\r\n* Impuestos hoteleros ', '728', 'USD', 'Consulta Fechas de salida con tu asesor de viajes Alcurnia 360.', 'Hasta el 24 de noviembre de 2020', 'Internacional', 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0),
(15, 'CANCUN PARAISO DEL CARIBE', '* Traslados aeropuerto internacional de Cancun, hotel - aeropuerto en horarios diurnos\r\n* 3 noches de alojamiento en habitación estándar\r\n* Régimen de alimentación Todo incluido en el hotel.\r\n* Excursión de día competo a Chichen Itza con Almuerzo\r\nImpuestos hoteleros', '448', 'USD', 'Consulta Fechas de salida con tu asesor de viajes Alcurnia 360.', 'Hasta el 15 de Diciembre de 2020', 'Internacional', 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0),
(16, 'MEXICO TRADICIONAL', '*Traslado Aeropuerto – Hotel – Aeropuerto en horario diurno. \r\n*3 Noches de alojamiento en hotel de la categoría seleccionada.\r\n*Desayuno diario en el hotel.\r\n*Visita de la ciudad medio día en servicio regular        \r\n*Visita a la Basílica y Pirámides del Sol y la Luna\r\n*Guía de habla hispana\r\n*Impuestos hoteleros.', '198', 'USD', 'Consulta Salidas con tu Asesor de Viajes Alcurnia 360.', 'Hasta el 20 de Diciembre.', 'Internacional', 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0),
(17, 'MEXICO LINDO Y QUERIDO.', '* Traslados aeropuerto - hotel - aeropuerto en horarios diurnos\r\n* 6 Noches de alojamiento en habitación estándar\r\n* Desayuno diario en el hotel.\r\n* Visita de la Ciudad, Visita a la * Basílica de Guadalupe con * Pirámides del Sol y la Luna, * Visita a Puebla con Tonantizintla,  * Visita a Taxco y * Visita a Xochimilco con Ciudad Universitaria, en servicio regular\r\n* Entradas a las Pirámides de Teotihuacán, Trajinera Xochimilco.\r\n* Guía de habla hispana.\r\n* Impuestos hoteleros.\r\n* Las visitas mencionadas en el programa, con horarios establecidos.', '428', 'USD', 'Consulta Fechas de salida con tu asesor de viajes Alcurnia 360.', 'Hasta el 15 de Diciembre.', 'Internacional', 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0),
(18, 'PERU BASICO', '* Traslados Aeropuerto - Hotel - Aeropuerto.\r\n* Desayuno diario en los hoteles.\r\n* Visita de  la ciudad de LIMA colonial\r\n* Tiquete en Categoría Expedition a Machu Picchu.\r\n* Guías profesionales.\r\n* Visitas mencionadas en las diferentes ciudades', '558', 'COP', 'Consulta Fechas de salida con tu asesor de viajes Alcurnia 360.', 'Hasta el 15 de Diciembre de 2020', 'Internacional', 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0),
(19, 'PERU ENIGMATICO', '* Traslados Aeropuerto - Hotel - Aeropuerto.\r\n* Desayuno diario en los hoteles.\r\n* Visita de la ciudad de LIMA colonial\r\n* Bus de lujo en servicio regular hasta Nazca.\r\n* Tiquete en avioneta para sobrevuelo de las Lineas de Nazca.\r\n* Visita de la ciudad de CUSCO, con ruinas aledañas incluidas\r\n* Tiquete en Categoría Expedition a Machu Picchu.\r\n* Almuerzo en Machu Picchu sin bebidas.\r\n* Guías profesionales.', '1098', 'USD', 'Consulta Fechas de salida con tu asesor de viajes Alcurnia 360.', 'Hasta el 15 de Diciembre de 2020', 'Internacional', 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0),
(20, 'TRIANGULO PERUANO', '* Traslados Aeropuerto - Hotel - Aeropuerto.\r\n* Desayuno diario en los hoteles.\r\n* Visita de la ciudad de LIMA colonial\r\n* Visita de la ciudad de CUSCO con Entradas a las ruinas en Cusco.\r\n* Visita al Valle Sagrado Ollantaytambo y Mercado Pisac\r\n* Tiquete en Categoría Expedition a Machu Picchu.\r\n* Almuerzo en Machu Picchu sin bebidas.\r\n* Tiquete Cusco - Puno.\r\n* Almuerzo en Sicuani sin bebidas.Visita a las Islas Uros y Taquiles\r\n* Almuerzo en la Isla de Taquile.\r\n* Guías profesionales', '1118', 'USD', 'Consulta Fechas de salida con tu asesor de viajes Alcurnia 360.', 'Hasta el 15 de Diciembre de 2020', 'Internacional', 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0),
(21, 'SAO PAULO', '* Traslados aeropuerto - hotel - aeropuerto en horarios diurnos\r\n*02 Noches de alojamiento en habitación estándar en Sao Pulo\r\n*Desayuno diario en los hoteles\r\n*Visitas descritas en el itinerario\r\n*Impuestos hoteleros', '268', 'USD', 'Consulta Fechas de salida con tu asesor de viajes Alcurnia 360.', 'Hasta el 15 de Diciembre.', 'Internacional', 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Administradores`
--
ALTER TABLE `Administradores`
  ADD PRIMARY KEY (`IdAdministrador`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Documento` (`Documento`);

--
-- Indexes for table `Clientes`
--
ALTER TABLE `Clientes`
  ADD PRIMARY KEY (`IdCliente`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `Paquetes`
--
ALTER TABLE `Paquetes`
  ADD PRIMARY KEY (`IdPaquete`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Administradores`
--
ALTER TABLE `Administradores`
  MODIFY `IdAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `Clientes`
--
ALTER TABLE `Clientes`
  MODIFY `IdCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3610;

--
-- AUTO_INCREMENT for table `Paquetes`
--
ALTER TABLE `Paquetes`
  MODIFY `IdPaquete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
