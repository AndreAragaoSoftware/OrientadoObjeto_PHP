<?php 

namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;


abstract class Funcionario extends Pessoa {
    
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, $cargo, $salario) {   
        //Chamando o construtor da class Pessoa
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function alteraNome(string $nome) {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaCargo() {
        return $this->cargo;
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

    public function calculaBonificacao(): float {
        return $this->salario * 0.1;
    }


}

