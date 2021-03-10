	INSERT INTO alumno
	(nombre, apellido, tipo_documento, nro_documento, fecha_nac, mail, carrera, anio, experiencia)
	VALUES
	('Eduardo', 'Zarate', 'DNI', 33445566, '1989-05-03','asdoipjn@asd.com', 'Ingenieria', 4, 'Mantenimiento - Trabaje en un hotel 5 estrellas'),
	('Javier', 'Peralta', 'DNI', 12312323, '1989-05-03','asdoipjn@asd.com', 'Informatica', 3, 'Mantenimiento de pcs'),
	('Hernan', 'Suarez', 'DNI', 12536345, '1989-05-03','asdoipjn@asd.com', 'Gastronomia', 2, 'Restoran de gran renombre'),
	('Ludmila', 'Messi', 'DNI', 32475789, '1989-05-03','asdoipjn@asd.com', 'Astronomia', 1, 'Mantenimiento de equipos'),
	('Carla', 'Caladril', 'DNI', 45646747, '1989-05-03','asdoipjn@asd.com', 'Informatica', 4, 'Administrativo'),
	('Esteban', 'Dominguez', 'DNI', 45645645, '1989-05-03','asdoipjn@asd.com', 'Abogacia', 5, 'Administrativo en estudio')
	;

    INSERT INTO empresa
	(nombre_empresa, cuit, provincia, localidad, direccion, telefono, mail)
	VALUES
	('Roverano', 2049584, 'Buenos Aires', 'Florencio Varela', 'Dardo Rocha 2323', '11-3030-3030', 'asdsa@3434.com'),
	('Masterprice', 20424, 'Mendoza', 'Florencio Varela', 'Dardo Rocha 2323', '11-3030-3030', 'asdsa@3434.com'),
	('DEvol', 2345626, 'Corrientes', 'Florencio Varela', 'Dardo Rocha 2323', '11-3030-3030', 'asdsa@3434.com'),
	('Enhanc', 23236, 'Buenos Aires', 'Florencio Varela', 'Dardo Rocha 2323', '11-3030-3030', 'asdsa@3434.com'),
	('AfterL', 34573, 'Buenos Aires', 'Florencio Varela', 'Dardo Rocha 2323', '11-3030-3030', 'asdsa@3434.com')
	;

    INSERT INTO oferta_laboral
	(empresa, cuit_empresa, descripcion_puesto, fecha_inicio, fecha_fin)
	VALUES
	('Roverano', 2049584, 'Maquinista para la logistica del depósito', '2021-10-3', '2021-10-10'),
	('Roverano', 2049584, 'Administrativo para la facturación', '2021-10-1', '2021-10-7'),
	('DEvol', 2345626, 'Maquinista para la logistica del depósito', '2021-2-3', '2021-2-10'),
	('AfterL', 34573, 'Técnico informático para el soporte de equipo', '2021-3-3', '2021-3-10'),
	('Enhanc', 23236, 'Técnico informático para el soporte de equipo', '2021-3-3', '2021-3-10')
	;