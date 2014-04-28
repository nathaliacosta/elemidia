<?php

namespace Elemidia\DispositivoSeguranca\Chave;

use Elemidia\DispositivoSeguranca\Chave\ChaveInterface;

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