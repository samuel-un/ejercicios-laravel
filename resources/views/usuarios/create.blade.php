<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crear Usuario</title>
</head>

<body>
	<h1>Formulario de creacion de usuario</h1>

	<form action="/usuarios" method="post">
		@csrf
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" id="nombre" require>
		<br>

		<label for="email">Email:</label>
		<input type="email" name="email" id="email" require>
		<br>

		<button type="submit">Crear usuarios</button>

	</form>
</body>

</html>