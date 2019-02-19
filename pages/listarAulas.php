<?php
include_once("../core/app.php");


$app = new App();
$app->validateSesion();

App::print_head();
App::print_hamburguer();
$resultset = $app->getAulas();

if (!empty($_POST['habilitaclass'])) {
    $clase = $_POST["habilitaclass"];

    if (!$app->getDao()->habilitarClase($clase))
        echo "<p>".$app->getDao()->error."</p>";
    //else
        //App::refreshPage();

}

if (!empty($_POST['deshabilitaclass'])) {
    $clase = $_POST["deshabilitaclass"];

    if (!$app->getDao()->deshabilitarClase($clase))
        echo "<p>".$app->getDao()->error."</p>";
    //else
        //App::refreshPage();

}

if (!empty($_POST['borrarclass'])) {
    $clase = $_POST["borrarclass"];

    if (!$app->getDao()->deletetAula($clase))
        echo "<p>".$app->getDao()->error."</p>";
    else
        App::refreshPage();

}




//1 Error en la BD
echo '<div class="content">';
if(!$resultset)
    echo "<p> Error al conectar al servidor: ".$app->getDao()->error."</p>";

//2 La sentencia es correcta
else{
    $listEstudiantes=$resultset->fetchAll();

    //2.1 Si no hay elementos
    if(count($listEstudiantes)==0)
        echo "<p>No hay aulas dadas de alta en el sistema</p>";
    //2.2 Si hay aulas
    else {
        echo "<table class='table'>";

        App::print_listAulas();

        echo "<tbody>";
        foreach ($listEstudiantes as $fila) {
            if ($fila['deshabilitada'])
                echo '<tr style=\'color:red;\'>';
            else
                echo "<tr>";

            echo "<td>" . $fila['nombre'] . "</td>";
            echo "<td>" . substr($fila['descripcion'], 0, 50) . "</td><td>" . $fila['ubicacion'] . "</td>";

            if ($fila['tic'] == 0) {
                echo "<td>";
                echo 'NO';
                echo "</td><td></td>";
            } else {
                echo "<td>";
                echo 'SI';
                echo "</td><td>" . $fila['numordenadores'] . "</td>";
            }

            echo '<form method="post">';
            if (!$fila['deshabilitada']) {
                echo '<td><button type=\"submit\" class="btn btn-success" name="reserveclass" value=' . $fila["nombre"] . ' onclick="return confirm( "¿Confirmas la reserva?");">Reservar aula</button></td>';
            } else {
                echo "<td><button type=\"submit\" class='btn btn-secondary' name=\"reserveclass\" value=\"\" onclick=\"return false;\">Reservar aula</button></td>";
            }
            if ($_SESSION['admin']) {
                echo '<td><button type="submit" class="btn btn-danger" name="borrarclass" value=' . $fila['nombre'] . ' onclick="return confirm(\'¿Seguro que quieres BORRAR EL AULA ' . strtoupper($fila['nombre']) . ' PERMANENTEMENTE?\');">Borrar aula</button></td>';
                echo "<td><a href=\"#\" class=\"btn btn-info\" role=\"button\">Editar aula</a></td>";

                if ($fila['deshabilitada'])
                    echo '<td><button type="submit" class="btn btn-dark" name="habilitaclass" value=' . $fila['nombre'] . ' onclick="return confirm(\'¿Seguro que quieres habilitar el aula ' . $fila['nombre'] . '?\');">Habilitar aula</button></td>';

                else
                    echo '<td><button type="submit" class="btn btn-dark" name="deshabilitaclass" value=' . $fila['nombre'] . ' onclick="return confirm(\'¿Seguro que quieres deshabilitar el aula ' . $fila['nombre'] . '?\');">Deshabilitar aula</button></td>';
            }
            echo '</form>';
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
}
App::print_footer();