<?php

    class paciente{
        private $nome;
        private $idade;
        private $peso;
        private $altura;

        public function __construct($nome, $idade, $peso, $altura){
            $this->nome=$nome;
            $this->idade=$idade;
            $this->$peso=$peso;
            $this->$altura=$altura;
        }

        public function calcularimc(){

        }
    }

?>