<?php

    class aula{

        var $disciplina;

        var $professor;

        var $duracao;

        var $numero_sala;

        var $bloco;

        function exibirinformacoes($disciplina, $professor, $duracao, $numero_sala, $bloco){

            echo $this->$disciplina;
            echo $this->$professor;
            echo $this->$duracao;
            echo $this->$numero_sala;
            echo $this->$bloco;
        }

        function trocar_professor($professor){

            $this->$professor==$professor;
            echo $this->$professor;
        }

        function alterarlocal ($numero_sala, $bloco){

            $this->$numero_sala==$numero_sala;
            $this->$bloco==$bloco;

            echo $numero_sala;
            echo $bloco;
        }
    }

    $aula1= new aula;
    $aula1-> disciplina="historia";
    $aula1-> professor= "Carlos";
    $aula1-> duracao=30.00;
    $aula1-> numero_sala=2;
    $aula1->$bloco=4;

    $aula2= new aula;
    $aula2-> disciplina="ingles";
    $aula2-> professor= "Clara";
    $aula2-> duracao=60.00;
    $aula2-> numero_sala=9;
    $aula2->$bloco=4;

    $aula1-> exibirinformacoes($disciplina, $professor, $duracao, $numero_sala, $bloco);
    $aula1-> trocar_professor("Carla");
    $aula1-> alterarlocal(7, 8);

    $aula2-> exibirinformacoes($disciplina, $professor, $duracao, $numero_sala, $bloco);
    $aula2-> trocar_professor("Carlinhos");
    $aula2-> alterarlocal(4, 5);
?>
