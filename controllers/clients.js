var mongoose = require('mongoose');
var Client = mongoose.model('Client');

//GET return all clients
exports.findAll = function(req, res){
	Client.find(function(err, clients){
		if(err) return res.send(500, err.message);
		console.log('GET/clients');
		res.status(200).json(clients);
	});
};

//GET return a register with specific ID
exports.findById = function(req, res){
	Client.findById(req.params.id, function(err, client){
		if(err) return res.send(500, err.message);
		console.log('GET/clients' + req.params.id);
		res.status(200).jsonp(client);
	});
};

//POST insert new register
exports.add = function(req, res){
	console.log('POST');
	console.log(req.body);
	var client = new Client({
		name: req.body.name,
		email: req.body.email,
		genre: req.body.genre
	});
	client.save(function(err, client){
		if(err) return res.send(500, err.message);
		res.status(200).jsonp(client);
	});
};

//PUT Update a register already exists
exports.update = function(req, res){
	Client.findById(req.params.id, function(err, client){
		client.name = req.body.name;
		client.email = req.body.email;
		client.genre = req.body.genre;
		client.save(function(err){
			if(err) return res.send(500, err.message);
			res.status(200).jsonp(client);
		});
	});
};

//DELETE delete a register with specified id
exports.delete = function(req,res){
	Client.findById(req.params.id, function(err, client){
		client.remove(function(err){
			if(err) return res.send(500, err.message);
			res.json({message: 'Successfully deleted'});
		});
	});
};