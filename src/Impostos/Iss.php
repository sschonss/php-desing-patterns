<?php

namespace Schons\DesingPattern\Impostos;

use Schons\DesingPattern\Orcamento;

class Iss implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }

}