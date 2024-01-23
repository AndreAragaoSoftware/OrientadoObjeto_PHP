<?php 

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario;

class ControladorDeBonificacoes {

    private float $totalBonificacoes = 0;

    public function adicionaBonificaçãoDe(Funcionario $funcionario) {
        // O calculaBonificação() está em Funcionarios.php
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float {
        return $this->totalBonificacoes;
    }

}