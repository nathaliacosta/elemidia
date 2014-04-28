<?php

class PortaAco extends AbstractPorta
{
    public function abrir()
    {
        return true;
    }

    public function fechar()
    {
        return true;
    }

    public function destrancar(\ChaveInterface $chave)
    {
        throw new Exception('Essa porta não destranca');
    }

    public function trancar(\ChaveInterface $chave)
    {
        throw new Exception('Essa porta não tranca');
    }

}