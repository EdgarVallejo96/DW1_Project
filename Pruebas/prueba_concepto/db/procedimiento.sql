drop procedure if exists insertar_datos;
create procedure insertar_datos (in p_id_estudiante int(11), in p_nombre varchar(50), in p_edad int(11))
begin
	insert into estudiantes (id_estudiante, nombre, edad)
	values (p_id_estudiante, p_nombre, p_edad);
	commit;
end;

call insertar_datos(1, "nom1", 1);

select * from estudiantes;