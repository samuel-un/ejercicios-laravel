<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Registro</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
	<form id="registroForm" method="POST" action="{{ route('register') }}">
		@csrf
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required><br><br>

		<label for="correo">Correo:</label>
		<input type="email" id="correo" name="correo" required><br><br>

		<label for="telefono">Teléfono:</label>
		<input type="text" id="telefono" name="telefono" required><br><br>

		<label for="contraseña">Contraseña:</label>
		<input type="password" id="contraseña" name="contraseña" required><br><br>

		<label for="confirmarContraseña">Confirmación de Contraseña:</label>
		<input type="password" id="confirmarContraseña" name="confirmarContraseña" required><br><br>

		<label for="edad">Edad:</label>
		<input type="number" id="edad" name="edad" required><br><br>

		<label for="direccion">Dirección:</label>
		<input type="text" id="direccion" name="direccion" required><br><br>

		<label for="ciudad">Ciudad:</label>
		<input type="text" id="ciudad" name="ciudad" required><br><br>

		<label for="pais">País:</label>
		<input type="text" id="pais" name="pais" required><br><br>

		<label for="codigo_postal">Código Postal:</label>
		<input type="text" id="codigo_postal" name="codigo_postal" required><br><br>

		<button type="submit">Registrar</button>
	</form>

	<script src="{{ asset('js/validacion.js') }}"></script>
</body>

</html>