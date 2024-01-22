<?php 

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$primeraConta = new Conta(new Titular('123.456.789-10', 'André Aragão'));
var_dump($primeraConta);
$primeraConta->deposita(500);
$primeraConta->saca(300); // isso é ok


echo $primeraConta->recuperaSaldo() . PHP_EOL;
echo $primeraConta->recuperaNumetitular() . PHP_EOL;
echo $primeraConta->recuperaCpfTitular(). PHP_EOL;

$segundaConta = new Conta(new Titular('987.654.321-10', 'Paloma Ribeiro'));
var_dump($segundaConta);

echo Conta::recuperaNumeroDeConta();
