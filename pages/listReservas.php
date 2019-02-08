<?php
include_once("../core/app.php");
$app = new App();
$app->validateSesion();

App::print_head();
App::printNav();

$resultset = $app->getReservas();
//1 Error en la BD
if(!$resultset)
    echo "<p> Error al conectar al servidor: ".$app->getDao()->error."</p>";

//2 La sentencia es correcta
else{
    $reservasArray=$resultset->fetchAll();
    //2.1 Si no hay elementos

    if(count($reservasArray)==0)
        if($_SESSION['admin'])
            echo "<div class=\"alert alert-info\" role=\"alert\"><p class=\"text-justify\">Ningún usuario reservó un aula</p></div>";
        else
            echo "<div class=\"alert alert-info\" role=\"alert\"><p class=\"text-justify\">Usted no tiene ningún aula reservada</p></div>";
    //2.2 Si hay alumnos
    else{
        echo "<table class='table'>";
        echo "<thead>";
        echo "<tr>";

        for ($i=0; $i < $resultset->columnCount(); $i++) {
            $columnMeta=$resultset->getColumnMeta($i);
            echo "<th scope='col'>".strtoupper($columnMeta['name'])."</th>";
        }
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach ($reservasArray as $fila) {
            echo "<tr>";
            if($_SESSION['admin'])
                echo "<td>".$fila['nombre']."</td><td>".$fila['usuario']."</td>";
            echo "<td>".$fila['aula']."</td><td>".$fila['fecha']."</td><td>".$fila['tramo']."</td><td>".$fila['motivo']."</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
}

App::print_footer();