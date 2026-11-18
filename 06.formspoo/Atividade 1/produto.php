<?php
    class produto {
        private $nome;
        
        private $quantidade;

        private $preco;

        public function __construct($nome, $quantidade, $preco){
            $this->nome=$nome;
            $this->quantidade=$quantidade;
            $this->preco=$preco;
        }

        public function getnome(){
            return $this->nome;
        }

        public function getquantidade(){
            return $this->quantidade;
        }

        public function getpreco(){
            return $this->preco;
        }

        public function calculartotal(){
            return $this->preco * $this->quantidade;
        }

        public function calculardesconto(){
            if($this->quantidade>=10){
                return $this->calculartotal()*0.10;
            }
            else{
                return 0;
            }
        }
        public function calculartotaldesconto(){
            return $this->total()+$this->calculardesconto();
        }

        public function verificarestoque(){
            if($this->quantidade<5){
                return "Estoque baixo";
            }
            else{
                return "Estoque normal";
            }
        }
    }

?>