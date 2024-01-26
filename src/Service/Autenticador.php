<?php 
namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador {

    public function tentaLogin(Autenticavel $autenticavel, string $senha): void {
        //podeAutenticar é o metodo criado em diretor
        if($autenticavel->podeAutenticar($senha)){
            echo "OK. Usuário logado no sistema";
        }else {
            echo"Ops. Senha incorreta.";
        }
    }

}