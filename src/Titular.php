<?php 

class Titular {
    private string $cpf;
    private string $nome;

    
    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaCpf()
    {
        return $this->cpf;
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

}