<?php

class ChaveFerro implements ChaveInterface
{
    private $codigo;

    public function __construct($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

}