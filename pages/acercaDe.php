<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 1/02/19
 * Time: 11:08
 */

include_once('../core/app.php');

$app = new App();
session_start();

App::print_head();

App::printAbout();

App::print_footer();