<?php 

namespace Alura\Banco\Modelo;


class Funcionario extends Pessoa {
    
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

    public function recuperaSalario() {
        return $this->salario;
    }

    public function calculaBonificacao(): float {
        return $this->salario * 0.1;
    }

}

