<?php
include_once('app.php');
$app = new App();
$app->validateSesion();


$rutaDescarga = "/backupBD/gestionDeAulas.sql/";
$resultset = $app->getDBScript($rutaDescarga);
var_dump($resultset);

exec("mysqldump --user=www-data --password=usuario --host=127.0.0.1 gestionaulas > ".sys_get_temp_dir()."/file.sql");


echo "<a href=\".$rutaDescarga.\" class=\"btn btn-info\" role=\"button\">DESCARGAR</a>";


echo dirname(__FILE__);