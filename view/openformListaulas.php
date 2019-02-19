<?php
/**
 * Created by PhpStorm.
 * User: damian
 * Date: 15/02/19
 * Time: 17:21
 */
?>
    <td>
        <form method="post" name="cancelar">
            <select id="mySelect" name="motivo" required onchange="if (this.selectedIndex) myFunction()";>
                <option value="">Seleccione un motivo para cancelar</option>
                <option value="NNo tengo tiempo para ir." >No tengo tiempo para ir.</option>
                <option value="Necesito dar más clases." >Necesito dar más clases.</option>
                <option value="Voy a cambiar de aula o fecha." >Voy a cambiar de aula o fecha.</option>
                <option value="Al final no la usaré." >Al final no la usaré.</option>
                <option value="otro" >Otro.</option>
            </select>
            <?php
            if($_SESSION['admin'])
                echo '<button type="submit" class="btn btn-danger" name="borrarreserva" value='.$fila['nreserva'].' onclick="return confirm(\'¿Seguro que quieres eliminar la reserva del aula '.$fila['aula'].' el día '.$fila['fecha'].' al usuario '.$fila['nombre'].'?\');">Cancelar Reserva</button>';
            else
                echo '<button type="submit" class="btn btn-danger" name="borrarreserva" value='.$fila['nreserva'].' onclick="return confirm(\'¿Seguro que quieres eliminar tu reserva del aula '.$fila['aula'].' el día '.$fila['fecha'].'?\');">Cancelar Reserva</button>';
            ?>
            <div id="othermsg"  style="display: none">
                <textarea name="mimotivo" cols="40" rows="5" placeholder="Indique aquí su motivo de cancelación."></textarea>
            </div>
            <script type="text/javascript">
                function myFunction() {
                    var x = document.getElementById("mySelect").value;
                    if (x == "otro") {
                        document.getElementById("othermsg").style.display = "block";
                    else
                        document.getElementById("othermsg").style.display = "none";
                }
            </script>
        </form>
    </td>
</tr>