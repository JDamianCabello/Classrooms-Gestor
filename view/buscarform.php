<?php

include_once('../core/app.php');
$app = new App();
$listaulas = $app->getAulas();
$listaulas=$listaulas->fetchAll();
require ('../core/Language.php');
?>

<div class="baseStyleForm searchAula">
    <form method="post">
        <p>Nombre</p>
        <select name="aula">
            <?php
            foreach ($listaulas as $item) {
                echo "<option value=".$item['nombre'];
                if($item['deshabilitada'])
                    echo " disabled";
                if($item['tic'] == 1)
                    echo " class=\"fa\">&#xf5fc;     ";
                else
                    echo " class=\"fa\">&#xf02d    ";
                echo $item['nombre']."</option>";
            }
            ?>
        </select>
        <p>Descripcion</p>
        <select name="descripcion">
            <?php
            foreach ($listaulas as $item) {
                echo "<option value=".$item['descripcion'];
                if($item['deshabilitada'])
                    echo " disabled";
                if($item['tic'] == 1)
                    echo " class=\"fa\">&#xf5fc;     ";
                else
                    echo " class=\"fa\">&#xf02d    ";
                echo $item['descripcion']."</option>";
            }
            ?>
        </select>
        <p>Posición</p>
        <select name="posicion">
            <?php
            foreach ($listaulas as $item) {
                echo "<option value=".$item['ubicacion'];
                if($item['deshabilitada'])
                    echo " disabled";
                if($item['tic'] == 1)
                    echo " class=\"fa\">&#xf5fc;     ";
                else
                    echo " class=\"fa\">&#xf02d    ";
                echo $item['ubicacion']."</option>";
            }
            ?>
        </select>
        <input type="submit" name="searchclass" value="Buscar aula">
    </form>
</div>
