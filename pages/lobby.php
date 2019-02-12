<?php
include_once('../core/app.php');

$app = new App();


App::print_head();

App::print_hamburguer();
$app->validateSesion();

App::print_footer();