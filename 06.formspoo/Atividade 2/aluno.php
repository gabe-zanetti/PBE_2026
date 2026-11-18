<?php

    class aluno {
        private $nome;

        private $turma;

        private $nota1;

        private $nota2;
        
        private $nota3;

        private $faltas;

        public function __construct($nome, $turma, $nota1, $nota2, $nota3, $faltas){
            $this->nome=$nome;
            $this->turma=$turma;
            $this->nota1=$nota1;
            $this->nota2=$nota2;
            $this->nota3=$nota3;
            $this->faltas=$faltas;
        }

        public function getnome(){
            return $this->nome;
        }

        public function getturma(){
            return $this->turma;
        }

        public function getnota1(){
            return $this->nota1;
        }

        public function getnota2(){
            return $this->nota2;
        }

        public function getnota3(){
            return $this->nota3;
        }

        public function getfaltas(){
            return $this->faltas;
        }

        public function calcularmedia(){
            return ($this->nota1+$this->nota2+$this->nota3)/3;
        }

        public function calcularfrequencia(){
            return (80-$this->faltas)/80*100;
        }
    }
?>