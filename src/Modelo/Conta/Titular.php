<?php 

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

//Chamando a class Pessoa 
class Titular extends Pessoa {

    private $endeco;

    
    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        //Chamando o construtor da class Pessoa
        parent::__construct($nome, $cpf);
        $this->endeco = $endereco;
    }


    public function recuperaEndereco()
    {
        return $this->endeco;
    }

}