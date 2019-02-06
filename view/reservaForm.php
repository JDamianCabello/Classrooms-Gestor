<?php
/**
 * Created by PhpStorm.
 * User: jdami
 * Date: 06/02/2019
 * Time: 18:16
 */
include_once('../core/app.php');
$app = new App();
$listaulas = $app->getAulas();
$listaulas=$listaulas->fetchAll();
require ('../core/Language.php');
?>


<div class="baseStyleForm reserveAula">
    <form method="post">
        <p>Elige el aula [las tic´s muestran un ordenador]</p>
        <select name="aula" required>
            <?php
            foreach ($listaulas as $item) {
                echo "<option value=".$item['nombre']."";
                if($item['tic'] == 1)
                    echo " class=\"fa\">&#xf5fc;     ";
                else
                    echo " class=\"fa\">&#xf02d    ";
                echo $item['nombre']."</option>";
            }
            ?>
        </select>
        <p>Elige la fecha</p>
        <input type="date" name="fecha" required>
        <p>Elige las horas</p>
        <select name="hora" required>
            <option value="8:15">1ª hora [8:15-9:15]</option>
            <option value="9:15">2ª hora [9:15-10:15]</option>
            <option value="10:15">3ª hora [10:15-11:15]</option>
            <option value="11:45">4ª hora [11:45-12:45]</option>
            <option value="12:45">5ª hora [12:45-13:45]</option>
            <option value="13:45">6ª hora [13:45-14:45]</option>
            <option value="all">Todo el dia</option>
        </select>

        <input type="submit" name="reserveclass" value="<?php echo $send_button_content; ?>">
    </form>
</div>