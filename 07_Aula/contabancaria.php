<?php

    class contabancaria{

        public $titular;

        public $saldo;

        public function __construct($saldo, $titular){
            $this->titular=$titular;
            $this->saldo=$saldo;
        }

        public function depositar($valor){
            $this->saldo=+$valor;
        }

        public function sacar($valor){
            $this->saldo=-$valor;
        }

        public function exibir(){
            echo "titular: $this->titular, saldo:$this->saldo";
        }
    }

    $conta1= new contabancaria("Almir", 300);
    $conta2= new contabancaria("Souzones", 420);


?>