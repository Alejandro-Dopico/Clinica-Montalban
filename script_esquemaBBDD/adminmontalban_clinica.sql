-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-adminmontalban.alwaysdata.net
-- Generation Time: Jan 24, 2024 at 01:14 PM
-- Server version: 10.6.16-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminmontalban_clinica`
--

-- --------------------------------------------------------

--
-- Table structure for table `cita`
--

CREATE TABLE `cita` (
  `idCita` int(11) NOT NULL,
  `idTrabajador` int(11) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cita`
--

INSERT INTO `cita` (`idCita`, `idTrabajador`, `idCliente`, `fecha`, `hora`, `descripcion`) VALUES
(1, 1, 162, '2023-11-11', '23:03:45', 'si'),
(10, 1, 162, '2024-01-31', '08:00:00', 'Hola esto es una prueba!'),
(13, 1, 162, '2024-01-31', '13:00:00', 'asdasd'),
(14, 1, 162, '2024-01-30', '08:00:00', 'asdasd'),
(15, 1, 162, '2024-01-30', '13:00:00', 'asdasd'),
(16, 1, 162, '2024-01-24', '08:00:00', 'asdasd'),
(17, 1, 162, '2024-01-23', '09:00:00', 'asdasd'),
(18, 1, 162, '2024-01-23', '13:00:00', 'Xavi estoy loko'),
(19, 1, 162, '2024-01-29', '11:00:00', 'sfsdfsdf'),
(20, 1, 162, '2024-01-31', '11:00:00', 'asdasd'),
(21, 1, 162, '2024-01-24', '09:00:00', 'Aaaa'),
(22, 1, 162, '2024-01-24', '10:00:00', 'sadsd'),
(23, 1, 162, '2024-01-24', '13:00:00', 'asdas'),
(24, 1, 162, '2024-01-24', '12:00:00', 'Estoy cansado de este puñetero ciclo la verdad.'),
(29, 1, 167, '2024-01-25', '09:00:00', 'Me duele la cabeza '),
(33, 1, 165, '2024-01-27', '08:00:00', 'me duele el culo'),
(34, 1, 165, '2024-01-25', '08:00:00', 'asdasd'),
(35, 1, 165, '2024-01-25', '11:00:00', 'hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola hola ');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `DNI` char(9) DEFAULT NULL,
  `cuota` tinyint(1) DEFAULT 1,
  `contrasena` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`idCliente`, `DNI`, `cuota`, `contrasena`) VALUES
(162, '99999999N', 1, 'cf8d915d0a6a321e14feb4883ff030f0cd7c73c3bf3ab8c366ddc2e0688bc17c74e84e6fd122cc6f4276de1f7f09804fdd1c86e43c1ff541373f10d60cdd59fc'),
(165, '99999999A', 1, 'd6f644b19812e97b5d871658d6d3400ecd4787faeb9b8990c1e7608288664be77257104a58d033bcf1a0e0945ff06468ebe53e2dff36e248424c7273117dac09'),
(167, '54038744Z', 1, 'b1ac618b515e1c183df1acfdff69041159b1fa6c98a0b59f5c2b42a2a5eb4ee97f7bb2a5c21527415a44a275b1f87ddd6caee2595c2fd953f85bfdd7bceacee3');

-- --------------------------------------------------------

--
-- Table structure for table `especialidad`
--

CREATE TABLE `especialidad` (
  `idEspecialidad` int(11) NOT NULL,
  `descripcio` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `especialidad`
--

INSERT INTO `especialidad` (`idEspecialidad`, `descripcio`) VALUES
(1, 'Terapeuta'),
(2, 'Ginecólogo'),
(3, 'Cardiólogo'),
(4, 'Dermatólogo'),
(5, 'Neurólogo');

-- --------------------------------------------------------

--
-- Table structure for table `log_persona_changes`
--

CREATE TABLE `log_persona_changes` (
  `id` int(11) NOT NULL,
  `DNI` varchar(255) DEFAULT NULL,
  `cambios` varchar(255) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `DNI` char(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(70) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` int(9) NOT NULL,
  `direccion` varchar(75) NOT NULL,
  `codigo` int(255) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL,
  `reset_token` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`DNI`, `nombre`, `apellido`, `correo`, `telefono`, `direccion`, `codigo`, `reset_token_expires_at`, `reset_token`) VALUES
('10101010Z', 'Elena', 'Santos', 'elena@gmail.com', 888888888, 'Carrer Muntaner 876', NULL, NULL, NULL),
('11111111A', 'Alejandro', 'Garcia', 'alexdopico.96@gmail.com', 888888888, 'aquui', 5835, '2024-01-24 03:18:25', 85356),
('12121212M', 'Miguel', 'González', 'miguel@gmail.com', 777777777, 'Avinguda Paral·lel 543', NULL, NULL, NULL),
('22222222M', 'Laura', 'Gómez', 'laura@gmail.com', 777777777, 'Carrer Valencia 123', NULL, NULL, NULL),
('33333333Z', 'Roberto', 'Sánchez', 'roberto@gmail.com', 666666666, 'Avinguda Diagonal 456', NULL, NULL, NULL),
('44444444M', 'María', 'López', 'maria@gmail.com', 555555555, 'Passeig de Gràcia 789', NULL, NULL, NULL),
('54038744Z', 'Marko', 'Pareja', 'mpareja@institutmvm.cat', 666210787, 'Calle Baleares ', NULL, NULL, NULL),
('55555555Z', 'Carlos', 'Martínez', 'carlos@gmail.com', 444444444, 'Rambla Catalunya 987', NULL, NULL, NULL),
('66666666M', 'Sara', 'Fernández', 'sara@gmail.com', 333333333, 'Carrer Gran Via 654', NULL, NULL, NULL),
('77777777Z', 'Javier', 'Hernández', 'javier@gmail.com', 222222222, 'Plaça Catalunya 321', NULL, NULL, NULL),
('88888888M', 'Ana', 'Gutiérrez', 'ana@gmail.com', 111111111, 'Carrer Provença 432', NULL, NULL, NULL),
('99999999A', 'Alejandro', 'Espadas', 'pruebaprueba@gmail.com', 999999999, 'Vilassar de Mar', NULL, NULL, NULL),
('99999999M', 'José', 'Ramírez', 'jose@gmail.com', 999999999, 'Avinguda Meridiana 789', NULL, NULL, NULL),
('99999999N', 'Arnau', 'Vázquez Cuevas', 'xdelperal@institutmvm.cat', 111222333, 'c/ Santa Adriá del besos', 4933, '2024-01-23 17:29:11', 0);

--
-- Triggers `persona`
--
DELIMITER $$
CREATE TRIGGER `after_persona_update` AFTER UPDATE ON `persona` FOR EACH ROW BEGIN
    DECLARE cambios VARCHAR(255);
    
    -- Verifica si el campo nombre ha cambiado
    IF OLD.nombre <> NEW.nombre THEN
        SET cambios = CONCAT(cambios, 'Nombre: ', OLD.nombre, ' -> ', NEW.nombre, '; ');
    END IF;
    
    -- Verifica si el campo apellido ha cambiado
    IF OLD.apellido <> NEW.apellido THEN
        SET cambios = CONCAT(cambios, 'Apellido: ', OLD.apellido, ' -> ', NEW.apellido, '; ');
    END IF;

    -- Verifica si el campo telefono ha cambiado
    IF OLD.telefono <> NEW.telefono THEN
        SET cambios = CONCAT(cambios, 'Teléfono: ', OLD.telefono, ' -> ', NEW.telefono, '; ');
    END IF;

    -- Verifica si el campo direccion ha cambiado
    IF OLD.direccion <> NEW.direccion THEN
        SET cambios = CONCAT(cambios, 'Dirección: ', OLD.direccion, ' -> ', NEW.direccion, '; ');
    END IF;

    -- Inserta el registro en el log solo si hay cambios
    IF LENGTH(cambios) > 0 THEN
        INSERT INTO log_persona_changes (DNI, cambios, fecha) 
        VALUES (NEW.DNI, cambios, NOW());
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `idTrabajador` int(11) NOT NULL,
  `DNI` char(9) DEFAULT NULL,
  `especialidad` int(11) DEFAULT NULL,
  `correoEmp` varchar(75) DEFAULT NULL,
  `password` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`idTrabajador`, `DNI`, `especialidad`, `correoEmp`, `password`) VALUES
(1, '11111111A', 1, 'adopico@clinicamontalban.com', '123'),
(7, '77777777Z', 2, 'javier@clinicamontalban.com', 'password123'),
(8, '88888888M', 3, 'ana@clinicamontalban.com', 'securepass'),
(9, '99999999M', 4, 'jose@clinicamontalban.com', 'mypassword'),
(10, '10101010Z', 5, 'elena@clinicamontalban.com', 'strongpassword');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`idCita`),
  ADD KEY `idTrabajador` (`idTrabajador`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `DNI` (`DNI`) USING BTREE;

--
-- Indexes for table `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`idEspecialidad`);

--
-- Indexes for table `log_persona_changes`
--
ALTER TABLE `log_persona_changes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`DNI`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`idTrabajador`),
  ADD KEY `DNI` (`DNI`),
  ADD KEY `especialidad` (`especialidad`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cita`
--
ALTER TABLE `cita`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `idEspecialidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log_persona_changes`
--
ALTER TABLE `log_persona_changes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `idTrabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`idTrabajador`) REFERENCES `personal` (`idTrabajador`),
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`);

--
-- Constraints for table `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `persona` (`DNI`);

--
-- Constraints for table `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `persona` (`DNI`),
  ADD CONSTRAINT `personal_ibfk_2` FOREIGN KEY (`especialidad`) REFERENCES `especialidad` (`idEspecialidad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
