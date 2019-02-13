## Gestor de clases.  
  
```  
Copyright (c) 2019 Damián Cabello. All rights reserved.  
  
This work is licensed under the terms of the MIT license. For a copy, see [here](https://opensource.org/licenses/MIT).  
```  
Gestor de aulas web creado en PHP con llamadas a una BD, necesita tener  
un usuario en MySQL con permisos para la ejecucción de comandos.  
  
> El usuario y contraseña de deben ir en el fichero ../core/dao.php  
> Por defecto el usuario es www-data y la contraseña usuario.  
  
  



   
       
  
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
 - [x] -Hacer el changelog como dios manda.