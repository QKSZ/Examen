<?php
require_once 'vendor/autoload.php';

session_start();

use controller\UserController;
use controller\IVAController;
use controller\AgregarController;
use controller\ComprarController;



if (!isset($_GET['page']))
    die('imposible de encontrar la ruta.');

$usrController = UserController::getInstance();
$ivController = IVAController::getInstance();
$agrController = AgregarController::getInstance();
$cmpController = ComprarController::getInstance();



switch ($_GET['page']) {
    case 'login':
        require_once($usrController->createUser($_GET['user'] ?? null, $_GET['password'] ?? null) . ".php");
        break;
    case 'IVA':
        require_once($ivController->show() . ".php");
        break;
    case 'Agregar':
        require_once($agrController->createObject($_GET['IDOBJ'] ?? null, $_GET['precio'] ?? null, $_GET['IVA'] ?? null) . ".php");  
        break;

    case 'Comprar':
        require_once($cmpController->show() . ".php");
        break;
    default:
        require_once($usrController->show() . ".php");
        break;
}




