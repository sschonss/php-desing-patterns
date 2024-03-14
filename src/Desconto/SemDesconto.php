<?php

namespace Schons\DesingPattern\Desconto;

use Schons\DesingPattern\Orcamento;

class SemDesconto extends Desconto
{

    protected ?Desconto $proximoDesconto;
    public function calculaDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}