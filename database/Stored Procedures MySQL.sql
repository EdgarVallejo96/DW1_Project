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