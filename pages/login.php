<?php
include_once('../core/app.php');
$app = new App();

session_start();

App::print_head();

App::printExternalNav();

if (!empty($_POST['login'])) {
    $user = $_POST["login_user"];
    $pass = $_POST["login_password"];

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

if (!empty($_POST['register'])) {
    $user = $_POST["user"];
    $username = $_POST["name"];
    $pass = $_POST["password"];
    $email = $_POST["email"];
    $date = $_POST['date'];

    $app = new App();
    $app->getDao()->insertUser($user,$username, $pass,$email, $date);
    if (!$app->getDao()->isConected()) {
        echo "<p>".$app->getDao()->error."</p>";
    } else {
        if ($app->getDao()->authenticate($user, $pass)) {
            $app -> saveSession($user);
            header("Location: lobby.php");
            die();
        }
    }
}

App::print_registerForm();

App::print_footer();

