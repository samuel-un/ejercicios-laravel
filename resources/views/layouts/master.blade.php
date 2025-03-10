<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
</head>

<body>
	<header>
		<h1>Mi página Web</h1>
	</header>
	<main>
		@yield('content')
	</main>
	<footer>
		<p>&copy; {{ date('Y') }} Mi Sitio Web. Samuel U.N</p>
	</footer>
</body>

</html>