<?php

    class turma{
        private $nome;

        private $professor;

        private $qtdalunos;

        private $capacidade;

        public function __construct($nome, $professor, $qtdalunos, $capacidade){
            $this->nome=$nome;
            $this->professor=$professor;
            $this->qtdalunos=$qtdalunos;
            $this->capacidade=$capacidade;

        }

        public function adicionaraluno($alunos){
            $this->qtdalunos=+$alunos;

            if ($this->qtdalunos>$this->capacidade){
                echo "espaço cheio";
            }
        }

        public function removeraluno($alunos){
            $this->qtdalunos=-$alunos;
            if ($this->qtdalunos<0){
                $this->qtdalunos=0;
            }
        }

        public function exibirturma(){
            echo "$this->nome, $this->professor, $this->qtdalunos, $this->capacidade";
        }
    }

    $turma1= new turma("Historia", "Renato", 31, 31);
    $turma1->adicionaraluno(1);
    $turma1->removeraluno(1);
    $turma1->exibirturma();
?>