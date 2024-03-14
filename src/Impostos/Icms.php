<?php

namespace Schons\DesingPattern\Impostos;

use Schons\DesingPattern\Orcamento;

class Icms implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}