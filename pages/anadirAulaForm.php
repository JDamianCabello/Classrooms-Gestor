<?php
include_once('../core/app.php');
$app = new App();
$app->validateSesion();
App::print_head();
App::printNav();
App::print_createClassForm();
App::print_footer();
