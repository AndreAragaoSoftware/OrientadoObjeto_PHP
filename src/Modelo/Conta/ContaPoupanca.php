<?php 

namespace Alura\Banco\Modelo\Conta;


class ContaPoupanca extends Conta
{
   protected function percentualTarifa(): float{
        //Tarifa de saque
        return 0.03;
    }
}

