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
if($view === 'mission'){require "view/mission.php";}
if($view === 'blog'){require "view/blog.php";}
if($view === 'partenaire'){require "view/partenaire.php";}
if($view === 'contact'){require "view/contact.php";}
if($view === 'don'){require "view/don.php";}

$content = ob_get_clean();
require "view/default.php";
