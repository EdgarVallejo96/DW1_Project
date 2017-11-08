/*
CREATE PROCEDURE AsignarAsesor(idasesor int(11), idalumno int(11))
BEGIN
   INSERT INTO asignacion_asesor(id_asesor,
                                 id_alumno,
                                 fecha_asignacion,
                                 asignacion_vigente)
        VALUES (idasesor,
                idalumno,
                now(),
                TRUE);
END;

CALL AsignarAsesor('550500', '5536');

SELECT * FROM asignacion_asesor;

*/
DROP PROCEDURE if exists InsertarDatosGenerales;
CREATE PROCEDURE InsertarDatosGenerales(
	id_persona				int(11),
	emailpersonal			varchar(45),
    emailinstitucional		varchar(45),
    direccion				varchar(140),
    telefonocelular			int(11),
    telefonocasa			int(11))
   BEGIN
   	INSERT INTO correos (`correo`, `tipo_correo`, `id_duenio_correo`) VALUES (emailpersonal, 'Personal', id_persona);
	INSERT INTO correos (`correo`, `tipo_correo`, `id_duenio_correo`) VALUES (emailinstitucional, 'Institucional', id_persona);
	INSERT INTO direcciones (`id_address`, `address`, `id_duenio_direccion`) VALUES (null, direccion, id_persona);
	INSERT INTO telefonos (`numero`, `tipo_telefono`, `id_duenio_tel`) VALUES (telefonocelular, 'Celular', id_persona);
	INSERT INTO telefonos (`numero`, `tipo_telefono`, `id_duenio_tel`) VALUES (telefonocasa, 'Casa', id_persona);
END;
	
DROP PROCEDURE if exists InsertarEmpleadoLaborando;
CREATE PROCEDURE InsertarEmpleadoLaborando(
   carne_p                  int(11),
   nombres_p                varchar(50),
   apellidos_p              varchar(50),
   dpi_p                    int(13),
   nit_p                    int(13),
   fecha_nacimiento_p       date,
   profesion_p              varchar(50),
   numero_colegiado_p       int(15),
   colegio_profesional_p    varchar(50),
   estado_civil_p           varchar(30),
   nacionalidad_p           varchar(40),
   es_asesor_p              tinyint(1),
   es_catedratico_p         tinyint(1),
   emailpersonal			varchar(45),
   emailinstitucional		varchar(45),
   direccion				varchar(140),
   telefonocelular			int(11),
   telefonocasa				int(11))
BEGIN

	DECLARE validacion_cat tinyint(1);
	DECLARE validacion_ase tinyint(1);
	DECLARE id_employee int(11);
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
   BEGIN
      ROLLBACK;
	  SIGNAL
   		SQLSTATE '23000'
   		SET MESSAGE_TEXT = 'Hubo una excepción general. No se ingresó ninguno de los datos.';
		END;
	
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
   colegio_profesional_p,estado_civil_p,nacionalidad_p,es_asesor_p, 1, es_catedratico_p, 0);
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
END;

DROP PROCEDURE if exists InsertarCatedraticoPostulado;
CREATE PROCEDURE InsertarCatedraticoPostulado(nombres_p varchar(50), apellidos_p varchar(50),
expediente_completo_p tinyint(1), entrevista_realizada_p tinyint(1), puesto_aspirado_p varchar(20),
acta_aprobacion_p int(11), expediente_en_VCR_p tinyint(1), entrevista_vcr_p tinyint(1), aprobado_vcr_p tinyint(1),
emailpersonal varchar(45), emailinstitucional varchar(45), direccion varchar(140), telefonocelular int(11),
telefonocasa int(11))
BEGIN
	DECLARE id_employee int(11);
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
   BEGIN
      ROLLBACK;
	  SIGNAL
   		SQLSTATE '23000'
   		SET MESSAGE_TEXT = 'Hubo una excepción general. No se ingresó ninguno de los datos.';
		END;
	
  INSERT INTO `catedratico_postulado` (`id_postulante`, `nombres`, `apellidos`,
   `expediente_completo`, `entrevista_realizada`, `puesto_aspirado`, `acta_aprobacion`,
    `expediente_en_VCR`, `entrevista_vcr`, `aprobado_vcr`)
	 VALUES (NULL,nombres_p, apellidos_p, expediente_completo_p, entrevista_realizada_p,
	 puesto_aspirado_p, acta_aprobacion_p, expediente_en_VCR_p, entrevista_vcr_p, aprobado_vcr_p);
	 
   select id_postulante from catedratico_postulado order by id_postulante DESC limit 1 into id_employee;
   call InsertarDatosGenerales(id_employee, emailpersonal, emailinstitucional,
   direccion, telefonocelular, telefonocasa);
END;


