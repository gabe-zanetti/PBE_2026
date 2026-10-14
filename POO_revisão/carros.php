<?php
    class carros{
        private $modelo;
        private $velocidade;

        public function __construct($modelo, $velocidade=0){
            $this->modelo=$modelo;
            $this->velocidade=$velocidade;
        }

        public function acelerar($km){
            $this->velocidade=+$km;
        }

        public function frear($km){
            $this->velocidade=-$km;
            if ($this->velocidade<0){
                $this->velocidade=0;
            }
        }

        public function vervelocidade(){
            echo "$this->velocidade";
        }
    }

    $carros1= new carros("civic", 10);
    $carros1-> acelerar(10);
    $carros1->frear(10);
    $carros1->vervelocidade();
?>