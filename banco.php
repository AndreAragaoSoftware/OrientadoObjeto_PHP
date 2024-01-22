<?php 

require_once 'src/Conta.php';

$primeraConta = new Conta('123.456.789-10', 'André Aragão');
var_dump($primeraConta);
$primeraConta->deposita(500);
$primeraConta->saca(300); // isso é ok


echo $primeraConta->recuperaSaldo() . PHP_EOL;
echo $primeraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeraConta->recuperaNomeTitular(). PHP_EOL;

$segundaConta = new Conta('987.654.321-10', 'Paloma Ribeiro');
var_dump($segundaConta);

echo Conta::recuperaNumeroDeConta();
