<?php 

namespace Alura\Banco\Modelo\Funcionario;


class Gerente extends Funcionario {


    public function calculaBonificacao(): float {
        // O metodo recupera salario está em Funcionario.php
        return $this->recuperaSalario();
    }
}