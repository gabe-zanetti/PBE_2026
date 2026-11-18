<?php

class Aluno {

    private $nome;
    private $peso;
    private $altura;

    public function __construct($nome, $peso, $altura) {
        $this->nome = $nome;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function getNome() {
        return $this->nome;
    }

    public function calcularIMC() {
        return $this->peso / ($this->altura * $this->altura);
    }

    public function classificarIMC() {

        $imc = $this->calcularIMC();

        if ($imc < 18.5) {
            return "Abaixo do peso";
        } 
        elseif ($imc < 25) {
            return "Peso normal";
        } 
        elseif ($imc < 30) {
            return "Sobrepeso";
        } 
        else {
            return "Obesidade";
        }
    }
}

class Matricula {

    private $aluno;
    private $plano;
    private $meses;
    private $modalidades;

    public function __construct($aluno, $plano, $meses, $modalidades) {
        $this->aluno = $aluno;
        $this->plano = $plano;
        $this->meses = $meses;
        $this->modalidades = $modalidades;
    }

    public function getAluno() {
        return $this->aluno;
    }

    public function getPlano() {
        return $this->plano;
    }

    public function getMeses() {
        return $this->meses;
    }

    public function getModalidades() {
        return $this->modalidades;
    }

    public function calcularValorPlano() {

        if ($this->plano == "Básico") {
            return 80;
        }
        elseif ($this->plano == "Plus") {
            return 120;
        }
        elseif ($this->plano == "Premium") {
            return 180;
        }

        return 0;
    }

    public function calcularValorModalidade($modalidade) {

        if ($modalidade == "Natação") {
            return 60;
        }
        elseif ($modalidade == "Funcional") {
            return 40;
        }
        elseif ($modalidade == "Lutas") {
            return 50;
        }

        return 0;
    }

    public function calcularMensalidade() {

        $valor = $this->calcularValorPlano();

        foreach ($this->modalidades as $modalidade) {
            $valor += $this->calcularValorModalidade($modalidade);
        }

        return $valor;
    }

    public function calcularPercentualDesconto() {

        if ($this->meses >= 12) {
            return 20;
        }
        elseif ($this->meses >= 6) {
            return 10;
        }
        else {
            return 0;
        }
    }

    public function calcularSubtotal() {
        return $this->calcularMensalidade() * $this->meses;
    }

    public function calcularDesconto() {
        return $this->calcularSubtotal() *
        ($this->calcularPercentualDesconto() / 100);
    }

    public function calcularTotal() {
        return $this->calcularSubtotal() - $this->calcularDesconto();
    }
}

?>







