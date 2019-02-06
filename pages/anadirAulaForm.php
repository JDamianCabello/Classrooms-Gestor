<?php
include_once('../core/app.php');
$app = new App();
$app->validateSesion();
App::print_head();
App::printNav();


if(!empty($_POST['addclass'])){
    $descripcion = $_POST['description'];
    $nombre = $_POST['name'];
    $posicion = $_POST['position'];
    $estic = $_POST['estic'];
    $pccount = $_POST['pccount'];

    if($estic == on)
        $estic = 1;
    else{
        $estic = 0;
        $pccount = null;
    }

    $resultset = $app->insertAula($nombre, $descripcion,$posicion,$estic,$pccount);
    var_dump($resultset);


    if(!$resultset == null)
        echo "<div class=\"alert alert-success\" role=\"alert\">Aula añadida a la base de datos con éxito</div>";
    else
        echo "<div class=\"alert alert-danger\" role=\"alert\">Error al insertar el aula :".$app->getDao()->error."</div>";
}


App::print_createClassForm();
App::print_footer();