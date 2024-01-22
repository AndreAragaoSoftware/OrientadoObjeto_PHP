<?php 

class Titular {
    private  $cpf;
    private string $nome;
    private $endeco;

    
    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->endeco = $endereco;
    }

      public function recuperaCpf()
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome()
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular) {
        //validação do nome
        if (strlen($nomeTitular) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function recuperaEndereco()
    {
        return $this->endeco;
    }

}