<?php

class FechaduraEletronica implements SegurancaInterface
{
    public function destrancar(\ChaveInterface $chave)
    {
        echo "A porta foi destrancada... Fechadura Eletronica" . PHP_EOL;

        return true;
    }

    public function trancar(\ChaveInterface $chave)
    {
        return true;
    }

}