<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Productos</title>
</head>

<body>
	<h1>Lista de Productos</h1>
	<table border="1">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Precio</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($productos as $producto)
			<tr>
				<td>{{ $producto['nombre'] }}</td>
				<td>${{ $producto['precio'] }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>

</html>