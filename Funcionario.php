<?php 

class Funcionario extends Pessoa {
    
    private string $cargo;

    public function __construct(string $nome, Cpf $cpf, $cargo) {   
        //Chamando o construtor da class Pessoa
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function alteraNome(string $nome) {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaCargo() {
        return $this->cargo;
    }
}

