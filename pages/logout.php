<?php
    include_once('../core/app.php');
    $app = new App();
    session_start();
    $app->invalidateSession();