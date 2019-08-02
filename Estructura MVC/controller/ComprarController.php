<?php
namespace controller;

use controller\BaseController;
use model\User;

class ComprarController implements BaseController 
{

    public static function getInstance() {
        if (!isset($_SESSION["instance"]) || !isset($_SESSION["Compra"])) 
        {
            $_SESSION["instance"] = new ComprarController();
            $_SESSION["Compra"] = [];
        }
        
        return $_SESSION["instance"];
    }

    public function show() {
        return "views/Comprar";
    }

}