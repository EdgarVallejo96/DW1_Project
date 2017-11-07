const student = require('../models/students.js');

module.exports = function (app){
	app.get('/students', (req, res) => {
		student.getStudents((err,data) => {
			res.status(200).json(data);
		});
	});

	app.post('/students', (req,res) => {
		const studentData = {
			id: null,
			nombres: req.body.nombres,
      apellidos: req.body.apellidos,
      carnet: req.body.carnet,
      email: req.body.email,
      direccion: req.body.direccion,
      created_at: null,
      updated_at: null
		};

		student.insertStudent(studentData, (err, data) => {
			if (data && data.insertId) {
				res.status(200).json({
					success: true,
					msg: 'Alumno insertado correctamente',
					data: data
				});
			}else{
				res.status(500).json({
					success: false,
					msg: 'Error'
				});
			}
		});
	});

} 