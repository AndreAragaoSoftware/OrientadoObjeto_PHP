<?php

namespace Alura\Banco\Modelo\Conta;
use Alura\Banco\Modelo\Conta\Titular;

abstract class Conta
{
    private  $titular;
    protected float $saldo;
    private static  $numeroDeContas = 0;


    public function __construct(Titular $titular) {
        $this->titular = $titular; 
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct() {
        
    }

    public function saca(float $valorASacar): void
    {   
        
        // tarifa de Saque 
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        //Verificando se tem saldo suficiente
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        // Saque
        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        // teste valor a depositar maior que 0
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }


    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }
      public function recuperaNumetitular(): string
    {
       return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular()
    {
       return $this->titular->recuperaCpf();
    }


    public static function recuperaNumeroDeConta(): int{
        return self::$numeroDeContas;
    }

    // O metodo abstract obriga que toda  class que extender a Conta tenha esse metodo
    abstract protected function percentualTarifa(): float;

}