<?php
include_once('../core/app.php');
$app = new App();

session_start();

App::print_head();

App::printExternalNav();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $pass = $_POST["password"];

    $app = new App();
    if (!$app->getDao()->isConected()) {
        echo "<p>".$app->getDao()->error."</p>";
    } else {
        if ($app->getDao()->authenticate($user, $pass)) {
            echo "Login correcto";
            $app -> saveSession($user);
            header("Location: lobby.php");
            die();
        } else {
            echo "Login erroneo";
        }
    }
}

App::print_registerForm();

App::print_footer();

