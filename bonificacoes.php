<?php 

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
        'Andre Aragão', 
        new Cpf('123.456.789-10'),
        1000);

    $novoFuncionario = new Gerente(
        'Paloma Ribeiro', 
        new Cpf('987.654.321-10'),
        3000
    );

    $diretor = new Diretor('Anderson Pereira',
    new Cpf('456.789.123-10'),
    5000
    );

    $umEditor = new EditorVideo(
        'Paulo',
        new Cpf('456.789.123-10'),
        1500
    );

    $controlador = new ControladorDeBonificacoes();
    $controlador->adicionaBonificaçãoDe($umFuncionario);
    $controlador->adicionaBonificaçãoDe($novoFuncionario);
    $controlador->adicionaBonificaçãoDe($diretor);
    $controlador->adicionaBonificaçãoDe($umEditor);

    echo $controlador->recuperaTotal();