<?php
include_once('../core/app.php');
$app = new App();
$app->validateSesion();
App::print_head();
App::print_hamburguer();
App::print_createClassForm();
if(!empty($_POST['addclass'])){
    $nombre = str_replace(' ', '', $_POST['name']);
    $descripcion = $_POST['description'];
    $posicion = $_POST['position'];
    $_POST["estic"] = isset($_POST["estic"]) ? $_POST["estic"] : 0;
    $estic = $_POST['estic'];
    $pccount = $_POST['pccount'];

    if($estic == 0)
        $pccount = null;
    elseif ($pccount == null)
        $pccount = 0;

    $resultset = $app->insertAula($nombre, $descripcion,$posicion,$estic,$pccount);

    if(!$resultset == null)
        echo "<div class=\"alert alert-success systemMsg\" role=\"alert\"><p>Aula añadida a la base de datos con éxito</p></div>";
    else
        echo "<div class=\"alert alert-danger systemMsg\" role=\"alert\"><p>Error al insertar el aula :".$app->getDao()->error."</p></div>";
}