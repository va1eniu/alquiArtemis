

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `constructora` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `direccion` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;



INSERT INTO `constructora` (`nombre`, `direccion`) VALUES
('Constructora Futurista', '789 Paseo de la Tecnología');


CREATE TABLE `empleados` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;


INSERT INTO `empleados` (`usuario`, `password`) VALUES
( 'johndoe', 'secreto123'),
('janesmith', 'clave456'),
( 'robertjohnson', 'contraseña789');


CREATE TABLE `cotizaciones` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_constructora` INT(11) NOT NULL,
  `id_empleado` INT(11) NOT NULL,
  `fecha` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_constructora`) REFERENCES `constructora` (`id`),
  FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

CREATE TABLE `productos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `descripcion` VARCHAR(50) NOT NULL,
  `precio` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

INSERT INTO `productos` (`nombre`, `descripcion`, `precio`) VALUES
( 'Ladrillos', 'Ladrillos de arcilla cocida para construcción', '100'),
('Cemento', 'Bolsa de cemento Portland para mezclas de concreto', '50'),
( 'Varillas de acero', 'Varillas de acero corrugado para refuerzo estructural', '200');


