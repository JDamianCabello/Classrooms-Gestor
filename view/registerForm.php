<?php
/**
 * Created by PhpStorm.
 * User: jdami
 * Date: 30/01/2019
 * Time: 23:53
 */

require('../core/Language.php');
?>

<!--
<form method="post">
    <h4>Register form</h4>
    <input type="text" name="name" id="inputUser" placeholder="Name">
    <input type="email" name="email" id="inputUser" placeholder="E-mail">
    <input type="text" name="fnac" id="inputUser" placeholder="Birth date">
    <input type="text" name="user" id="inputUser" placeholder="Username">
    <input type="password" name="password" id="inputPassword" placeholder="Password">
    <input type="password" name="passwordconfirm" id="inputPassword" placeholder="Confirm password">
    <input type="submit" name="" value="Register"><input type="submit" name="" value="Go back">
</form>
-->

<div class="contact-form">
    <img src="../assets/img/register.png" class="avatar">
    <h2><?php echo $register; ?></h2>
    <p><?php echo $register_msg; ?></p>
    <form action="">
        <input type="text" placeholder="<?php echo $register_username; ?>">
        <input type="email" placeholder="<?php echo $register_email; ?>">
        <input type="email" placeholder="<?php echo $register_email_conf; ?>">
        <input type="date" placeholder="<?php echo $register_fNac; ?>">
        <input type="password" placeholder="<?php echo $register_pass; ?>">
        <input type="password" placeholder="<?php echo $register_pass_conf; ?>">
        <input type="submit" value="<?php echo $register_btnReg; ?>">
        <p><input type="checkbox"><?php echo $register_remenber; ?></p>
    </form>
</div>