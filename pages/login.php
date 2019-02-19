<?php
include_once('../core/app.php');
$app = new App();

session_start();

App::print_head();

App::printExternalNav();

if (!empty($_POST['login'])) {
    $user = $_POST["login_user"];
    $pass = $_POST["login_password"];

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

if (!empty($_POST['register'])) {
    $user = $_POST["user"];
    $name = $_POST["name"];
    $pass = hash('sha256',$_POST["password"]);
    $email = $_POST["email"];
    $date = $_POST['date'];

    if($app->getDao()->insertUser($user,$name, $pass,$email, $date)){
        $app -> saveSession($user);
        header("Location: lobby.php");
        die();
    }
}

App::print_registerForm();
App::print_signature();

App::print_footer();
