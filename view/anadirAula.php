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


<div class="register-form registerAula">
    <form>
        <p>Nombre</p>
        <input type="text" name="name" placeholder="<?php echo $short_class_name; ?>">
        <p>Descripcion</p>
        <input type="text" name="description" placeholder="<?php echo $classroom_name; ?>">
        <p><?php echo $checkbox_content; ?></p>
        <div class="row">
            <div class="col-sm-2">
                <input class="bigCheckBox" name="estic" type="checkbox">
            </div>
            <div class="col-sm">
                <input type="text" name="pccount" placeholder="<?php echo $classroom_pcs; ?>">
            </div>
        </div>
        <input type="submit" name="addclass" value="<?php echo $send_button_content; ?>">
    </form>
</div>