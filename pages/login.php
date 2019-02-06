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
        var_dump($app);
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
    $pass = $_POST["password"];
    $email = $_POST["email"];
    $date = $_POST['date'];

    if($date == "0000-00-00")
        exit();
    $app = new App();
    if($app->getDao()->insertUser($user,$name, $pass,$email, $date)){
        $app -> saveSession($user);
        header("Location: lobby.php");
        die();
    }
}

App::print_registerForm();

App::print_footer();

