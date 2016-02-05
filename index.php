<?php
session_start();
require 'app/classe.php';
App\autoloader::register();


if(isset($_GET['view']))
{
    $view = $_GET['view'];
}else{
    $view = "index";
}

if($constante->maintenance($_SERVER['REMOTE_ADDR']) == true)
{
    $view = "maintenance";
}

ob_start();
if($view === 'index'){require "view/index.php";}

$content = ob_get_clean();
require "view/default.php";
