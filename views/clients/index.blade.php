<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Clientes</h1>
			@foreach($clients as $client)
				<div class="panel panel-default">
					<div class="panel-body">
						<a href="/clients/{{$client -> _id}}">{{$client -> name}}</a>
						<p>{{$client -> _id}}</p>
					</div>
				</div>
			@endforeach
	</div>
</body>
</html>