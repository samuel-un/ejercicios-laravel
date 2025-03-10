<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Condicional</title>
</head>

<body>
	@if ($usuarioAutenticado)
	<h1>¡Bienvenido, usuario!</h1>
	@else
	<h1>Por favor, inicia sesión.</h1>
	@endif
</body>

</html>