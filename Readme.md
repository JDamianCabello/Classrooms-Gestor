
## Gestor de clases.

```
Copyright (c) 2019 Damián Cabello. All rights reserved.

This work is licensed under the terms of the MIT license.  
For a copy, see [here](https://opensource.org/licenses/MIT).
```
Gestor de aulas web creado en PHP con llamadas a una BD, necesita tener
un usuario en MySQL con permisos para la ejecucción de comandos.

> El usuario y contraseña de deben ir en el fichero ../core/dao.php


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


	

## TODO

 - [ ] Hacer el registro funcional.
 - [ ] Hacer jerarquía de privilegios al sistema.
 - [ ] ¿Posible refactorización del navbar?
 - [ ] Migrar el proyecto a mi dominio para ver un ejemplo online.
 - [ ] Posibilidad de buscar aulas.
 - [ ] Posibilidad de reservar aulas (en sus seis tramos)
 - [ ] Editar aulas ya creadas.
 - [ ] Deshabilitar aulas del sistema.
 - [ ] Consultar reservas de aulas.
