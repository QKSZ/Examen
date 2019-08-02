<?php
namespace controller;

use controller\BaseController;
use model\User;

class IVAController implements BaseController 
{
    public static function getInstance() {
        if (!isset($_SESSION["instance"]) || !isset($_SESSION["IVA"])) 
        {
            $_SESSION["instance"] = new IVAController();
            $_SESSION["IVA"] = [];
        }
        
        return $_SESSION["instance"];
    }

    public function show() {
        return "views/IVA";
    }

}