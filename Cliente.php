<?php
class Cliente {
    private int $idade;
    private string $cpf;
    private Conta $conta;
    public function __construct($idade, $cpf, $conta) {
       $this->definirIdade($idade);
       $this->definirCpf($cpf);
       $this->definirConta($conta);
        
    }

    public function definirIdade(int $idade) {
        $this->idade = $idade;
    }
    public function retornarIdade() {
        return $this->idade;
    }
    public function definirCpf(string $cpf) {
        $this->cpf = $cpf;
    }
    public function retornarCpf() {
        return $this->cpf;
    }
    public function definirConta(Conta $conta) {
        $this->conta = $conta;
    }
    public function retornarConta() {
        return $this->conta;
    }
    
}