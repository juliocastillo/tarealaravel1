CREATE DATABASE `proyectos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
-- proyectos.proyectos definition


CREATE TABLE `proyectos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `NombreProyecto` varchar(100) DEFAULT NULL,
  `fuenteFondos` varchar(100) DEFAULT NULL,
  `MontoPlanificado` double DEFAULT NULL,
  `MontoPatrocinado` double DEFAULT NULL,
  `MontoFondosPropios` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO proyectos.proyectos
(id, NombreProyecto, fuenteFondos, MontoPlanificado, MontoPatrocinado, MontoFondosPropios)
VALUES(1, 'Limpieza de rios', 'GOES', 25000.0, 25000.0, 0.0);
INSERT INTO proyectos.proyectos
(id, NombreProyecto, fuenteFondos, MontoPlanificado, MontoPatrocinado, MontoFondosPropios)
VALUES(2, 'Charlas a escuelas', 'GOES', 3000.0, 3000.0, NULL);
INSERT INTO proyectos.proyectos
(id, NombreProyecto, fuenteFondos, MontoPlanificado, MontoPatrocinado, MontoFondosPropios)
VALUES(3, 'PLAYAS', 'OMS', 239.0, 9092.0, 292.0);
