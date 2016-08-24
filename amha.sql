-- phpMyAdmin SQL Dump
-- version 4.0.10.15
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 24, 2016 at 02:56 AM
-- Server version: 5.6.26-log
-- PHP Version: 5.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `r0000188_renovat`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE IF NOT EXISTS `contact_messages` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `doctor_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `national_medical_enrollment` varchar(100) NOT NULL,
  `provincial_medical_enrollment` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sex` char(1) NOT NULL DEFAULT 'M',
  PRIMARY KEY (`doctor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `first_name`, `last_name`, `national_medical_enrollment`, `provincial_medical_enrollment`, `email`, `website`, `description`, `sex`) VALUES
(1, 'Natalia', 'Acosta', '140.767', '', '', '', '<br>Ayudante de Cátedra en la AMHA\r\n<br>Av. Cabildo 2327 1ºD, Barrio Norte, CABA\r\n<br>Horarios de atención: Miercoles de 17 a 20 hs.\r\n<br>Pedir turnos al: 4786-3366', 'F'),
(2, 'Patricia', 'Atenor', '73.564', '', '', '', 'Ayudante de Cátedra en la AMHA\n<br>Oftalmología\n<br>Av. Callao 671, 5to piso departamento A, Once, Buenos Aires\n<br>Pedir turnos al: 4372-8703', 'F'),
(3, 'Andrea Mara', 'Calvi', '74.482', '', '', '', 'Ayudante de Cátedra en AMHA\r\n<br>Medicina Laboral\r\n<br>Av. Francisco Beiró 4355, Villa Devoto, CABA\r\n<br>Pedir turnos al 4501-8597\r\n<br>Martes y Jueves de 17 a 19hs.', 'F'),
(4, 'Adolfo', 'Campanelli', '44.415', '', '', '', 'Profesor adjunto en la AMHA\r\n<br>Vidt 1923 3º A, Capital Federal\r\n<br>Pedir turnos al 4826-5652\r\n<br>Horarios: Un Martes de 14 a 19 hs. Otro de 11 a 19 hs.\r\n<br>Rafaela 4650, Villa Luro, Capital Federal\r\n<br>Pedir Turnos al  15-4449-8668\r\n<br>Horarios: Miércoles de 14 a 20 hs.', 'M'),
(5, 'Ines', 'Capella', '66.446', '', '', '', '<br>Médica Clínica Oftalmología \r\n<br>Cabildo 2327 1°D. Belgrano, CABA\r\n<br>Pedir turno al 4785-4993\r\n<br>Horarios: Jue de 17 a 20 hs y Vie de 15 a 20 hs', 'F'),
(6, 'Mariana', 'Chapochnikoff', '92.172', '', 'mchapo@intramed.net', 'www.guiahomeopatica.com.ar', 'Vuelta de Obligado 1441 6º C, Belgrano\r\n<br>Pedir turnos al 4553-0591\r\n<br>Urgencias: 11-6478-0285', 'F'),
(7, 'Maria Delia', 'Ciola', '84.038', '', 'saludinteractiva@yahoo.com.ar', 'www.draciolamaria.com.ar', 'Clínica y Reumatología\r\n<br>Charcas 2912 8ºA. Recoleta, Buenos Aires\r\n<br>Pedir turnos al 4827-4657\r\n<br>Horarios: Lunes y Jueves de 14 a 20 hs o Mie y Vie de 10 a 16 hs.\r\n<br>Celular: 15-56390784', 'F'),
(8, 'Roberto Luis', 'Diaz Campos', '74.562', '37.490', 'drdiazcampos@fibertel.com.ar', '', 'Profesor Adjunto del A.M.H.A.\r\n<br>Avellaneda 607 - Caballito.\r\n<br>Horarios: lunes de 15 a 20 hs.\r\n<br>Teléfono: 5901-5420\r\n<br>\r\n<br>Charcas 2744, 2º Piso, Depto 6, Barrio Norte\r\n<br>Horarios: viernes de 9 a 17 hs.', 'M'),
(9, 'Mario', 'Draiman', '30.308', '', '', '', 'Gallo 1576. Piso 7º Depto B - Palermo\r\n<br>Teléfono: 4826-5922', 'M'),
(10, 'Carlos Daniel', 'Ducasse', '65.218', '', 'doctorducasse@yahoo.com.ar', 'www.institutodemedicinaalternativa.com', 'Clínica Médica-Obesidad\r\n<br>Juramento 4468 P.B. Villa Urquiza, CABA.\r\n<br>4521-9994 y 4523-1094\r\n<br>Martes y Jueves de 15:30 a 21hs', 'M'),
(11, 'Ruth Patricia Silvina', 'Faingold', '74.365', '', 'ruthfaingold@hotmail.com', '', 'Subdirectora de la escuela de posgrado. <br>Profesora Adjunta de la Cátedra de Pediatría y Familia\r\n<br>Pediatría\r\n<br>Consultorio 1:\r\n<br>Roseti 2095 - Villa Ortuzar CABA\r\n<br>Turnos: 4555-3987 (dejar mensaje con datos claros para que se le devuelva la llamada) \r\n<br>Días y Horarios: Martes 7hs a 19hs Jueves 7hs a 19hs\r\n\r\n<br>Consultorio 2:\r\n<br>Charcas 2744 2do 6 - Barrio Norte CABA\r\n<br>Turnos: 4962-6812 \r\n<br>Días y Horarios: Lunes de 13hs a 20hs\r\nMiercoles de 9hs a 17hs', 'F'),
(12, 'Ana Maria', 'Ferrero', '55.970', '', '', '', 'Pediatría\r\n<br>Sánchez de Bustamante 2027 PB, Depto “A” - Palermo\r\n<br>4825-7598', 'F'),
(13, 'Ines', 'Fontau', '17.421', '', '', '', 'Av. Angel Gallardo 391 8º A - Parque Centenario\r\n<br>Teléfono: 4854-0775', 'F'),
(14, 'Adriana', 'Gaite', '71.953', '', 'adriana.gaite@gmail.com', 'www.adrianagaite.com.ar', 'Ayudante de Cátedra en la AMHA\r\n<br>Soler 4417, Palermo Soho\r\n<br>Pedir turno al 15-5045-1511', 'F'),
(15, 'Herman Fransisco', 'Goldstein', '32.731', '', '', 'www.psicomeopatia.com.ar', 'Profesor Adjunto de la AMHA\r\n<br>Psiquiatría (UBA), Psicoanálisis (APA), Homeopatía Unicista (AMHA) Sexología Clínica (SASH) \r\n<br>Dr. Emilio Ravignani 2049 5° Piso A\r\n<br>Teléfono: 4776-7382 y 15-5699-9208', 'M'),
(16, 'Mirta', 'Goldstein', '59.440', '', '', '', 'HOMEÓPATA-PSICOANÁLISIS\r\n<br>Cabello 3636 7°C, Palermo. Teléfono: 4805-6856\r\n<br>Atención: Lunes a Viernes de 10 a 20 hs.', 'F'),
(17, 'Nilda', 'Grzesko', '77.999', '', '', '', 'Profesora adjunta en la AMHA\r\n<br>Clínica médica - Dermatología\r\n<br>Vidt 1923 3°A. Palermo, CABA\r\n<br>Pedir turno al 4826-5652', 'F'),
(18, 'Roberto Claudio', 'Lasia', '107.680', '56.116', 'familialasia@gmail.com', '', 'Callao 1134 3er Piso \r\n<br>4812-2092 o 4750-0647 ', 'M'),
(19, 'Sandra', 'Magirena', '65.130', '', '', 'www.sandramagirena.com.ar', 'Ginecología - Sexologia\r\n<br>Av. Rivadavia 5748 12º B - Caballito\r\n<br>4431-4832/2072/2388', 'F'),
(20, 'Gisela', 'Marchese', '121.071', '', 'homeoargentina@gmail.com', 'www.dramarchese.com.ar', 'Homeopatía Unicista\r\n<br>Av. Rivadavia 5040 Piso 10 Depto C, Caballito, Buenos Aires\r\n<br>Pedir turnos al 6699-2570\r\n<br>Días de atención: Viernes mañana y tarde', 'F'),
(21, 'Gustavo', 'Martello', '68.052', '', 'margusdoc@gmail.com', '', 'Niños y adultos\r\n<br>Díaz Velez 3841\r\n<br>Pedir turno al 15-3134-6566', 'M'),
(22, 'Silvia Cristina', 'Mercado', '57.363', '', 'misterx@fibertel.com.ar', 'www.homeopatadramercado.com.ar', 'Ambrosetti 92. Piso 1, Depto A - Caballito\r\n<br>Pedir turno al 4631-1833\r\n<br>Horarios: Lunes de 15 a 19:30 hs, Miércoles de 16 a 19:30 hs y Viernes de 9 a 12:30 hs.\r\n<br>Vidt 1923 Piso 3 Depto. A - Palermo\r\n<br>Teléfono: 4826-5652\r\n<br>Horarios: Jueves de 14 a 17:30 horas\r\n<br>Urgencias: 4631-1833', 'F'),
(23, 'Jorge Doroteo', 'Molina', '50.114', '38.851', '', '', 'Pediatría - Medicina del Deporte\r\n<br>Córdoba 3200, Buenos Aires\r\n<br>Atiende en este consultorio los días miércoles.\r\n<br>Pedir turnos al: 4624-2521 / 2002-6159', 'M'),
(24, 'María Fernanda', 'Monje', '77.266', '', 'dra.fernandamonje@gmail.com', '', 'Homeopatía Unicista\r\n<br>Atención de adolescentes y adultos \r\n<br>Belgrano. CABA\r\n<br>Pedir turnos al 15-5144-4141', 'F'),
(25, 'Galaud Mónica', 'Moreno', '32.501', '', 'dra.morenog@yahoo.com.ar', '', 'Profesora Titular en la A.M.H.A.\r\n<br>Medicina para Adultos y Niños\r\n<br>Charcas 2744 2º Piso, Depto 6 - Palermo\r\n<br>Horarios: Pedir turno al 4963-1841', 'F'),
(26, 'Elvira Elena', 'Mosciaro', '53.511', '27.539', '', '', 'Pje del Carmen 768 5A. San Nicolás, CABA\r\n<br>Pedir Turnos al 4816-4454\r\n<br>15-5097-8106', 'F'),
(27, 'Astrid', 'Motura', '116.324', '', 'amotura@gmail.com', '', 'Adscripta en la AMHA\r\n<br>Medicina Familiar\r\n<br>Caballito (Zona Primera Junta, Subte A)\r\n<br>Horarios: Lunes de 8 a 20hs.\r\n<br>Barrio Norte (Zona Estación Pueyrredón, Subte D)\r\n<br>Horarios: Miércoles y Jueves de 8 a 20hs.\r\n<br>Pedir turnos al 15-6646-5530', 'F'),
(28, 'Karina', 'Mourello', '100.411', '225.725', '', '', 'Oftalmología\r\n<br>Paraguay 3842 1º B, Buenos Aires\r\n<br>Pedir turnos al 4824-7128\r\n<br>Horarios: Martes y jueves de 8 a 19hs.', 'F'),
(29, 'Mónica', 'Müller', '82.241', '', 'ememe06@yahoo.es', '', 'Juncal 2401. Piso 14º, Dpto B. Barrio Norte\r\n<br>Horarios: Lunes, miércoles y viernes de 14 a 20 hs.\r\n<br>Pedir turno al 15-4971-5971 o dejar mensaje en el 4823-0757 y 4823-5375\r\n<br>Urgencias: 15-4044-3591', 'F'),
(30, 'Laura', 'Novas', '58.644', '', 'dralauranovas@gmail.com', '', 'Ginecología\r\n<br>Mendoza 5451 PB “A”. Villa Urquiza, Buenos Aires\r\n<br>4524-0273\r\n<br>1556026004\r\n<br>Horarios: Lun, Mar, Mie y Vie de 9 a 19hs.', 'F'),
(31, 'Analía', 'Palladino', '97.336', '', 'analiapalladino100@yahoo.com.ar', '', 'Médica Pediatra - Homeopatía Unicista.\r\n<br>Villa del Parque (a 2 cuadras de Av. Nazca y Av. Alvarez Jonte)\r\n<br>Pedir turnos al 4503-1148\r\n<br>Horarios: Lunes y Jueves de 14:30 a 19 hs.\r\nViernes de 9 a 19 hs.', 'F'),
(32, 'Raúl Eduardo', 'Pedernera', '73.785', '', '', '', 'Médico Homeópata\r\n<br>Neurología\r\n<br>Sanches de Bustamante 2027 PB “A”, Palermo\r\n<br>Pedir turnos al 4825-7598 y 3532-7856\r\n<br>Horarios: Viernes de 15 a 20 horas', 'M'),
(33, 'Sergio', 'Pereira Vitale', '76.031', '', 'homeopata@unicista.com', 'www.unicista.com', 'Moldes 2925 2° Depto B.\r\n<br>A 3 cuadras del Subte D. Belgrano\r\n<br>Pedir turno al 4545-8734\r\n<br>Horarios: Mar Mie y Jue de 14:30 a 20hs. y Lunes y Jueves de 8:30 a 12:30hs\r\n<br>Consultar por días Sábados', 'M'),
(34, 'Norma Eshter', 'Pereyra', '40.646', '', 'nepereyra@intramed.net.ar', 'www.verdaderahomeopatia.blogspot.com.ar', 'Ginecología – Especialista en Obstetricia - Médica Homeópata\r\n<br>ESPECIALIDADES AJENAS A LA HOMEOPATÍA: TOCOGINECOLOGÍA\r\n<br>Ayudante de Cátedra de AMHA\r\n<br>Consultorios en Núñez y Paternal\r\n<br>Pedir turno al 4703-2467 y 15-5756-6688', 'F'),
(35, 'Celina Beatriz', 'Perez Garaycochea', '64.736', '', '', '', 'PSIQUIATRIA: CONTENCIÓN PSICOLOGICA\r\n<br>Caballito\r\n<br>Pedir turno al 1530234235', 'F'),
(36, 'Edit Elsa', 'Perez', '53.156', '34.442', 'elsaeditperez@yahoo.com', '', '33 Orientales 1333 - Boedo\r\n<br>Horarios: Lunes a viernes.\r\n<br>Pedir turno al 4926-1617 y 15-4438-3097', 'F'),
(37, 'Raúl Gustavo', 'Pirra', '70.941', '', '', '', 'Profesor Titular a cátedra\r\n<br>Docente en la AMHA\r\n<br>Cabildo 2327 1°D, Belgrano\r\n<br>Pedir turnos al 4786-3366 de 9 a 20hs', 'M'),
(38, 'Ariana', 'Pojomovsky', '45.825', '222.124', '', '', 'Bucarelli 2236 5º 34, Villa Urquiza\r\n<br>Pedir turnos al 15-5050-3476 de Lun a <br>Vie de 15 a 19hs. Jueves de 8.30 A 12 hs.\r\n<br>\r\n<br>Migueletes 1203 1° 15, Belgrano\r\n<br>Pedir turnos al 15-5050-3476 de Lun a <br>Vie de 15 a 19hs. Consultas al 15-5050-3476\r\n<br>\r\n<br>Av. Corrientes 1965 PB "B", Congreso\r\n<br>Pedir turno al 4953-5051 y 4953-8472\r\n<br>Horarios: Viernes de 17 a 20hs', 'F'),
(39, 'Bettina', 'Prospitti', '101.492', '', 'beprospitti@hotmail.com', '', 'Socia Activa de AMHA\r\n<br>Lavallol 3863 PB 1°, Villa Devoto\r\n<br>Pedir turno al 1564592611', 'F'),
(40, 'Mónica', 'Prunell', '55.018', '61.471', '', '', 'Profesora Adjunta en la AMHA\r\n<br>Ginecología - Sexología\r\n<br>J.F.Segui 4772 2º "D" Palermo\r\n<br>Solicitar Turnos al: 15-5638-3136\r\n<br>Charcas 2744 2º 6\r\n<br>Teléfonos: 4963-1841 4962-6841 15-5638-3136\r\n<br>Horarios de Atención: Martes de 9 a 15 hs.', 'F'),
(41, 'Sandra', 'Ramirez Castañeda', '93.768', '', '', '', 'H. Irigoyen 3737, 8E, Almagro\r\n<br>Pedir turno al 15-5063-2457\r\n<br>Lunes de 17 a 21 hs\r\n<br>Martes de 8 a 12hs\r\n<br>Visitas a Domicilio Programadas', 'F'),
(42, 'Laura', 'Resi', '84.118', '', '', '', 'Cardióloga\r\n<br>Cabildo 2327 1º D - Belgrano\r\n<br>4785-4993\r\n<br>\r\n<br>Vidt 1923 3°A, Palermo\r\n<br>4826-5652', 'F'),
(43, 'Beatriz', 'Rodriguez', '58.653', '', '', '', 'Pediatría y clínica médica\r\n<br>Vta de obligado 2890 4º Piso Depto "B" - Belgrano\r\n<br>4701-3743\r\n<br>Horarios: lunes y miércoles de 13 a 20 hs.', 'F'),
(44, 'Estrella Myriam', 'Rossi', '86.439', '', 'nvpargentina@yahoo.com.ar', '', 'AV. Cabildo 2723 1º D - Belgrano\r\n<br>Teléfono: 4785-4993 y 15-5514-2680\r\n<br>Horarios: Lunes 8.30 A 12 HS.,Jueves 1 vez por mes de 15 a 20 hs. ', 'F'),
(45, 'Sandra', 'Scoccimarra', '81.471', '', '', '', 'Ayudante en la AMHA\r\n<br>Ginecología\r\n<br>Cabildo 2327 1°"D", Belgrano\r\n<br>Teléfono: 4785-4993\r\n<br>Días y horarios de atención: Lunes, Martes y Miércoles de 9 a 16 hs y Viernes de 16 a 20 hs', 'F'),
(46, 'Cecilia Karina', 'Sessa', '107.745', '', 'kasessa@yahoo.com.ar', '', 'Especialista Clínica Médica\r\n<br>Virgilio 65, Villa Luro\r\n<br>Pedir turno al 15-6527-1972', 'F'),
(47, 'Oscar Antonio', 'Skaratuja', '63.537', '24.705', 'info@consultavital.com.ar', 'www.consultavital.com.ar', 'Av. Corrientes 1965 Planta Baja B - Congreso\r\n<br>Horarios: Lun y Mie Mañana y Tarde\r\n<br>Teléfono: 4953-5051', 'M'),
(48, 'Cristina', 'Solorzano', '32.697', '', 'gestarensalud@gmail.com', 'www.gestar.com.ar', 'Especialista en Ginecología y Obstetricia\r\n<br>Taller de preparación para el parto respetado\r\n<br>Celular: 15-5011-0090\r\n<br>Fax: 4703-8308\r\n<br>\r\n<br>Scalabrini Ortiz 2356 3 A, Alto Palermo\r\n<br>Pedir turnos al 4831-9842\r\n<br>Horarios: Lunes y Miércoles de 12 a 16hs\r\n<br>\r\n<br>Ramallo 2606, Saavedra\r\n<br>Pedir turnos al 4703-8308\r\n<br>Horarios: Martes de 13 a 17hs y Viernes de 10 a 14hs.\r\n<br>\r\n<br>COLOCAR FRITZ ROY 2461 9 A, Alto Palermo\r\n<br>Pedir turnos al 4832-4201\r\n<br>Horarios: Lunes de 19 a 21hs.', 'F'),
(49, 'Liliana', 'Szabo', '57.156', '44.1549', '', '', 'Docente Adscripta de la AMHA\r\n<br>Pediatría – Formación en Terapia <br>Sistémica- Consultas prenatales - Recién nacidos – Niños- Adolescentes- Consulta de padres para orientación de crianza.\r\n<br>Virrey Loreto 2953 - Colegiales\r\n<br>Teléfono: 4792-9859', 'F'),
(50, 'Ignacio', 'Torres', '100.669', '448.289', '', '', 'Medicina Familiar\r\n<br>Av. Santa Fe 3205 1° Depto: 10, Palermo\r\n<br>4747-1833\r\n<br>Horarios: De Lunes a Viernes', 'M'),
(51, 'Jorge', 'Traverso', '33.294', '', '', 'www.jorgetraverso.com.ar', 'Paraguay 3512 4º Piso, Depto. B - Palermo\r\n<br>Teléfono: 4829-2679', 'M'),
(52, 'Miriam', 'Velcoff', '66.864', '', '', '', 'Ayudante de Cátedra en la AMHA\r\n<br>Psicopatología - Psicoterapia\r\n<br>Jauretche 145 2ºB, Caballito\r\n<br>Pedir turno al 4982-2007', 'F'),
(53, 'Eduardo Angel', 'Yahbes', '30.101', '', 'yahbes@sinectis.com.ar', 'www.librevacunacion.com.ar', 'Av. Coronel Díaz 1731 Piso 8º; Depto. C - Palermo\r\n<br>Horarios: Lunes de 15 a 20 hs. Martes y miércoles de 9:30 a 13 hs. y de 15 a 20 hs.\r\n<br>Pedir turno al 4826-9698\r\n<br>Urgencias: 4821-0678', 'M'),
(54, 'Facundo Durval', 'Santillan', '105.174', '448.751', '', '', 'Pediatra\r\n<br>Rafael Obligado 1301, Don Torcuato.\r\n<br>Teléfono: 15-6480-8429\r\n<br>Horarios de Atención: Jueves de 17:30 a 20 hs. y Viernes de 9 a 12 hs.', 'M'),
(55, 'Carlos Ernesto', 'Dominguez', '98.050', '1.810', '', '', 'Tocoginecología\r\n<br>Mariano Castex 1277 Ofic.31, Ezeiza\r\n<br>Pedir turnos al: 5075-0030\r\n<br>Horarios de Atención: Martes de 8 a 11 hs. y Sábados de 8 a 12 hs.', 'M'),
(56, 'Gabriel Antonio', 'Montaos', '60.063', '35.849', '', '', 'Pediatría\r\n<br>Guitierrez 334, Morón, Buenos Aires\r\n<br>Pedir turnos al 4483-3388\r\n<br>Horarios:\r\n<br>Mar de 14 a 18hs, Jue de 17 a 20hs\r\n<br>Lun-Vie y Sab de 9 a 12hs.', 'M'),
(57, 'Lucía', 'Fernandez Moores', '127.175', '', '', '', 'Atención a Niños\r\n<br>Estancias del Pilar, Pilar, BsAs.\r\n<br>Pedir turnos al 15-6054-1856', 'F'),
(58, 'Beatriz', 'Miras', '55.032', '5.062', '', '', 'Pediatría\r\n<br>Victor Vergani 895\r\n<br>Pilar, Buenos Aires\r\n<br>(02322) 664602\r\n<br>Lunes de 10 a 12hs y 16 a 20hs', 'F'),
(59, 'Gerardo', 'Gigena', '67.441', '221.061', '', '', 'Ayudante en la AMHA\r\n<br>Cardiología - Hemodinamia\r\n<br>12 de Octubre 2666, Quilmes, Quilmes, Buenos Aires\r\n<br>Pedir turnos al: 6088-7895\r\n<br>Horarios: Lunes, Miércoles y Viernes', 'M'),
(60, 'Emilse', 'Mata', '62.536', '', '', '', 'Pediatra, Neonatóloga\r\n<br>Av. 12 de Octubre 2670 per Piso, Quilmes Oeste, Buenos Aires\r\n<br>Pedir turnos al 6088-7895\r\n<br>Horarios: Mar de 10:30 a 15hs, Vie 15hs, Sábado 9hs', 'F'),
(61, 'Raúl', 'Sanz', '29.415', '22.835', 'raulsanz@radar.com.ar', '', 'Alvear 641 Piso 1º, Depto B - Quilmes\r\n<br>Pedir turno de lunes a viernes de 10 a 21 hs. al 4251-2874\r\n<br>Horarios: Lunes a viernes de 15 a 21 hs.\r\n<br>Urgencias: 15-4497-8945', 'M'),
(62, 'Carolina', 'Alonso', '112.468', '227.681', 'alonso_caroj@yahoo.com.ar', '', 'Ayudante en la AMHA\r\n<br>Especialista en Clínica Médica\r\n<br>Conesa 56 1º 9, Quilmes. Buenos Aires.\r\n<br>Pedir turnos al: 6079-8575', 'F'),
(63, 'Mariana', 'Martinez', '98.864', '446.785', 'mimartinez21@yahoo.com.ar', '', 'VILLA ADELINA - SAN ISIDRO\r\n<br>Teléfono: 4735-6494 y 15-5894-9875', 'F'),
(64, 'Patricia', 'Molinaris', '109.069', '', 'patriciamolinaris@gmail.com', '', 'Pediatría. Atención Niños y adultos\r\n<br>Olivos, Vicente López\r\n<br>Pedir turnos al 1557219792\r\n<br>Zona Norte, Capital Federal', 'F'),
(65, 'Ana María', 'Stocki', '1.615', '', 'anamariastocki@bvconline.com.ar', '', 'Clínica - Terapia intensiva\r\n<br>Soler 146 8º a, Bahía Blanca, Pcia. De Buenos Aires\r\n<br>(0291) 454 4283\r\n<br>Horarios: martes a viernes de 16 a 19 hs', 'F'),
(66, 'Pamela', 'Jaque Careaga', '97.240', '113.155', '', '', 'Pediatría\r\n<br>Hipólito Yrigoyen 520, Oficna 7 Tandil, Pcia. De Buenos Aires\r\n<br>(0249) 15 430 6665 \r\n<br>Horarios: lunes, miercoles y viernes de 8 a 12 hs. y miercoles y jueves de 16 a 20 hs.', 'F'),
(67, 'María del Carmen', 'Romero', '123.987', '3.686', '', '', 'Médica Homeopatica\r\n<br>San Martín 1056, La Cruz, Corrientes, Corrientes\r\n<br>Pedir turnos al:(0379)4438602 o (0379) 154617051', 'F'),
(68, 'René', 'Llabot Bofill', '', '10.457', 'renellabot@yahoo.com.ar', '', 'Medicina Legal y Toxicología\r\n<br>Ex-Director Medicinas No Tradicionales (FCM/UNC).\r\n<br>Corro 328; 2D. Córdoba Capital\r\n<br>Pedir turnos al 0351-4237633\r\n<br>Lunes a Jueves de 10 a 13:30\r\n<br>0351-15-3250959\r\n<br>Fax: 0351-4237633', 'M'),
(69, 'Adriano', 'Zanin', '44.058', '250', '', '', 'Maipú 699 Formosa, Pcia de Formosa\r\n<br>(03717) 42-2940\r\n<br>Horarios: de lunes a viernes de 16 a 21 hs.', 'M'),
(70, 'Graciela Cristina', 'Martin', '63.969', '2.208', 'artingracielacristina@yahoo.com.ar', '', 'Artigas 746 - Gral. Roca - Provincia Rio Negro\r\n<br>Teléfono (0298) 154522509\r\n<br>Horarios: Lunes a Viernes de 9 A 19 hs.', 'F'),
(71, 'Florencia', 'De Cristoforis', '92.825', '448.151', 'fdecristoforis@gmail.com', '', 'Médica pediátrica, especialista en Neonatología\r\n<br>Clínica Homopática\r\n<br>Atención Niños y Adultos\r\n<br>Bme. Mitre 165, Junín, BsAs\r\n<br>(0236) 4429922\r\n<br>Urgencias:(0236)154547759', 'F'),
(72, 'Patricia', 'Guimera', '104.270', '115.549', '', '', 'Genética\r\n<br>Calle 17 Nº 322 esquina Cantilo, City Bell, La Plata, Buenos Aires\r\n<br>Celular: (0221)154548729', 'F'),
(73, 'Vanesa', 'Neumann', '142.322', '115.217', 'ivanesaneumann@hotmail.com', '', 'Pediatría\r\n<br>Calle 33 Nº 546, Barrio Norte, La Plata, Buenos Aires\r\n<br>Pedir turnos al: (0221) 4235459\r\n<br>Horarios: Lun y Vie de 16 a 20hs.', 'F'),
(74, 'Estela', 'Bibiloni', '', '91.459', '', '', 'Ituzaingó 4987\r\n<br>Mar del Plata, Pcia. de Buenos Aires\r\n<br>Pedir turnos al 02234732020', 'F'),
(75, 'David', 'Zaina', '121.797', '5.046/6.967', '', '', 'Clínica Médica\r\n<br>Olegario V. Andrade 290, Quinta Sección, MENDOZA, Pcia. de Mendoza\r\n<br>(0261) 15-468-2268\r\n<br>Horarios: Consultar al (0261) 428-0320', 'M'),
(76, 'Hector David', 'Vargas', '', '3.130', 'cemeca18@hotmail.com', 'www.doloresvertebrales.com', 'Av. Tres Fronteras 243. Puerto Iguazú, Misiones\r\n<br>Horarios: Pedir turno al (03757) 423217 / 423529 / 421612', 'M'),
(77, 'José María', 'Oberlin', '', '', '', '', 'Medicina Gneral y Familiar\r\n<br>Tucumán 2690 P.B. "3", ROSARIO, SANTA FE\r\n<br>Horarios: Lun a Vie de 9 a 19hs, llamando al (0341)4376873 o 15-6155-471\r\n<br>También consultorios en San Justo y Funes, Santa Fe.', 'M'),
(78, 'Andrea', 'Constantino', '124.834', '', '', '', 'Niños, Adolescentes y Adultos\r\n<br>Francia 2442\r\n<br>Santa Fe, Santa Fe\r\n<br>Pedir turno al (0342)4538007\r\n<br>Celular: (0342)155318009', 'F'),
(79, 'Paula', 'Asprea', '95.413', '1.663', '', '', 'Medicina Familiar\r\n<br>Los Almendros 1008, Villa de Merlo. San Luis.\r\n<br>Teléfono: (02656)473385\r\n<br>Horarios: Lunes a Viernes de 9 a 12 y de 17 a 20 hs. ', 'F'),
(80, 'Carlos', 'Gutierrez', '80.074', '442.709', '', '', 'Pediatría\r\n<br>Uruguay 2060, Paraná, SAN PEDRO, Buenos Aires\r\n<br>Pedir turno al (03329)42-6066\r\n<br>Horarios: Lun, Mar y Jue de 16 a 20hs.', 'M'),
(81, 'Carlos Fransisco', 'Angeleri', '6.517', '', '', '', 'Veterinario\r\n<br>Marcelo T. de Alvear 777, Retiro, Buenos Aires\r\n<br>Pedir turnos al: 4314-4054\r\n<br>Horarios: Lun, Mar, Jue y Vie de 16 a 20 hs.\r\n<br>MIe de 14 a 18 hs\r\n<br>Sab de 10 a 14 hs\r\n<br>Consultas a domicilio al 15-4091-0115', 'M'),
(82, 'Patricia', 'Douer', '3.942', '', 'patri.douer@arnet.com.ar', '', 'Ayudante Cátedra Veterinaria en la AMHA\r\n<br>Médica Veterinaria\r\n<br>Alfaro 222 - Acassuso, San Isidro\r\n<br>Pedir turno al 4792-0351 y 15-4473-1522\r\nde Lun a Sáb de 9:30 a 13:30 hs', 'F'),
(83, 'Lucía', 'Ferrerini', '8.226', '', 'lucila_ferrini@yahoo.com.ar', 'www.homeoequina.com.ar', 'Clínica Pequeños Animales, Clínica Equina y otras especialidades.\r\n<br>Radiología Equina\r\n<br>Solicitar turnos al: 4806-2615, 4788-0179 y 15-6510-6289\r\n<br>Atención a domicilios.', 'F'),
(84, 'Claudia', 'Raposo', '4.641', '', '', 'claudiaraposo61@gmail.com', 'Ex profesora adjunta en la AMHA\r\n<br>Av. Ratti 260, Ituzaingó\r\n<br>Pedir turno al 4624-4863\r\n<br>Atención en Consultorio y a domicilio', 'F'),
(85, 'María Cristina', 'García Proto', '4.111', '8.118', 'mcgarciaporto@gmail.com', '', 'Emilio Lamarca 2073 - Villa del Parque\r\n<br>Horarios de atención: lunes a viernes de <br>17 a 20:30 hs. y sábados de 9 a 14 hs.\r\n<br>Teléfono: 4568-2536\r\n<br>Celular: 15-5828-5821', 'F'),
(86, 'Silvia Beatriz', 'Palacios', '13.437', '', '', '', 'Docente Adscripta en AMHA\r\n<br>Odontóloga\r\n<br>Viamonte 2926 PB, Balvanera\r\n<br>Pedir turnos al 4964-0767', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE IF NOT EXISTS `pharmacy` (
  `pharmacy_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `fax` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `website` varchar(255) NOT NULL,
  PRIMARY KEY (`pharmacy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`pharmacy_id`, `name`, `address`, `phone`, `fax`, `email`, `website`) VALUES
(1, 'Ferran', 'Timbres 860, Castelar', '4628-2322 | 4629-0236 | 4627-5506 | 4489-4195', '', 'farm_ferran@hotmail.com', ''),
(2, 'Fialco', 'Lamadrid 338, Quilmes', '4252-1744 | 4259-8374 | 4251-2046', '', 'ffialco@yahoo.com.ar', ''),
(3, 'Francesa', 'Av. Rivadavia 4544, CABA', '4903-7787', '4902-4433', 'homeopatiafrancesa@gmail.com', ''),
(4, 'Hahnemann', 'Hipólito Irigoyen 2792, CABA', '4931-4635 | 4932-7268 | 4932-7291', '4932-7239', 'contacto@hahnemann.com.ar', 'www.hahnemann.com.ar'),
(5, 'Cangallo', 'Tte. Gral . Juan Domingo Perón 1670, CABA', '5219-2001', '', 'farmacia@homeocangallo.com', ''),
(6, 'Godoy', 'Av. Belgrano 2509 (CABA)', '4942-7461 | 4308-5189', '', 'farmaciahomeopaticagodoy@fibertel.com', ''),
(7, 'Rivadavia', 'Rivadavia 247, Córdoba', '(0351) 4237-122 líneas rotativas', '(0351) 4237-122', 'homeorivadavia@arnet.com.ar', ''),
(8, 'Maure', 'Av. Cabildo 499, CABA', '4771-1887 | 4771-3427 | 0800-888-62873', '', 'fm-maure@sion.com', ''),
(9, 'Similia (Suc. Belgrano)', 'Av. Cabildo 1248, CABA', '4780-1111', '', 'belgrano@similia.com.ar homeopatiabelgrano@similia.com.ar', ''),
(10, 'Similia (Suc. Palermo)', 'Av. Santa Fe 4402, CABA', '4776-4605 (L. rotat)', '', 'palermo@similia.com.ar homeopatiapalermo@similia.com.ar', ''),
(11, 'Similia (Suc. Barrio Norte)', 'Av. Santa Fe 2642, CABA', '4826-1919 (L.rotat.)', '', 'barrionorte@similia.com.ar homeopatiabarrionorte@similia.com.ar', ''),
(12, 'Vassallo (Suc. Olivos)', 'Ricardo Gutierrez 1202, Olivos', '4799-2246 | 4799-4207', '', 'olivos@vassallo.com.ar', ''),
(13, 'Vassallo (Suc. San Isidro)', 'Belgrano 135, San Isidro', '4743-0049 | 4747-6417', '', 'sanisidro@vassallo.com.ar', ''),
(14, 'Vassallo (Suc. Caballito)', 'José María Moreno 245, CABA', '4901-5300', '', 'caballito@vassallo.com.ar', ''),
(15, 'Vassallo (Suc. Belgrano)', 'Cabildo 2517, CABA', '4784-3599 | 4784-4177', '', 'belgrano@vassallo.com.ar', ''),
(16, 'Vassallo (Suc. Juncal)', 'Juncal 2116, CABA', '4823-1400 | 4829-2232', '', 'juncal@vassallo.com.ar', ''),
(17, 'Vassallo (Suc. Villa del Parque)', 'Cuenca 2719, CABA', '4501-0605 | 4504-4242', '', 'villadelparque@vassallo.com.ar', ''),
(18, 'Del Pueblo', 'San Martín 300 (Esquina Balcarce), Villa Ballester', '4767-1500', '4768-0412', 'farmadelpueblo@live.com', ''),
(19, 'Caledonia', 'Guesses 3732, CABA', '4823-9442', '', '', ''),
(20, 'Milenium', 'Juncal 2863, CABA', '4825-1511', '', '', ''),
(21, 'Italiana', '20 de Septiembre 1678, Mar del Plata', '0223-473-0178', '', 'farmaciahitaliana@yahoo.com.ar', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
