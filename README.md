## Comprobación de Rutas

Sigue los siguientes pasos para asegurarte de que todas las rutas de tu aplicación funcionan correctamente.

### 1. Levantar el Servidor

Para iniciar el servidor, ejecuta el siguiente comando:

```bash
php artisan serve
```

### 2. Comprobar Rutas

A continuación, abre tu navegador o Postman y prueba cada una de las siguientes URLs.

#### Página de Inicio

-   **URL**: `http://127.0.0.1:8000`
-   **Verificación**: Asegúrate de que se cargue correctamente la vista `pages.home`.

#### Ruta de Saludo sin Parámetro

-   **URL**: `http://127.0.0.1:8000/saludo`
-   **Verificación**: Debería mostrarse la vista con el nombre **"Miguel"**.

#### Ruta Condicional

-   **URL**: `http://127.0.0.1:8000/condicional`
-   **Verificación**: El mensaje que se muestra debe depender del valor de la variable `$usuarioAutenticado`.

#### Ruta de Productos

-   **URL**: `http://127.0.0.1:8000/productos`
-   **Verificación**: Se debe mostrar una lista de productos junto con sus precios.

### 3. Rutas de Usuario

#### Crear Usuario

-   **URL**: `http://127.0.0.1:8000/usuarios/create`
-   **Verificación**: Abre el formulario de creación de usuario y prueba la funcionalidad.

#### Saludo de Usuario

-   **URL**: `http://127.0.0.1:8000/saludo/{nombre}`
-   **Verificación**: Reemplaza `{nombre}` por un nombre de usuario (por ejemplo, `Miguel`). Debe mostrar el saludo correspondiente.

### 4. Rutas de Posts (CRUD)

#### Listado de Posts

-   **URL**: `http://127.0.0.1:8000/posts`
-   **Verificación**: Asegúrate de que se muestren todos los posts existentes.

#### Crear Post

-   **URL**: `http://127.0.0.1:8000/posts/create`
-   **Verificación**: Completa el formulario de creación de post y envíalo. Luego, comprueba en el listado de `http://127.0.0.1:8000/posts` que el nuevo post haya sido agregado.

#### Editar Post

-   **URL**: `http://127.0.0.1:8000/posts/{id}/edit`
-   **Verificación**: Reemplaza `{id}` con el ID de un post existente, edita los datos y guarda los cambios. Verifica que se haya actualizado correctamente en el listado de posts.

#### Eliminar Post

-   **URL**: `http://127.0.0.1:8000/posts/{id}`
-   **Verificación**: En la vista de listado, verifica que haya un formulario o botón para enviar una solicitud DELETE a esta URL. Usa Postman o el botón de formulario para eliminar un post y asegúrate de que ya no aparezca en el listado.

#### Obtener Posts de un Usuario

-   **URL**: `http://127.0.0.1:8000/users/{userId}/posts`
-   **Verificación**: Reemplaza `{userId}` con el ID de un usuario existente. Verifica que solo se muestren los posts asociados a ese usuario.

### 5. Rutas de Registro de Usuario

#### Página de Registro

-   **URL**: `http://127.0.0.1:8000/registro`
-   **Verificación**: Abre el formulario de registro y asegúrate de que todos los campos estén presentes. El formulario debe incluir validaciones de JavaScript que muestren errores en caso de que los datos sean incorrectos.
