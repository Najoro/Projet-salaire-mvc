<?php

use App\Controler\SalarierControler;
use Kernel\Connexion;

//header
include("../include.php");
include("../App/Views/header.php");


//body

$controleur = new SalarierControler();
$action = $_GET['action'];
if($action == ""){
    $action = 'index';
}
$controleur->$action();

//footer
include("../App/Views/footer.php");