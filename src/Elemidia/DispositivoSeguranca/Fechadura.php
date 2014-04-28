<?php

namespace Elemidia\DispositivoSeguranca;

use Elemidia\DispositivoSeguranca\Chave\ChaveInterface;
use Exception;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class Fechadura implements SegurancaInterface
{
    private static $codigo = 1234;
    private $estaTrancada;
    /**
     *
     * @var Logger
     */
    private $logger;

    public function __construct()
    {
        $this->estaTrancada = true;

        // create a log channel
        $log = new Logger('elemidia');
        $log->pushHandler(new StreamHandler('log/elemidia.log', Logger::DEBUG));

        $this->logger = $log;
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
                $this->logger->addDebug('A porta foi destrancada... Fechadura de Ferro');
                #echo "A porta foi destrancada... Fechadura de Ferro" . PHP_EOL;

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
