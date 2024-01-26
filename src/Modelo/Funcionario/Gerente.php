<?php 

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel {


    public function calculaBonificacao(): float {
        // O metodo recupera salario está em Funcionario.php
        return $this->recuperaSalario();
    }

    public function podeAutenticar(string $senha): bool {
        return $senha === '4321';
    }
}