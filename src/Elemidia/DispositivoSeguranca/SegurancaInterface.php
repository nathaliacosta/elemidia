<?php

namespace Elemidia\DispositivoSeguranca;

use Elemidia\DispositivoSeguranca\Chave\ChaveInterface;

interface SegurancaInterface
{
    public function trancar(ChaveInterface $chave);
    public function destrancar(ChaveInterface $chave);
}