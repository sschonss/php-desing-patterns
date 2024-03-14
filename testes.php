<?php

use Schons\DesingPattern\CalculadoraDeDescontos;
use Schons\DesingPattern\CalculadoraDeImpostos;
use Schons\DesingPattern\Impostos\Icms;
use Schons\DesingPattern\Impostos\IR;
use Schons\DesingPattern\Impostos\Iss;
use Schons\DesingPattern\Orcamento;

require 'vendor/autoload.php';

$orcamento = new Orcamento();

$calculadora = new CalculadoraDeDescontos();

$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;

$desconto = $calculadora->calcula($orcamento);

echo $desconto;

