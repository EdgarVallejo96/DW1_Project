/*
INSERT INTO `roles_de_sistema` (`id_de_rol`, `nombre_rol`) VALUES
(0, 'Lectura'),
(1, 'Mantenimiento'),
(2, 'Catedrático');
				
select * from roles_de_sistema; */


call InsertarEmpleadoLaborando(20154743, 'Juan', 'Pérez', 4678343, 3426345,
19690516, 'Gerente de mercadeo', 543464, 'Colegio de Ingenieros', 'Casado', 'Chapín', true, true,
'juanperez@gmail.com', 'perez6447@unis.edu.gt', 'Km 18.5 Universidad del Istmo', 46362718, 52473865);

call InsertarCatedraticoPostulado('Catedratico', 'Postulado', true, true, 'Catedrático', '0',
false, false, false, 'catedraticopostulado@gmail.com', 'postulado457965@unis.edu.gt',
'Km 18.5 Universidad del Istmo', 46362118, 52473869); 









/* ----------QUERIES PARA PROBAR LOS INSERTS. -----------*/
select es_asesor from Empleado_Laborando order by id_empleado DESC limit 1;
select * from roles_de_sistema;
select * from empleado_laborando;
select * from asesores;
select * from catedraticos;
select * from telefonos;
select * from direcciones;
select * from correos;
select * from catedratico_postulado;
select * from credenciales_sistema;
select * from users;

INSERT INTO `credenciales_sistema` (`id_sistema`, `password_sistema`) VALUES ('1002', 'patito');
select * from credenciales_sistema;

rollback;
commit;

