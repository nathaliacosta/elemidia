<?php

interface SegurancaInterface
{
    public function trancar(ChaveInterface $chave);
    public function destrancar(ChaveInterface $chave);
}