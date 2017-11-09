-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2017 a las 00:17:47
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_db`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarDatosGenerales` (`id_persona` INT(11), `emailpersonal` VARCHAR(45), `emailinstitucional` VARCHAR(45), `direccion` VARCHAR(140), `telefonocelular` INT(11), `telefonocasa` INT(11))  BEGIN
   	INSERT INTO correos (`correo`, `tipo_correo`, `id_duenio_correo`) VALUES (emailpersonal, 'Personal', id_persona);
	INSERT INTO correos (`correo`, `tipo_correo`, `id_duenio_correo`) VALUES (emailinstitucional, 'Institucional', id_persona);
	INSERT INTO direcciones (`id_address`, `address`, `id_duenio_direccion`) VALUES (null, direccion, id_persona);
	INSERT INTO telefonos (`numero`, `tipo_telefono`, `id_duenio_tel`) VALUES (telefonocelular, 'Celular', id_persona);
	INSERT INTO telefonos (`numero`, `tipo_telefono`, `id_duenio_tel`) VALUES (telefonocasa, 'Casa', id_persona);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarEmpleadoLaborando` (`id_empleado_p` INT(11), `carne_p` INT(11), `nombres_p` VARCHAR(50), `apellidos_p` VARCHAR(50), `dpi_p` INT(13), `nit_p` INT(13), `fecha_nacimiento_p` DATE, `profesion_p` VARCHAR(50), `numero_colegiado_p` INT(15), `colegio_profesional_p` VARCHAR(50), `estado_civil_p` VARCHAR(30), `nacionalidad_p` VARCHAR(40), `es_asesor_p` TINYINT(1), `activo_p` TINYINT(1), `es_catedratico_p` TINYINT(1), `id_de_rol_p` INT(11), `emailpersonal` VARCHAR(45), `emailinstitucional` VARCHAR(45), `direccion` VARCHAR(140), `telefonocelular` INT(11), `telefonocasa` INT(11))  BEGIN
	DECLARE validacion_cat tinyint(1);
	DECLARE validacion_ase tinyint(1);
	DECLARE id_employee int(11);
	
   INSERT INTO `empleado_laborando`(`id_empleado`,
                                    `carne`,
                                    `nombres`,
                                    `apellidos`,
                                    `dpi`,
                                    `nit`,
                                    `fecha_nacimiento`,
                                    `profesion`,
                                    `numero_colegiado`,
                                    `colegio_profesional`,
                                    `estado_civil`,
                                    `nacionalidad`,
                                    `es_asesor`,
                                    `activo`,
                                    `es_catedratico`,
                                    `id_de_rol`)
        VALUES (null,carne_p,nombres_p,apellidos_p,dpi_p,nit_p,fecha_nacimiento_p,profesion_p,numero_colegiado_p,
   colegio_profesional_p,estado_civil_p,nacionalidad_p,es_asesor_p,activo_p,es_catedratico_p,id_de_rol_p);
   select es_asesor from Empleado_Laborando order by id_empleado DESC limit 1 into validacion_ase;
   select es_catedratico from Empleado_Laborando order by id_empleado DESC limit 1 into validacion_cat;
   select id_empleado from Empleado_Laborando order by id_empleado DESC limit 1 into id_employee;
   if validacion_ase is true 
   THEN
      INSERT INTO `asesores`(`id_asesor`, `id_empleado`, `num_asesorados`)
           VALUES (NULL, id_employee, '0');
   END IF;
	if validacion_cat is true 
   THEN
      INSERT INTO `catedraticos`(`id_catedratico`, `id_empleado`)
           VALUES (NULL, id_employee);
   END IF;
   call InsertarDatosGenerales(id_employee, emailpersonal, emailinstitucional,
   direccion, telefonocelular, telefonocasa);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actualizaciones_de_estado`
--

CREATE TABLE `actualizaciones_de_estado` (
  `id_update` int(11) NOT NULL,
  `fecha_update` date NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesores`
--

CREATE TABLE `asesores` (
  `id_asesor` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `num_asesorados` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaciones_estudiantes`
--

CREATE TABLE `asignaciones_estudiantes` (
  `id_asignacion_estudiante` int(11) NOT NULL,
  `id_carrera` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_privados_inter` int(11) NOT NULL,
  `id_privados` int(11) NOT NULL,
  `fecha_asignacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_asesor`
--

CREATE TABLE `asignacion_asesor` (
  `id_asesor` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `fecha_asignacion` date NOT NULL,
  `asignacion_vigente` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_catedratico`
--

CREATE TABLE `asignacion_catedratico` (
  `id_asignacion_catedratico` int(11) NOT NULL,
  `id_catedratico` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `anio` year(4) NOT NULL,
  `semestre` varchar(10) NOT NULL,
  `periodos_semanales` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficios_alumno`
--

CREATE TABLE `beneficios_alumno` (
  `id_beneficios` int(11) NOT NULL,
  `porcentaje_beca` float DEFAULT NULL,
  `porcentaje_credito` float DEFAULT NULL,
  `id_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_new_data`
--

CREATE TABLE `bitacora_new_data` (
  `id_registro_nuevo` int(11) NOT NULL,
  `tabla_editada` varchar(40) NOT NULL,
  `campo_editado` varchar(40) NOT NULL,
  `valor_nuevo` varchar(40) NOT NULL,
  `fecha_de_ingreso` date NOT NULL,
  `hora_de_ingreso` time NOT NULL,
  `id_registro_viejo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_old_data`
--

CREATE TABLE `bitacora_old_data` (
  `id_registro_viejo` int(11) NOT NULL,
  `tabla_editada` varchar(40) NOT NULL,
  `campo_editado` varchar(40) NOT NULL,
  `valor_viejo` varchar(40) NOT NULL,
  `id_registro_nuevo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL,
  `nombre_carrera` varchar(50) NOT NULL,
  `id_director_carrera` int(11) NOT NULL,
  `id_facultad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catedraticos`
--

CREATE TABLE `catedraticos` (
  `id_catedratico` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catedratico_postulado`
--

CREATE TABLE `catedratico_postulado` (
  `id_postulante` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `expediente_completo` tinyint(1) NOT NULL,
  `entrevista_realizada` tinyint(1) NOT NULL,
  `puesto_aspirado` varchar(20) NOT NULL,
  `acta_aprobacion` int(11) NOT NULL,
  `expediente_en_VCR` tinyint(1) NOT NULL,
  `entrevista_vcr` tinyint(1) NOT NULL,
  `aprobado_vcr` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correos`
--

CREATE TABLE `correos` (
  `correo` varchar(45) NOT NULL,
  `tipo_correo` varchar(30) NOT NULL,
  `id_duenio_correo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correspondencia`
--

CREATE TABLE `correspondencia` (
  `id_correspondiente` int(11) NOT NULL,
  `fecha_reporte` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `credenciales_sistema`
--

CREATE TABLE `credenciales_sistema` (
  `id_sistema` int(11) NOT NULL,
  `password_sistema` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_facultad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id_address` int(11) NOT NULL,
  `address` varchar(140) NOT NULL,
  `id_duenio_direccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_estudiante`
--

CREATE TABLE `documentos_estudiante` (
  `id_documentos` int(11) NOT NULL,
  `dpi` int(13) NOT NULL,
  `nota_ingles` float NOT NULL,
  `id_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado_laborando`
--

CREATE TABLE `empleado_laborando` (
  `id_empleado` int(11) NOT NULL,
  `carne` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `dpi` int(13) NOT NULL,
  `nit` int(13) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `profesion` varchar(50) NOT NULL,
  `numero_colegiado` int(15) NOT NULL,
  `colegio_profesional` varchar(50) NOT NULL,
  `estado_civil` varchar(30) NOT NULL,
  `nacionalidad` varchar(40) NOT NULL,
  `es_asesor` tinyint(1) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `es_catedratico` tinyint(1) NOT NULL,
  `id_de_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_de_alumnos`
--

CREATE TABLE `estados_de_alumnos` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_alumno` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenes_privados`
--

CREATE TABLE `examenes_privados` (
  `id_privados` int(11) NOT NULL,
  `nota_privados` int(11) NOT NULL,
  `fecha_privados` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examenes_privados_intermedios`
--

CREATE TABLE `examenes_privados_intermedios` (
  `id_privados_inter` int(11) NOT NULL,
  `nota_privados_inter` float NOT NULL,
  `fecha_privados_inter` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id_facultad` int(11) NOT NULL,
  `nombre_facultad` varchar(50) NOT NULL,
  `id_decano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `firmas_catedraticos`
--

CREATE TABLE `firmas_catedraticos` (
  `id_asignacion_catedratico` int(11) NOT NULL,
  `fecha_firma` date NOT NULL,
  `hora_firma` time NOT NULL,
  `tema_impartido` varchar(140) NOT NULL,
  `firmado` tinyint(1) NOT NULL,
  `firma_pagada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `graduacion_completada`
--

CREATE TABLE `graduacion_completada` (
  `id_graduacion` int(11) NOT NULL,
  `asesor` int(11) NOT NULL,
  `nombre_carrera` varchar(50) NOT NULL,
  `director_carrera` int(11) NOT NULL,
  `nombre_facultad` varchar(50) NOT NULL,
  `decano` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso_graduacion`
--

CREATE TABLE `proceso_graduacion` (
  `id_proceso` int(11) NOT NULL,
  `asesor_tesis` int(11) NOT NULL,
  `id_asignacion_estudiante` int(11) NOT NULL,
  `entrega_cd` tinyint(1) NOT NULL,
  `status_tesis` varchar(30) NOT NULL,
  `fecha_proceso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_de_sistema`
--

CREATE TABLE `roles_de_sistema` (
  `id_de_rol` int(11) NOT NULL,
  `nombre_rol` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles_de_sistema`
--

INSERT INTO `roles_de_sistema` (`id_de_rol`, `nombre_rol`) VALUES
(0, 'Lectura'),
(1, 'Mantenimiento'),
(2, 'Catedrático');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE `telefonos` (
  `numero` int(11) NOT NULL,
  `tipo_telefono` varchar(20) NOT NULL,
  `id_duenio_tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actualizaciones_de_estado`
--
ALTER TABLE `actualizaciones_de_estado`
  ADD PRIMARY KEY (`id_update`),
  ADD KEY `id_estado` (`id_estado`),
  ADD KEY `id_alumno` (`id_alumno`);

--
-- Indices de la tabla `asesores`
--
ALTER TABLE `asesores`
  ADD PRIMARY KEY (`id_asesor`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indices de la tabla `asignaciones_estudiantes`
--
ALTER TABLE `asignaciones_estudiantes`
  ADD PRIMARY KEY (`id_asignacion_estudiante`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_privados_inter` (`id_privados_inter`),
  ADD KEY `id_privados` (`id_privados`),
  ADD KEY `id_carrera` (`id_carrera`);

--
-- Indices de la tabla `asignacion_asesor`
--
ALTER TABLE `asignacion_asesor`
  ADD PRIMARY KEY (`id_asesor`,`id_alumno`,`fecha_asignacion`),
  ADD KEY `asignacion_asesor_ibfk_2` (`id_alumno`);

--
-- Indices de la tabla `asignacion_catedratico`
--
ALTER TABLE `asignacion_catedratico`
  ADD PRIMARY KEY (`id_asignacion_catedratico`),
  ADD KEY `id_catedratico` (`id_catedratico`),
  ADD KEY `id_curso` (`id_curso`);

--
-- Indices de la tabla `beneficios_alumno`
--
ALTER TABLE `beneficios_alumno`
  ADD PRIMARY KEY (`id_beneficios`),
  ADD KEY `id_alumno` (`id_alumno`);

--
-- Indices de la tabla `bitacora_new_data`
--
ALTER TABLE `bitacora_new_data`
  ADD PRIMARY KEY (`id_registro_nuevo`),
  ADD KEY `id_registro_viejo` (`id_registro_viejo`);

--
-- Indices de la tabla `bitacora_old_data`
--
ALTER TABLE `bitacora_old_data`
  ADD PRIMARY KEY (`id_registro_viejo`),
  ADD KEY `id_registro_nuevo` (`id_registro_nuevo`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carrera`),
  ADD KEY `id_director_carrera` (`id_director_carrera`),
  ADD KEY `id_facultad` (`id_facultad`);

--
-- Indices de la tabla `catedraticos`
--
ALTER TABLE `catedraticos`
  ADD PRIMARY KEY (`id_catedratico`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indices de la tabla `catedratico_postulado`
--
ALTER TABLE `catedratico_postulado`
  ADD PRIMARY KEY (`id_postulante`);

--
-- Indices de la tabla `correos`
--
ALTER TABLE `correos`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `correspondencia`
--
ALTER TABLE `correspondencia`
  ADD PRIMARY KEY (`fecha_reporte`,`id_correspondiente`);

--
-- Indices de la tabla `credenciales_sistema`
--
ALTER TABLE `credenciales_sistema`
  ADD PRIMARY KEY (`id_sistema`,`password_sistema`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `id_facultad` (`id_facultad`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id_address`);

--
-- Indices de la tabla `documentos_estudiante`
--
ALTER TABLE `documentos_estudiante`
  ADD PRIMARY KEY (`id_documentos`),
  ADD KEY `id_alumno` (`id_alumno`);

--
-- Indices de la tabla `empleado_laborando`
--
ALTER TABLE `empleado_laborando`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `id_de_rol` (`id_de_rol`);

--
-- Indices de la tabla `estados_de_alumnos`
--
ALTER TABLE `estados_de_alumnos`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `examenes_privados`
--
ALTER TABLE `examenes_privados`
  ADD PRIMARY KEY (`id_privados`);

--
-- Indices de la tabla `examenes_privados_intermedios`
--
ALTER TABLE `examenes_privados_intermedios`
  ADD PRIMARY KEY (`id_privados_inter`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`id_facultad`),
  ADD KEY `id_decano` (`id_decano`);

--
-- Indices de la tabla `firmas_catedraticos`
--
ALTER TABLE `firmas_catedraticos`
  ADD PRIMARY KEY (`id_asignacion_catedratico`,`fecha_firma`,`hora_firma`);

--
-- Indices de la tabla `graduacion_completada`
--
ALTER TABLE `graduacion_completada`
  ADD PRIMARY KEY (`id_graduacion`),
  ADD KEY `id_alumno` (`id_alumno`);

--
-- Indices de la tabla `proceso_graduacion`
--
ALTER TABLE `proceso_graduacion`
  ADD PRIMARY KEY (`id_proceso`),
  ADD KEY `id_asignacion` (`id_asignacion_estudiante`);

--
-- Indices de la tabla `roles_de_sistema`
--
ALTER TABLE `roles_de_sistema`
  ADD PRIMARY KEY (`id_de_rol`);

--
-- Indices de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD PRIMARY KEY (`numero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asesores`
--
ALTER TABLE `asesores`
  MODIFY `id_asesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT =1001;;
--
-- AUTO_INCREMENT de la tabla `asignacion_catedratico`
--
ALTER TABLE `asignacion_catedratico`
  MODIFY `id_asignacion_catedratico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;;
--
-- AUTO_INCREMENT de la tabla `catedraticos`
--
ALTER TABLE `catedraticos`
  MODIFY `id_catedratico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
--
-- AUTO_INCREMENT de la tabla `catedratico_postulado`
--
ALTER TABLE `catedratico_postulado`
  MODIFY `id_postulante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
--
-- AUTO_INCREMENT de la tabla `empleado_laborando`
--
ALTER TABLE `empleado_laborando`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15001;
  
ALTER TABLE `DIRECCIONES`
  MODIFY `id_address` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actualizaciones_de_estado`
--
ALTER TABLE `actualizaciones_de_estado`
  ADD CONSTRAINT `actualizaciones_de_estado_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estados_de_alumnos` (`id_estado`),
  ADD CONSTRAINT `actualizaciones_de_estado_ibfk_2` FOREIGN KEY (`id_alumno`) REFERENCES `estudiantes` (`id_alumno`);

--
-- Filtros para la tabla `asesores`
--
ALTER TABLE `asesores`
  ADD CONSTRAINT `asesores_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleado_laborando` (`id_empleado`);

--
-- Filtros para la tabla `asignaciones_estudiantes`
--
ALTER TABLE `asignaciones_estudiantes`
  ADD CONSTRAINT `asignaciones_estudiantes_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `estudiantes` (`id_alumno`),
  ADD CONSTRAINT `asignaciones_estudiantes_ibfk_2` FOREIGN KEY (`id_privados_inter`) REFERENCES `examenes_privados_intermedios` (`id_privados_inter`),
  ADD CONSTRAINT `asignaciones_estudiantes_ibfk_3` FOREIGN KEY (`id_privados`) REFERENCES `examenes_privados` (`id_privados`),
  ADD CONSTRAINT `asignaciones_estudiantes_ibfk_4` FOREIGN KEY (`id_carrera`) REFERENCES `carreras` (`id_carrera`);

--
-- Filtros para la tabla `asignacion_asesor`
--
ALTER TABLE `asignacion_asesor`
  ADD CONSTRAINT `asignacion_asesor_ibfk_1` FOREIGN KEY (`id_asesor`) REFERENCES `asesores` (`id_asesor`),
  ADD CONSTRAINT `asignacion_asesor_ibfk_2` FOREIGN KEY (`id_alumno`) REFERENCES `estudiantes` (`id_alumno`);

--
-- Filtros para la tabla `asignacion_catedratico`
--
ALTER TABLE `asignacion_catedratico`
  ADD CONSTRAINT `asignacion_catedratico_ibfk_1` FOREIGN KEY (`id_catedratico`) REFERENCES `catedraticos` (`id_catedratico`),
  ADD CONSTRAINT `asignacion_catedratico_ibfk_2` FOREIGN KEY (`id_curso`) REFERENCES `cursos` (`id_curso`);

--
-- Filtros para la tabla `beneficios_alumno`
--
ALTER TABLE `beneficios_alumno`
  ADD CONSTRAINT `beneficios_alumno_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `estudiantes` (`id_alumno`);

--
-- Filtros para la tabla `bitacora_new_data`
--
ALTER TABLE `bitacora_new_data`
  ADD CONSTRAINT `bitacora_new_data_ibfk_1` FOREIGN KEY (`id_registro_viejo`) REFERENCES `bitacora_old_data` (`id_registro_viejo`);

--
-- Filtros para la tabla `bitacora_old_data`
--
ALTER TABLE `bitacora_old_data`
  ADD CONSTRAINT `bitacora_old_data_ibfk_1` FOREIGN KEY (`id_registro_nuevo`) REFERENCES `bitacora_new_data` (`id_registro_nuevo`);

--
-- Filtros para la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD CONSTRAINT `carreras_ibfk_1` FOREIGN KEY (`id_director_carrera`) REFERENCES `empleado_laborando` (`id_empleado`),
  ADD CONSTRAINT `carreras_ibfk_2` FOREIGN KEY (`id_facultad`) REFERENCES `facultad` (`id_facultad`);

--
-- Filtros para la tabla `catedraticos`
--
ALTER TABLE `catedraticos`
  ADD CONSTRAINT `catedraticos_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleado_laborando` (`id_empleado`);

--
-- Filtros para la tabla `credenciales_sistema`
--
ALTER TABLE `credenciales_sistema`
  ADD CONSTRAINT `credenciales_sistema_ibfk_1` FOREIGN KEY (`id_sistema`) REFERENCES `empleado_laborando` (`id_empleado`);

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`id_facultad`) REFERENCES `facultad` (`id_facultad`);

--
-- Filtros para la tabla `documentos_estudiante`
--
ALTER TABLE `documentos_estudiante`
  ADD CONSTRAINT `documentos_estudiante_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `estudiantes` (`id_alumno`);

--
-- Filtros para la tabla `empleado_laborando`
--
ALTER TABLE `empleado_laborando`
  ADD CONSTRAINT `empleado_laborando_ibfk_1` FOREIGN KEY (`id_de_rol`) REFERENCES `roles_de_sistema` (`id_de_rol`);

--
-- Filtros para la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD CONSTRAINT `facultad_ibfk_1` FOREIGN KEY (`id_decano`) REFERENCES `empleado_laborando` (`id_empleado`);

--
-- Filtros para la tabla `firmas_catedraticos`
--
ALTER TABLE `firmas_catedraticos`
  ADD CONSTRAINT `firmas_catedraticos_ibfk_1` FOREIGN KEY (`id_asignacion_catedratico`) REFERENCES `asignacion_catedratico` (`id_asignacion_catedratico`);

--
-- Filtros para la tabla `graduacion_completada`
--
ALTER TABLE `graduacion_completada`
  ADD CONSTRAINT `graduacion_completada_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `estudiantes` (`id_alumno`);

--
-- Filtros para la tabla `proceso_graduacion`
--
ALTER TABLE `proceso_graduacion`
  ADD CONSTRAINT `proceso_graduacion_ibfk_1` FOREIGN KEY (`id_asignacion_estudiante`) REFERENCES `asignaciones_estudiantes` (`id_asignacion_estudiante`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
