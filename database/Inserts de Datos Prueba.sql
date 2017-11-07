/*
INSERT INTO `roles_de_sistema` (`id_de_rol`, `nombre_rol`) VALUES
(0, 'Lectura'),
(1, 'Mantenimiento'),
(2, 'Catedrático');
				
select * from roles_de_sistema; */


call InsertarEmpleadoLaborando(20154743, 'Juan', 'Pérez', 4678343, 3426345,
19690516, 'Gerente de mercadeo', 543464, 'Colegio de Ingenieros', 'Casado', 'Chapín', true, true,
'juanperez@gmail.com', 'perez6447@unis.edu.gt', 'Km 18.5 Universidad del Istmo', 46362718, 52473865);



/* ----------QUERIES PARA PROBAR LOS INSERTS. -----------*/
select es_asesor from Empleado_Laborando order by id_empleado DESC limit 1;
select * from roles_de_sistema;
select * from empleado_laborando;
select * from asesores;
select * from catedraticos;
select * from telefonos;
select * from direcciones;
select * from correos;
select * from credenciales_sistema;

INSERT INTO `credenciales_sistema` (`id_sistema`, `password_sistema`) VALUES ('1001', 'patito');
select * from credenciales_sistema;


