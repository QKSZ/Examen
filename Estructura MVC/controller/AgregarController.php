<?php
namespace controller;

use controller\BaseController;
use model\Agregar;

class AgregarController implements BaseController 
{

    public static function getInstance() {
        if (!isset($_SESSION["instance"]) || !isset($_SESSION["Agre"])) 
        {
            $_SESSION["instance"] = new AgregarController();
            $_SESSION["Agre"] = [];
        }
        
        return $_SESSION["instance"];
    }

    public function show() {
        return "views/Agregar";
    }
    public function createObject($Id,$Precio,$Iva) {
        $obj = new Agregar();
        $obj -> setId($Id);
        $obj -> setPrecio($Precio);
        $obj -> setIva($Iva);
        

        array_push($_SESSION["Agre"], $obj);
        
        return "views/Agregar";
    }
} 