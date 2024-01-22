<?php 

class Conta {
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    public function sacar(float $valorASacar){
        if ($valorASacar > $this) {
            echo "Saldo indisponível";
        } else {
            $this->saldo -= $valorASacar;
        }
    }
}