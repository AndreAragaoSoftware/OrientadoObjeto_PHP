<?php

namespace Alura\Banco\Modelo\Conta;
use Alura\Banco\Modelo\Conta\Titular;

class Conta
{
    private  $titular;
    private float $saldo;
    private static  $numeroDeContas = 0;
    private int $tipo;
    // se $tipo == 1 Conta Corrente; 2 = Poupança

    public function __construct(Titular $titular, $tipo){
        $this->titular = $titular; 
        $this->saldo = 0;
        $this->tipo = $tipo;

        self::$numeroDeContas++;
    }

    public function __destruct(){
        
    }

    public function saca(float $valorASacar): void
    {   
        
        // tarifa de Saque depende do tipo
        if($this->tipo === 1){
            $tarifaSaque = $valorASacar *0.05;
        } else {
            $tarifaSaque = $valorASacar *0.03;
        }
        
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

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
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
}