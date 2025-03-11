<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Actualizar Post</title>
</head>

<body>
	<form action="{{ route('posts.update', $post->id) }}" method="POST">
		@csrf
		@method('PUT')
		<input type="text" name="titulo" value="{{ $post->titulo }}" required>
		<textarea name="contenido" required>{{ $post->contenido }}</textarea>
		<button type="submit">Actualizar Post</button>
	</form>
</body>

</html>