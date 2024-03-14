<?php

namespace Schons\DesingPattern;

use Schons\DesingPattern\Impostos\Imposto;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}