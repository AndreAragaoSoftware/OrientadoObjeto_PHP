<?php 
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel {
    
     public function calculaBonificacao(): float {
        // O metodo recupera salario está em Funcionario.php
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }

}