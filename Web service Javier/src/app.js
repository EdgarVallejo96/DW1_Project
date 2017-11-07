const express = require('express');
const app = express();

const morgan = require('morgan');
const bodyParser = require('body-parser');

//configuracion
app.set('port', process.env.PORT || 3000);

//middlewares
app.use(morgan('dev'));
app.use(bodyParser.json());

// routes
require('./routes/studentsRoutes')(app);

app.listen(app.get('port'), () => {
	console.log('servidor iniciado en el puerto 3000');
}); 