<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Creación de Post</title>
</head>

<body>
	<form action="{{ route('posts.store') }}" method="POST">
		@csrf
		<input type="text" name="titulo" placeholder="Título del post" required>
		<textarea name="contenido" placeholder="Contenido del post" required></textarea>
		<button type="submit">Crear Post</button>
	</form>
</body>

</html>