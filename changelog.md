# Changelog  
All notable changes to this project will be documented in this file.  
  
This project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html) to format this changelog.

## [0.9.0] - 2019-02-15

### Added
- Añadida la vista con distintos permisos en listar aulas.
- Añadido el campo para anular reserva en listar reservas.
- Creado el fichero `view/openformListaulas.php`.
- Creada la tabla log.


## [0.8.1] - 2019-02-13

### Added
- Creado el fichero `versionLog.md`.

### Removed
- Contenido de `readme.md` .

## [0.8.0] - 2019-02-13
### Changed
- Añadido un nuevo campo `gestionaulas.nreserva` en la base de datos.

### Added
- Botón de borrar reserva.
- Gestión de admin en listar reservas.
- Creado el fichero `versionLog.md`.

### Removed
- Contenido de `view/acercaDe.php` .

### Fixed
- Mensaje al administrador al borrar la reserva no mostraba el nombre del usuario, sino del aula, esto se ha arreglado.


## [0.7.0] - 2019-02-11 
### Added  
- Creado el archivo `pages/listReservas.php`. 
- Añadido el navbar V2.
- Añadido en la base de datos el campo aula.deshablitada.
 - Agregada actualización de la base de datos.
- Los botones "habilitar aula" y "deshabilitar aula"  son completamente funcionales.
### Changed  
- Refactorizados los estilos para hacer el footer dinámico.   
- Añadida distinta vista segun el rango del usuario, si es un **administrador** muestra **TODAS las reservas**, si es un **usuario** normal, muestra **SOLO SUS reservas**.
- Las aulas deshabilitadas se muestran en la vista de reservar en rojo y deshabilitadas, y en el listado de aulas se muestra el boton "habilitar".

### Fixed   
- Recogido el tipo de usuario desde la base de datos (administrador o usuario) mediante una llamada a `usuario.admin`.  
- El botón borrar funciona correctamente.
### Deprecated
- El fichero `readme.md` solo va a contener información del proyecto, se creará un fichero de versiones.
## [0.6.0] - 2019-05-02 
### Added  
- Traducida la cabecera de listar aulas. 
- Implementado el campo admin de tipo TINYINT(1) en la tabla usuario.  
- Creado el form para añadir aulas. 
- Añadido el archivo `pages/reservaAula.php`.   
- Añadido el archivo `view/reservaForm.php`. 
- Creada la tabla reserva en la base de datos.  
- Posibilidad de reservar un aula.  
### Changed  
- Refactorizados algunos estilos.  
- Creados los estilos en  `.baseStyleForm select` y `.baseStyleForm select:focus` en `baseStyle.css`.
### Removed  
- Refactorizada la base de datos, ya no existen las tablas `login` y `user` ahora solo existe la tabla `user` con más campos.
- Eliminado `view/head_noboostrap.php` con  las ultimas refactorizaciones ya no era necesario. 
- Eliminado `anadirAulaBD.php` ahora se hace por POST hacia el mismo php.  
### Fixed   
- Se pueden crear usuarios en la base de datos ya funciona el formulario de registro. 
- En el listado de todas las aulas se muestran solo 50 caracteres en la descripción. 
- Añadido el campo todo el día para evitar que se tenga que reservar el mismo aula 6 veces en la misma fecha.  

## [0.2.0] - 2019-01-29 
### Added  
- Se añade la posibilidad de cambiar de idioma (por ahora español e inglés).  
- Se crea métodos para añadir aulas al sistema. 
- Se crea una vista (aún sin estilos) para los métodos.  
- Se añade en la base de datos el campo `admin` a la tabla `usuario` para futuras mejoras.
- Se crea la vista del formulario de registro en `registerForm.php`.  
### Changed  
- Se vuelve a refactorizar para que los strings cambien todos según el idioma.


## [0.1.1] - 2019-01-27 
### Added  
- Se crean las carpetas assets, core, pages y view. 
- Se crea la vista del navbar en el fichero `view/mainnav.php`.
- Se crea la vista del registro en el fichero `view/register.php`.
### Changed  
- Refactorización : se refactoriza todo para separar la vista del controlador.  
         
- Se mueven `dao.php` y `app.php`a la carpeta `core`.  
 - Las carpetas`img`, `css`y `js` se mueven a la capeta `assets`.  
 
## [0.1.0] - 2019-01-26 
### Added  
   - Creación de métodos para **listar todas las aulas**.  
   - Vista para mostrar los datos recibidos.  
   - Botón cerrar sesión con su correspondiente php.  

## [0.0.2] - 2019-01-26 
### Added  
- Creación del fichero `Lobby.php`.
- Creación del main navbar dentro del lobby. 
### Fixed  
- Ahora ya se puede loguear al sistema mediante un formulario almacenado en la base de datos.

## [0.0.1] - 2019-01-25 


### Added  
- Creación del primer modelo de la base de datos, posiblemente cambie.  
- Creación del fichero `dao.php`.
- Creación del fichero `app.php`.
- Creación del fichero `login.php`.

