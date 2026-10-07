<?php

    class pedido {

        var $numero;

        var $cliente;

        var $valor;

        var $status;

        function adicionaritem($valor){
            $this->$valor=+$valor;
            echo $this->$valor;
        }

        function cancelar(){
            $this->status=="cancelado";
            echo $this->status;
        }

        function finalizar(){
            $this->status=="finalizado";
            echo $this->status;
        }

        function exibirresumo(){
            echo $this->numero;
            echo $this->cliente;
            echo $this->valor;
            echo $this->status;
        }

    }

    $pedido1 = new pedido();
    $pedido1-> numero=4442;
    $pedido1-> cliente= "sei lá";
    $pedido1->valor= 100;
    $pedido1->status="aberto";

    $pedido2 = new pedido();
    $pedido2-> numero=432;
    $pedido2-> cliente= "sei lá";
    $pedido2->valor= 160;
    $pedido2->status="aberto";

    $pedido1->adicionaritem(34);
    $pedido1->cancelar();
    $pedido1->finalizar();
    $pedido1->exibirresumo();

    $pedido2->adicionaritem(30);
    $pedido2->cancelar();
    $pedido2->finalizar();
    $pedido2->exibirresumo();
