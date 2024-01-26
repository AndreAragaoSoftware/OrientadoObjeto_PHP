<?php 

namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;


abstract class Funcionario extends Pessoa {
    
 
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, $salario) {   
        //Chamando o construtor da class Pessoa
        parent::__construct($nome, $cpf);
        
        $this->salario = $salario;
    }

    public function alteraNome(string $nome) {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    
    public function recebeAumento(float $valorAumento): void {
        if ($valorAumento < 0 ) {
            echo "Aumento deve ser positivo";
            return;
        }

        $this->salario += $valorAumento;
    }

    public function recuperaSalario() {
        return $this->salario;
    }

    abstract public function calculaBonificacao(): float;


}

