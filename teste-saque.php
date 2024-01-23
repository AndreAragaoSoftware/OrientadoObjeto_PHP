<?php 

use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;


require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new Cpf('123.456.789-10'), 
        'André Aragão', 
        new Endereco('Aracaju', 'Atalaia', 'Nome da rua', '36B')
    )
);

$conta->deposita(500);
$conta->saca(100);
var_dump($conta);

echo $conta->recuperaSaldo();