<?php
include_once('../core/app.php');

$app = new App();
$app->validateSesion();

App::print_head();

App::print_hamburguer();


App::print_footer();