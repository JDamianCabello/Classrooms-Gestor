<?php
/**
 * Created by PhpStorm.
 * User: jdami
 * Date: 30/01/2019
 * Time: 23:53
 */

require('../core/Language.php');
?>


    <form method="post" >
        <h1>Login</h1>
        <input type="text" class="reset" name="user" id="inputUser" placeholder="<?php echo $user_name; ?>">
        <input type="password" class="reset" name="password" id="inputPassword" placeholder="<?php echo $user_password; ?>">
        <input type="submit" class="reset" name="" value="<?php echo $acess; ?>">
        </br>
        <a href="register.php"><?php echo $register; ?></a>
    </form>


