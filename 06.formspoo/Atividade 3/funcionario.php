<?php

    class funcionario {
        private $nome;

        private $cargo;

        private $horas_trabalhadas;

        private $vale_transporte;

        private $salario_base;


        public function __construct($nome, $cargo, $horas_trabalhadas, $vale_transporte){
            $this->nome=$nome;
            $this->cargo=$cargo;
            $this->horas_trabalhadas=$horas_trabalhadas;
            $this->vale_transporte=$vale_transporte;
        }

        public function definirsalariobase(){
            if($this->cargo=="auxiliar"){
                $this->salario_base==2200;
            }

            elseif($this->cargo=="tecnico"){
                $this->salario_base==3520;
            }

            else{
                $this->salario_base==5500;
            }
        }

        public function calcularhorasextras(){
            return ($this->horas_trabalhadas/220)*1.5;
        }



?>