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


<div id="register" class="baseStyleForm reserveAula">
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
        <p>Motivo reserva</p>
        <select id="mySelect" name="motivo" required onchange="if (this.selectedIndex) myFunction()";>
            <option value="">Seleccione un motivo</option>
            <option value="Necesito usar ordenadores." >Necesito usar ordenadores.</option>
            <option value="Necesito el aula para realizar una actividad." >Necesito el aula para realizar una actividad.</option>
            <option value="Haré un examen de tipo test online." >Haré un examen de tipo test online.</option>
            <option value="Necesito algún recurso de este aula." >Necesito algún recurso de este aula.</option>
            <option value="otro" >Otro.</option>
        </select>
        <div id="othermsg"  style="display: none">
            <textarea name="mimotivo" cols="40" rows="5" placeholder="Indique aquí su motivo de reserva."></textarea>
        </div>
        <script type="text/javascript">
            function myFunction() {
                var x = document.getElementById("mySelect").value;
                if (x == "otro") {
                    document.getElementById("othermsg").style.display = "block";
                    document.getElementById('register').style.height='560px';
                } else {
                    document.getElementById("othermsg").style.display = "none";
                    document.getElementById('register').style.height='435px';
                }
            }
        </script>
        <input type="submit" name="reserveclass" value="<?php echo $send_button_content; ?>" onclick="return confirm( '¿Confirmas la reserva?');">
    </form>
</div>