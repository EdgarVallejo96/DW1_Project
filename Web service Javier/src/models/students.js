const mysql = require('mysql');

connection = mysql.createConnection({
	host: 'localhost',
	user: 'root',
	password: '',
	database: 'db_final'
});

let studentModel = {};

studentModel.getStudents = (callback) => {
	if(connection){
		connection.query(
			'SELECT * FROM alumno ORDER BY id',
			(err, rows) => {
				if(err){
					throw err;
				}else{
					callback(null, rows);
				}
			}
		)
	}
};

studentModel.insertStudent = (studentData, callback) => {
	if(connection){
		connection.query('INSERT INTO alumno SET ?', studentData,
			(err, result) => {
				if(err){
					throw err;
				}else{
					callback(null, {'insertId': result.insertId})
				}
			}
		)
	}
};

module.exports = studentModel;