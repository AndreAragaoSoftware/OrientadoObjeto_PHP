<?php 

// Substitui o outros autoload.php
require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Cpf;

$endereco = new Endereco('Aracaju', 'um bairro', 'minha rua', '35B');

$andre = new Titular(new Cpf('123.456.789-10'),'André Aragão', $endereco);
$primeraConta = new Conta($andre);
var_dump($primeraConta);
$primeraConta->deposita(500);
$primeraConta->saca(300); // isso é ok


echo $primeraConta->recuperaSaldo() . PHP_EOL;
echo $primeraConta->recuperaNumetitular() . PHP_EOL;
echo $primeraConta->recuperaCpfTitular(). PHP_EOL;

$paloma = new Titular(new Cpf('987.654.321-10'), 'Paloma Ribeiro', $endereco);
$segundaConta = new Conta($paloma);
var_dump($segundaConta);

echo Conta::recuperaNumeroDeConta();
