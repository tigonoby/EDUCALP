# EDUCALP

Prototipo de **red social institucional/educativa** desarrollado en PHP y MySQL (2019). Plantea un espacio donde estudiantes publican, comparten archivos, comentan, se buscan entre sí y conversan, con una estética basada en Bootstrap.

> Estado: proyecto académico en desarrollo. Parte del código es funcional (registro, inicio de sesión, búsqueda, modelo de datos) y parte son maquetas visuales con datos de ejemplo (ver la tabla de módulos).

## Tecnologías

- **PHP** (sin framework) con la extensión `mysqli`
- **MySQL / MariaDB** (el volcado `educalp.sql` fue generado con phpMyAdmin 4.9.2)
- **HTML, CSS y JavaScript** con **Bootstrap 4.1.3**, **jQuery** y **Font Awesome 4.7** (cargados por CDN)

## Módulos

| Archivo | Qué hace realmente |
|---|---|
| `registro.php` + `conect.php` | Formulario de registro (documento, nombre, apellido y contraseña con confirmación). Inserta el usuario en la tabla `usuarios`; la contraseña se guarda con MD5. |
| `validar.php` | Inicio de sesión: recibe `documento` y `clave_us`, consulta `usuarios`, guarda `id`, `nombre` y `apellido` en la sesión y redirige a `muro.php`. |
| `cerrar_sesion.php`, `session.php` | Cierre de sesión y verificación de sesión activa. |
| `buscar.php` | Búsqueda de usuarios por nombre (`LIKE`) sobre la tabla `usuarios`. |
| `muro.php`, `muro1.php`, `muro4.php`, `muro6.php` | Muro/feed con formulario para publicar, subir archivos o imágenes, visibilidad (público, amigos, privado), comentar, compartir y "A punto" (reacción). Son iteraciones de la interfaz con contenido de ejemplo. |
| `perfil.php`, `nada.php`, `configperfil.php` | Vistas de perfil (estadísticas y datos de muestra) y formulario de edición de nombre y apellido. |
| `chat.php`, `chat.css` | Interfaz de chat con lista de conversaciones y mensajes de ejemplo (maqueta estática, sin consulta a base de datos). |
| `birthday.php` | Tarjeta de felicitación de cumpleaños (maqueta estática). |
| `desarrollo.php`, `zona.php`, `soporte.php` | Zona creativa (Mi Perfil, Amigos, Planeación, Sugerencias) y formulario de soporte. |
| `header.php`, `header2.php` | Barras de navegación reutilizables. |
| `*.css`, `main.js` | Hojas de estilo del proyecto y scripts del formulario de acceso. |

## Modelo de datos (`educalp.sql`)

Base de datos `educalp` con 13 tablas:

- `usuarios`: documento, nombre, apellido y clave.
- `post`, `typepost`: publicaciones y su tipo (con soporte para compartir otra publicación).
- `comentarios`: comentarios por publicación.
- `like`, `typelike`: reacciones por publicación.
- `amigos`, `solicitudes`: relaciones de amistad y solicitudes pendientes.
- `sala`, `tiposala`, `salausuario`: salas de chat y sus participantes.
- `mensaje_chat`, `tipomensaje`: mensajes del chat y su tipo.

Las relaciones se definen con llaves foráneas (`ALTER TABLE ... ADD CONSTRAINT`) al final del script.

## Cómo ejecutarlo (entorno local)

Los enlaces del código apuntan a `http://localhost/educALP2/...`, por lo que está pensado para un servidor local tipo **XAMPP/WAMP** con Apache, PHP y MySQL:

1. Copia el contenido del repositorio a `htdocs/educALP2/` (o a la carpeta equivalente de tu servidor).
2. Inicia Apache y MySQL, abre phpMyAdmin e importa `educalp.sql` (crea la base `educalp`).
3. Edita `conexion.php` con los datos de conexión de tu entorno.
4. Abre `http://localhost/educALP2/registro.php` para crear un usuario. El inicio de sesión lo procesa `validar.php`.

Limitaciones conocidas del repositorio: no incluye una página de inicio de sesión propia (`index.php` solo redirige a `../`), varios archivos de interfaz son maquetas, y `configperfil.php` referencia archivos (`config/db.php`, `footer.php`, `head.php`) que no están en el repositorio.

## Seguridad y mejoras pendientes

Este repositorio es público y el código es un prototipo; antes de cualquier uso real conviene corregir lo siguiente:

- **Configuración fuera del código:** `conexion.php` define los datos de conexión a la base de datos directamente en el archivo. Se recomienda moverlos a **variables de entorno** (por ejemplo con `getenv()`) o a un archivo de configuración fuera del repositorio y listado en `.gitignore`, y rotar cualquier credencial que haya estado publicada.
- **Contraseñas:** se almacenan con MD5 (`conect.php`, `validar.php`). Usar `password_hash()` y `password_verify()`.
- **Inyección SQL:** las consultas de `conect.php`, `validar.php`, `buscar.php` y `configperfil.php` concatenan datos del usuario. Migrar a sentencias preparadas (`mysqli_prepare`).
- **Datos de ejemplo:** `educalp.sql` incluye un registro de usuario con datos personales y el hash de su clave; en un repositorio público no deberían publicarse datos reales.

## Estructura

```
educalp.sql        Esquema y datos iniciales de la base de datos
conexion.php       Conexión mysqli
registro.php       Registro de usuarios
validar.php        Inicio de sesión
muro*.php          Muro / publicaciones
perfil.php         Perfil de usuario
buscar.php         Búsqueda de usuarios
chat.php           Interfaz de chat
*.css, main.js     Estilos y scripts
```

## Autor

Santiago Gómez Cano ([@tigonoby](https://github.com/tigonoby))
