<?php

use Schons\DesingPattern\CalculadoraDeImpostos;
use Schons\DesingPattern\Impostos\Icms;
use Schons\DesingPattern\Impostos\IR;
use Schons\DesingPattern\Impostos\Iss;
use Schons\DesingPattern\Orcamento;

require 'vendor/autoload.php';

$orcamento = new Orcamento();

$calculadora = new CalculadoraDeImpostos();

$orcamento->valor = 45631032;



echo $calculadora->calcula($orcamento, new Icms());

echo PHP_EOL;

echo $calculadora->calcula($orcamento, new Iss());

echo PHP_EOL;

echo $calculadora->calcula($orcamento, new Icms(new IR()));
