<?php 

require_once 'src/Conta.php';

$primeraConta = new Conta('123.456.789-10', 'André Aragão');
var_dump($primeraConta);
$primeraConta->deposita(500);
$primeraConta->saca(300); // isso é ok


echo $primeraConta->recuperaSaldo();
echo $primeraConta->recuperaCpfTitular();
