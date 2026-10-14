<?php

    class aluno{
        private $nome;
        private $nota;

        public function __construct($nome, $nota=0){
            $this->nome=$nome;
            $this->nota=$nota;
        }

        public function getstatus(){
            if ($this->nota >=6){
                echo "Aprovado";
            }

            else{
                echo"Reprovado";
            }
        }

    }

    $aluno1= new aluno("Clara", 10);
    $aluno1->getstatus();
    echo "<pre>";
    print_r($aluno1);
    echo "</pre>";
    $aluno2= new aluno("Carla", 3);
    echo "<pre>";
    $aluno1->getstatus();
    echo "</pre>";
    print_r($aluno2);
?>