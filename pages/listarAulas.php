<?php
include_once("../core/app.php");


$app = new App();
$app->validateSesion();

App::print_head("Listado de aulas");
App::printNav();
$resultset = $app->getAulas();
//1 Error en la BD
if(!$resultset)
    echo "<p> Error al conectar al servidor: ".$app->getDao()->error."</p>";

//2 La sentencia es correcta
else{
    $listEstudiantes=$resultset->fetchAll();

    //2.1 Si no hay elementos
    if(count($listEstudiantes)==0)
        echo "<p>No hay aulas dadas de alta en el sistema</p>";
    //2.2 Si hay aulas
    else{
        echo "<table class='table'>";

        App::print_listAulas();

        echo "<tbody>";
        foreach ($listEstudiantes as $fila) {
            echo "<tr>";
            echo "<td>".$fila['nombrecorto']."</td>";
            echo "<td>".substr($fila['nombre'], 0, 50)."</td><td>".$fila['ubicacion']."</td>";

            if($fila['tic'] == 0) {
                echo "<td>";
                include('../view/no.php');
                echo "</td><td></td>";
            }
            else{
                echo "<td>";
                include('../view/yes.php');
                echo "</td><td>".$fila['numordenadores']."</td>";
            }

            App::print_listAulas_Buttons();
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
}

App::print_footer();