<?php 

class Conta {
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function sacar(float $valorASacar){
        if ($valorASacar > $this) {
            echo "Saldo indisponível";
            return;
        } 


        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void{
        if ($valorADepositar < 0){
            echo "Valor precisa ser positivo";
            return;
        } 
        
        $this->saldo += $valorADepositar;  
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo){
            echo"saldo indisponivel";
            return;
        } 
        
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);  
    }
    
}