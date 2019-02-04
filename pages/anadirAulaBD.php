<?php
include_once('../core/app.php');
$app = new App();
$app->validateSesion();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombreAula = $_POST['nombre'];
    $nomcorto = $_POST['shortname'];
    $posicion = $_POST['position'];
    $estic = $_POST['estic'];
    $pccount = $_POST['pccount'];

    if($estic == on)
        $estic = 1;
    else{
        $estic = 0;
        $pccount = null;
    }

    $resultset = $app->insertAula($nomcorto, $nombreAula,$posicion,$estic,$pccount);
}

    if(!$resultset == null)
        echo "<p>Aula añadida a la base de datos con éxito</p>";
    else
        echo "<p>Error al insertar el aula :".$app->getDao()->error."</p>";
