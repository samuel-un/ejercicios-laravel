<!-- resources/views/posts/index.blade.php -->
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de Posts</title>
</head>

<body>
	<h1>Lista de Posts</h1>
	<ul>
		@foreach ($posts as $post)
		<li>
			{{ $post->titulo }}
			<a href="{{ route('posts.edit', $post->id) }}">Editar</a>
			<form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
				@csrf
				@method('DELETE')
				<button type="submit">Eliminar</button>
			</form>
		</li>

		@endforeach
	</ul>
</body>

</html>