<?php

    class filme{
        private $titulo;

        private $duracao;

        private $assistido;

        public function __construct($titulo, $duracao, $assistido=false){
            $this->titulo=$titulo;
            $this->duracao=$duracao;
            $this->assistido=$assistido;
        }

        public function marcarassistido(){
            $this->assistido=true;
        }

        public function exibirformacoes(){
            echo "$this->titulo, $this->duracao, $this->assistido";
        }

        public function foiassistido(){
            if ($this->assistido=true){
                echo "Você já assistiu";
            }

            else{
                echo "Você ainda não assistiu";
            }
        }
    }

    
?>