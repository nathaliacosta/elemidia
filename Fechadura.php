<?php

class Fechadura implements SegurancaInterface
{
    private static $codigo = 1234;
    private $estaTrancada;

    public function __construct()
    {
        $this->estaTrancada = true;
    }

    public function trancar(ChaveInterface $chave)
    {
        if ($this->checarSenha($chave)) {
            if ($this->estaTrancada === false) {
                $this->estaTrancada = true;
                echo "A porta foi trancada... Fechadura de Ferro" . PHP_EOL;

                return true;
            }

            throw new Exception("A porta ja está trancada!" . PHP_EOL, 2001);
        }
    }

    public function destrancar(ChaveInterface $chave)
    {
        if ($this->checarSenha($chave)) {
            if ($this->estaTrancada === true) {
                $this->estaTrancada = false;
                echo "A porta foi destrancada... Fechadura de Ferro" . PHP_EOL;

                return true;
            }

            throw new Exception("A porta ja está destrancada!" . PHP_EOL, 2002);
        }
    }

    private function checarSenha(ChaveInterface $chave)
    {
        if ($chave->getCodigo() !== self::$codigo) {
            throw new Exception("A chave não é compatível" . PHP_EOL, 10001);
        }

        return true;
    }

}
