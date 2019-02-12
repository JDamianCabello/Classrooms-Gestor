## Gestor de clases.

```
Copyright (c) 2019 Damián Cabello. All rights reserved.

This work is licensed under the terms of the MIT license.  
For a copy, see [here](https://opensource.org/licenses/MIT).
```
Gestor de aulas web creado en PHP con llamadas a una BD, necesita tener
un usuario en MySQL con permisos para la ejecucción de comandos.

> El usuario y contraseña de deben ir en el fichero ../core/dao.php
> Por defecto el usuario es www-data y la contraseña usuario.


**Version log**

 - 0
	 - Creación del primer modelo de la BD.
 - 0.01
	 - Creación del dao, app y el login (sin estilos).
 - 0.02
	 - Creación del lobby, una vez el login frente a la BD fue satisfactorio.
 - 0.1
	 - Creación del main navbar dentro del lobby.
 - 0.2
	 - Creación de métodos para listar todas las aulas
	 - Vista para mostrar los datos recibidos.
	 - Botón cerrar sesión con su correspondiente php.
 - 0.5
	 - Refactorización
		 - Se refactoriza todo para separar la vista del controlador.
		 - Se crean las carpetas assets, core, pages y view.
			 - Se crea en view la vista del navbar del lobby (mainnav.php)
			 - Se crea en view el register.php
			 - Se mueven dao y app a la carpeta core.
			 - img, css, js se mueven a assets.
 - 0.6
	 - Se añade la posibilidad de cambiar de idioma (por ahora español e inglés).
		 - Se vuelve a refactorizar para que los strings cambien todos según el idioma.
	 - Se crea métodos para añadir aulas al sistema.
	 - Se crea una vista (aún sin estilos) para los métodos.
	 - Se añade en la BD el campo admin para futuras mejoras.
	 - Se crea la vista registerForm.php
 - 0.65
	 - Se pueden crear usuarios en la BD. Funciona el formulario de registro.
	 - Refactorizados algunos estilos.
	 - Refactorizada la BD (ahora ya no hay login y user, son las dos una tabla).
	 - Traducida la cabecera de listar aulas.
	 - Eliminado `view/head_noboostrap.php` no era necesario.
	 - Implementado el campo admin de tipo TINYINT(1) en la tabla usuario.
	 - Creado el form para añadir aulas.
	 - Eliminado `anadirAulaBD.php` ahora se hace por POST hacia el mismo php.
	 - En el listado de todas las aulas se muestran solo 50 caracteres en la descripción.
	 - Añadido el archivo `pages/reservaAula.php`. 
	 - Añadido el archivo `view/reservaForm.php`. 
	 - Creada la tabla reserva en la BD.
	 - Creados los estilos en ./assets/css/baseStyle.css `.baseStyleForm select` y `.baseStyleForm select:focus`
	 - Posibilidad de reservar un aula.
	 - Añadido el campo todo el día para evitar que se tenga que reservar el mismo aula 6 veces en la misma fecha.
  -0.7  
    - Creado el archivo `pages/listReservas.php`.  
    - Recogido el tipo de usuario desde la DB (administrador o user) mediante una llamada a `usuario.admin`.  
    - Añadida distinta vista segun el rango del usuario.  
        - Si es un administrador muestra TODAS las reservas, si es un usuario normal, muestra SOLO SUS reservas.  
    - Refactorizados los estilos para hacer el footer dinámico.   
    - Añadido el navbar V2.
    - Añadido en la BD (tabla aula) el campo deshablitada.
    - Las aulas deshabilitadas se muestran en reservar en rojo y deshabilitadas, y en el listado de aulas se muestra el boton "habilitar".
    - Los botones "habilitar aula" y "deshabilitar aula"  son completamente funcionales.
    - El botón borrar funciona correctamente.
    - Agregada actualización de la base de datos.
   
   
   
   
   
 ## TODO  
   
  - [x] Hacer el registro funcional.  
  - [x] Hacer jerarquía de privilegios al sistema. Ya implementado en la base de datos.
    
 |ADMIN|USER  |  
 |--|--|  
 | true (1) |false (0)|  
   
  - [x] ¿Posible refactorización del navbar?  
  - [x] Migrar el proyecto a mi dominio para ver un ejemplo online.  
  - [ ] Posibilidad de buscar aulas.  
  - [x] Posibilidad de reservar aulas (en sus seis tramos)  
  - [ ] Editar aulas ya creadas.  
  - [x] Deshabilitar aulas del sistema.  
  - [x] Consultar reservas de aulas.  
  - [x] Crear un form de creación de aulas.  
  - [ ] Añadir el nombre del usuario al navbar  
  - [ ] Añadir pestaña settings.  
  - [ ] Comentar el codigo.  
  - [ ] Hacer un A cerca de "normal".  
  - [ ] Cambiar la imagen por un patrón.  
  - [ ] AL ACABAR: ¿Refactorizar?.
  - [x] Añadir firma.
  - [ ] El footer no es sticky.