<?php
include_once('../core/app.php');
$app = new App();
$listaulas = $app->getAulas();
$listaulas=$listaulas->fetchAll();
$app->validateSesion();
App::print_head();
App::printNav();

if(!empty($_POST['reserveclass'])){
    $hora = $_POST['hora'];
    $fecha = $_POST['fecha'];
    $aula = $_POST['aula'];
    if($_POST['motivo'] == "otro")
        if($_POST['mimotivo'] == null)
            $motivo = $_POST['motivo'];
        else
            $motivo = $_POST['mimotivo'];
    else
        $motivo = $_POST['motivo'];
    var_dump($_POST['mimotivo']);

    $resultset = $app->insertReserve($_SESSION['user'],$aula,$fecha,$hora,$motivo);

    if(!$resultset == null)
        echo "<div class=\"alert alert-success\" role=\"alert\"><p class=\"text-justify\">Aula reservada con éxito para la fecha: ".$fecha."</p></div>";
    else
        echo "<div class=\"alert alert-danger\" role=\"alert\"><p class=\"text-justify\">Error al reservar el aula :".$app->getDao()->error."</p></div>";
}

App::print_reserveForm();
App::print_footer();