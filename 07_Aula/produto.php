<?php

    class produto{

        public $nome;

        public $preco;

        public $estoque;

        public function __construct($nome, $preco, $estoque){
            $this->nome=$nome;
            $this->preco=$preco;
            $this->estoque=$estoque;
        }

        public function vender($quantidade){
            if ($quantidade<$this->estoque && $quantidade<=$this->estoque){
                $this->estoque=$this->estoque-$quantidade;
            }
            else{
                echo "Quantidade no estoque insuficiente";
        }
        }

        public function reajustarpreco($percentual, $porcent=0){
            $porcent=$this->preco/$percentual;
            $this->preco=$this->preco+$porcent;
        }

        public function exibirinfo(){
            echo "Informações do produto: $this->nome, ". number_format($this->preco, 2, ",", "."), $this->estoque;
        }
    }

    $produto1= new produto("Mouse", 300, 120);
    $produto1->vender(2);
    $produto1->reajustarpreco(10);
    $produto1->exibirinfo();


?>