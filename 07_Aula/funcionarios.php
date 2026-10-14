<?php

    class funcionarios{

        private $nome;

        private $salario;

        public function __construct($nome, $salario =1000){
        
            $this->nome=$nome;
            $this->salario=$salario;
        }

        public function aumentarsalario ($percentual, $porcent=0){

            if ($percentual>0 && $percentual<=10){

                $porcent==$this->salario/$percentual;

                $this->salario=$this->salario+$porcent;
         }

            else{
            echo "Valor invalido, o porcentual de aumento é de 0 a 10";

        }

    }

        public function exibirsalario(){
            echo "Nome do funcionario: $this->nome, salario: $this->salario ";
        }
    }
    
    $funcionario= new funcionarios("Laura", 200);
    $funcionario->aumentarsalario(10);
    $funcionario->exibirsalario();

?>