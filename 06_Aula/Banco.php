<?php
    class conta_bancaria{
        var $titular;
        var $numero;
        var $saldo;
        var $tipo;

        function depositar($adicionar){
            $this->saldo=$this->saldo + $adicionar;
            echo "Foi adicionado $adicionar<br>";
            echo"O saldo agora é $this->saldo<br>";
        }

        function sacar($tirar){
            $this->saldo=$this->saldo - $tirar;
            echo "Foi retirado $tirar<br>";
            echo"O saldo agora é $this->saldo<br>";
        }

        function consultar(){
            echo "O saldo é $this->saldo<br>";
        }
    }

    $conta_banco_1= new conta_bancaria();
    $conta_banco_1-> titular= "Seí lá";
    $conta_banco_1-> numero= 34435343;
    $conta_banco_1-> saldo= 300;
    $conta_banco_1-> tipo= "Seí lá";

    $conta_banco_2= new conta_bancaria();
    $conta_banco_2-> titular= "Seí lá";
    $conta_banco_2-> numero= 34435343;
    $conta_banco_2-> saldo= 30;
    $conta_banco_2-> tipo= "Seí lá";

    $conta_banco_1->depositar(20);
    $conta_banco_1->sacar(25);
    $conta_banco_1->consultar();

    $conta_banco_2->depositar(20);
    $conta_banco_2->sacar(29);
    $conta_banco_2->consultar();
?>