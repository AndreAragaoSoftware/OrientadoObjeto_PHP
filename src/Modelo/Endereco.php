<?php 

namespace Alura\Banco\Modelo;

final class Endereco {

    // Utilizando a trait
    use AcessoPropriedade;
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    
    public function __construct($cidade, $bairro, $rua, $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade()
    {
        return $this->cidade;
    }

    public function recuperaBairro()
    {
        return $this->bairro;
    }

    public function recuperaRua()
    {
        return $this->rua;
    }

    public function recuperaNumero()
    {
        return $this->numero;
    }

    // Esse metodo imterpreta o objeto como uma instring
    public function __toString(): string {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
    
}

