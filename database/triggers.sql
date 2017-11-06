ALTER TABLE asesores
   AUTO_INCREMENT = 1001;

ALTER TABLE catedraticos
   AUTO_INCREMENT = 1001;

ALTER TABLE catedratico_postulado
   AUTO_INCREMENT = 1001;

ALTER TABLE empleado_laborando
   AUTO_INCREMENT = 1001;

ALTER TABLE asignacion_catedratico
   AUTO_INCREMENT = 1001;



DROP TRIGGER IF EXISTS registrar_asesor_o_catedratico;

CREATE TRIGGER registrar_asesor_o_catedratico
   BEFORE INSERT
   ON empleado_laborando
   FOR EACH ROW
BEGIN
   IF new.es_asesor IS TRUE
   THEN
      INSERT INTO `asesores`(`id_asesor`, `id_empleado`, `num_asesorados`)
           VALUES (NULL, new.id_empleado, '0');
   END IF;

   IF new.es_catedratico IS TRUE
   THEN
      INSERT INTO `catedraticos`(`id_catedratico`, `id_empleado`)
           VALUES (NULL, 'new.es_catedratico');
   END IF;
END;


SELECT * FROM empleado_laborando;

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
     VALUES (NULL,
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '',
             '1',
             '')