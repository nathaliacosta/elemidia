<?php

require_once './vendor/autoload.php';

use Elemidia\DispositivoAbertura\Dobradica;
use Elemidia\DispositivoSeguranca\Chave\ChaveFerro;
use Elemidia\DispositivoSeguranca\Fechadura;
use Elemidia\Porta\Porta;

try {
    $chave = new ChaveFerro(1234);
    $dobradica = new Dobradica();
    $fechadura = new Fechadura();

    $porta = new Porta($dobradica, $fechadura);
    $porta->destrancar($chave);

} catch (Exception $exc) {
    //echo $exc->getTraceAsString();
    echo $exc->getMessage() . PHP_EOL;
}


