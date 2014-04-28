<?php

namespace Elemidia\DispositivoSeguranca;

use Elemidia\DispositivoSeguranca\Chave\ChaveInterface;
use Elemidia\DispositivoSeguranca\SegurancaInterface;

class FechaduraEletronica implements SegurancaInterface
{
    public function destrancar(ChaveInterface $chave)
    {
        echo "A porta foi destrancada... Fechadura Eletronica" . PHP_EOL;

        return true;
    }

    public function trancar(ChaveInterface $chave)
    {
        return true;
    }

}