<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 1/02/19
 * Time: 9:12
 *
 * Este fichero es la vista de añadir aulas
 */
require ('../core/Language.php');
?>


<div class="baseStyleForm registerAula">
    <form method="post">
        <p>Nombre</p>
        <input type="text" name="name" placeholder="<?php echo $short_class_name; ?>">
        <p>Descripcion</p>
        <input type="text" name="description" placeholder="<?php echo $classroom_name; ?>">
        <p>Posición</p>
        <input type="text" name="position" placeholder="<?php echo $classroom_position; ?>">
        <p><?php echo $checkbox_content; ?></p>
        <div class="row">
            <div class="col-sm-2">
                <input id="ticselec" onchange="showMe('countpc')" name="estic" value="1" type="checkbox">
            </div>
            <div id="countpc" class="col-sm" style="display: none">
                <input type="text" name="pccount" placeholder="<?php echo $classroom_pcs; ?>">
            </div>
            <script type="text/javascript">
                <!--
                function showMe (box) {
                    var chboxs = document.getElementById("countpc").style.display;
                    var vis = "none";
                    if(chboxs=="none"){
                        vis = "block"; }
                    if(chboxs=="block"){
                        vis = "none"; }
                    document.getElementById(box).style.display = vis;
                }
                //-->
            </script>
        </div>
        <input type="submit" name="addclass" value="<?php echo $send_button_content; ?>">
    </form>
</div>