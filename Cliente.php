<?php
class Cliente extends Conta {
    private $idade;
    private $cpf;
    
    public function __construct(int $numero, string $nome, float $saldo, int $idade, string $cpf) {
        parent::__construct($numero, $nome, $saldo);
        $this->definirIdade($idade);
        $this->definirCpf($cpf);
        
    }

    public function definirIdade($idade) {
        $this->idade = $idade;
    }
    public function retornarIdade() {
        return $this->idade;
    }
    public function definirCpf($cpf) {
        $this->cpf = $cpf;
    }
    public function retornarCpf() {
        return $this->cpf;
    }
    
}