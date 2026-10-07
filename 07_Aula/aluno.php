<?php

    class aluno{
        public $nome;

        public $nota1;

        public $nota2;

        public $media;

        public function __construct($nome, $nota1,$nota2, $media=0){
            $this->nome=$nome;
            $this->nota1=$nota1;
            $this->nota2=$nota2;
            $this->media=$this->calcularMedia($nota1, $nota2);
        }
        function calcularMedia($nota1, $nota2){
            return ($nota1+$nota2)/2;
        }

    }

    $aluno1= new aluno("Amanda", 3, 5);
    echo "<pre>";
    print_r($aluno1);
    echo "</pre>";
    $aluno2= new aluno("Valentina", 9, 8);
    echo "<pre>";
    print_r($aluno2);
    echo "</pre>";
?>