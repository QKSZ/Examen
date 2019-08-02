<?php

namespace model;

class Agregar
{
    private $Id;
    private $Precio;
    private $Iva;
    

    public function __construct() { }

    public function getId()
    {
        return $this->Id;
    }

    public function setId($Id)
    {
        $this->Id = $Id;
    }

    public function getPrecio()
    {
        return $this->Precio;
    }

    public function setPrecio($Precio)
    {
        $this->Precio = $Precio;
    }
    public function getIva()
    {
        return $this->Iva;
    }

    public function setIva($Iva)
    {
        $this->Iva = $Iva;
    }
}