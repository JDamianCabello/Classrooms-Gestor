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
<div class="container anadirAula">
    <form action="../pages/anadirAulaBD.php" method="post">
        <div class="input-container">
            <ion-icon class="icon ion-md-pricetags"></ion-icon>
            <input class="input-field" type="text" placeholder="<?php echo $classroom_name; ?>" name="nombre">
        </div>

        <div class="input-container">
            <ion-icon class="icon ion-md-pricetag"></ion-icon>
            <input class="input-field" type="text" placeholder="<?php echo $short_class_name; ?>" name="shortname">
        </div>

        <div class="input-container">
            <ion-icon class="icon ion-md-pin"></ion-icon>
            <input class="input-field" type="text" placeholder="<?php echo $classroom_position; ?>" name="position">
        </div>

        <div class="input-container">
            <label><input type="checkbox" name="estic"><?php echo $checkbox_content; ?></label>
            <div class="input-container" style="width: 200px; margin-left: 30px">
                <ion-icon class="icon ion-md-laptop"></ion-icon>
                <input class="input-field" type="text" placeholder="<?php echo $classroom_pcs; ?>" name="pccount">
            </div>
        </div>

        <button type="submit" class="btn mibtn"><?php echo $send_button_content; ?></button>
    </form>
</div>


