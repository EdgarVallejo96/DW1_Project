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


DROP PROCEDURE if exists InsertarEmpleadoLaborando;
CREATE PROCEDURE InsertarEmpleadoLaborando(
   id_empleado_p            int(11),
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
   activo_p                 tinyint(1),
   es_catedratico_p         tinyint(1),
   id_de_rol_p              int(11))
BEGIN
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
   select es_asesor from Empleado_Laborando order by id_empleado ASC limit 1 into validacion_ase;
   select es_catedratico from Empleado_Laborando order by id_empleado ASC limit 1 into validacion_cat;
   select id_empleado from Empleado_Laborando order by id_empleado ASC limit 1 into id_employee;
   if validacion_ase is true 
   THEN
   	select * from empleado_laborando;
      INSERT INTO `asesores`(`id_asesor`, `id_empleado`, `num_asesorados`)
           VALUES (NULL, id_employee, '0');
   END IF;
	if validacion_cat is true 
   THEN
      INSERT INTO `catedraticos`(`id_catedratico`, `id_empleado`)
           VALUES (NULL, id_employee);
   END IF;
   
END;

 select es_asesor from Empleado_Laborando order by id_empleado DESC limit 1;

call InsertarEmpleadoLaborando(NULL, 23475543, 'Juan Diego', 'Chamorro', 46783783943, 342356345,
19990516, 'Bombero', 5434, 'Plomeros', 'Casado', 'Chapín', 1, 1, 1, 0);
select * from empleado_laborando;
select * from asesores;
select * from catedraticos;