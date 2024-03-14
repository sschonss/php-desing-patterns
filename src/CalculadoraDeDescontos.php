<?php

namespace Schons\DesingPattern;

use Schons\DesingPattern\Desconto\DescontoMaisDe500Reais;
use Schons\DesingPattern\Desconto\DescontoMaisDe5Itens;
use Schons\DesingPattern\Desconto\SemDesconto;
use Schons\DesingPattern\Orcamento;
class CalculadoraDeDescontos
{
    public function calcula(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto(null)
            )
        );

        return $cadeiaDeDescontos->calculaDesconto($orcamento);

    }
}