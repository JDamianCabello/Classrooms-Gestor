<?php
/**
 * Created by PhpStorm.
 * User: jdami
 * Date: 30/01/2019
 * Time: 23:53
 */

require('../core/Language.php');
?>

<div class="register-form">
    <img src="../assets/img/register.png" class="avatar">
    <h2><?php echo $register; ?></h2>
    <p><?php echo $register_msg; ?></p>
    <form method="post">
        <input type="text" name="name" placeholder="<?php echo $register_name; ?>" required>
        <input type="text" name="user" placeholder="<?php echo $register_username; ?>" required>
        <input type="email" name="email" placeholder="<?php echo $register_email; ?>" required>
        <input type="date" name="date" placeholder="<?php echo $register_fNac; ?>" content="">
        <input type="password" name="password" placeholder="<?php echo $register_pass; ?>" required>
        <input type="submit" name="register" value="<?php echo $register_btnReg; ?>">
    </form>
</div>