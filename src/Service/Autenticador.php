<?php 
namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador {

    public function tentaLogin(Diretor $diretor, string $senha): void {
        //podeAutenticar é o metodo criado em diretor
        if($diretor->podeAutenticar($senha)){
            echo "OK. Usuário logado no sistema";
        }else {
            echo"Ops. Senha incorreta.";
        }
    }

}