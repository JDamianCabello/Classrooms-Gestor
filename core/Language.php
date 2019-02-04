<?php

if (empty($_SESSION["language"]))
{

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$_SESSION["language"] = $lang;

if ($lang!="es")
{
$_SESSION["language"] = "en";
}
}
if (isset($_SESSION["language"])) {
    $lang = $_SESSION["language"];
}
switch ($lang) {
    case "es":
        include('languages/es.php');
        break;
    default:
        include('languages/en.php');
        break;
}
