<?php
include_once("app.php");

$app = new App();
session_start();

App::print_head_NoBootsrap("", "Pagina de registro de mi app");
?>

    <form class="box" method="post">
        <h4>Register form</h4>
        <input type="text" name="name" id="inputUser" placeholder="Name">
        <input type="email" name="email" id="inputUser" placeholder="E-mail">
        <input type="text" name="fnac" id="inputUser" placeholder="Birth date">
        <input type="text" name="user" id="inputUser" placeholder="Username">
        <input type="password" name="password" id="inputPassword" placeholder="Password">
        <input type="password" name="passwordconfirm" id="inputPassword" placeholder="Confirm password">
        <input type="submit" name="" value="Register"><input type="submit" name="" value="Go back">
    </form>


<?php
App::print_footer();
?>