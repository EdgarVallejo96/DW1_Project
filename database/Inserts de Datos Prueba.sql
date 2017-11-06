INSERT INTO roles_de_sistema (id_de_rol, nombre_rol)
        VALUES (56765,
                'loco');
				
select * from roles_de_sistema;



call InsertarEmpleadoLaborando(NULL, 234743, 'Pepito', 'Pérez', 4678343, 3426345,
19690516, 'Bombero', 5434, 'Plomeros', 'Casado', 'Chapín', true, true, true, 0,
'pepitoperez@gmail.com', 'perez6547@unis.edu.gt', 'Km 18.5 Universidad del Istmo', 45362718, 56473865);



/* ----------QUERIES PARA PROBAR LOS INSERTS. -----------*/
select es_asesor from Empleado_Laborando order by id_empleado DESC limit 1;
select * from empleado_laborando;
select * from asesores;
select * from catedraticos;
select * from telefonos;
select * from direcciones;
select * from correos;
select * from credenciales_sistema;

