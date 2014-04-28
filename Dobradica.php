<?php

class Dobradica implements AberturaInterface
{
    private $estaAberta;

    public function __construct()
    {
        $this->estaAberta = false;
    }

    public function abrir()
    {
        if ($this->estaAberta === false) {
            $this->estaAberta = true;
            echo "A porta foi aberta... Dobradiça Borboleta" . PHP_EOL;

            return true;
        }

        throw new Exception("A porta já está aberta!" . PHP_EOL, 1001);
    }

    public function fechar()
    {
        if ($this->estaAberta === true) {
            $this->estaAberta = false;
            echo "A porta foi fechada... Dobradiça Borboleta" . PHP_EOL;

            return true;
        }

        throw new Exception("A porta já está fechada!" . PHP_EOL, 1002);
    }

}
