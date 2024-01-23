<?php 

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Funcionario(
        'Andre Aragão', 
        new Cpf('123.456.789-10'),
        'Desenvolvedor',
        1000);

    $novoFuncionario = new Funcionario(
        'Paloma Ribeiro', 
        new Cpf('987.654.321-10'),
        'Desenvolvedora Front',
        3000
    );

    $controlador = new ControladorDeBonificacoes();
    $controlador->adicionaBonificaçãoDe($umFuncionario);
    $controlador->adicionaBonificaçãoDe($novoFuncionario);

    echo $controlador->recuperaTotal();