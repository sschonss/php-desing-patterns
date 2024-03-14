<?php

namespace Schons\DesingPattern\Impostos;

use Schons\DesingPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;

}