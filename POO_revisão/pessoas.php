<?php

    class pessoa{
        private $nome;

        private $idade;
        private $cidade;
        private $telefone;

        public function __construct($nome, $idade, $cidade, $telefone){
            $this->nome=$nome;
            $this->idade=$idade;
            $this->cidade=$cidade;
            $this->telefone=$telefone;
        }

        public function adicionarendereco($endereco){
            $this->cidade=$endereco;
        }

        public function definirtelefone($numero){
            $this->telefone=$numero;
        }

        public function aniversario(){
            $this->idade=+1;
        }
        
        public function exibirperfil(){
            echo "$this->nome, $this->idade, $this->cidade, $this->telefone";
        }
    }

    $pessoa= new pessoa("Tadeu", 20, "palmeiras", 40000-4000);
    $pessoa->adicionarendereco("pirassununga");
    $pessoa->definirtelefone(3000-3000);
    $pessoa->aniversario();
    $pessoa->exibirperfil();
?>