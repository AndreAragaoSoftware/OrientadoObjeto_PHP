<?php 
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;


require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new Cpf('123.456.789-10'), 
        'André Aragão', 
        new Endereco('Aracaju', 'Atalaia', 'Nome da rua', '36B')
    ),
    2
);

$conta->deposita(500);
$conta->saca(100);
var_dump($conta);

echo $conta->recuperaSaldo();