<?php

require_once './ChaveInterface.php';
require_once './SegurancaInterface.php';
require_once './AberturaInterface.php';

require_once './Dobradica.php';
require_once './Fechadura.php';
require_once './AbstractPorta.php';
require_once './Porta.php';
require_once './ChaveFerro.php';
require_once './FechaduraEletronica.php';


try {
    $chave = new ChaveFerro(1234);
    $dobradica = new Dobradica();
    $fechadura = new FechaduraEletronica();

    $porta = new Porta($dobradica, $fechadura);
    $porta->destrancar($chave);

} catch (Exception $exc) {
    echo $exc->getMessage() . PHP_EOL;
}


