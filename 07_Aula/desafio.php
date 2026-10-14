<?php

    class pedido{
        private $cliente;
        private $valoritens;

        public function __construct($cliente, $valoritens=0){
            $this->cliente=$cliente;
            $this->valoritens=$valoritens;
        }

        public function adicionaritem($valor){
            $this->valoritens=+$valor;
        }

        public function gettotal(){
            return $this->valoritens;
        }

        public function exibirpedido(){
            echo "cliente: $this->cliente";
            echo "valor total: $this->valoritens";
        }


}

    class notafiscal {
        private $totalpedido;
        private $imposto;
        private $totalpagar;

        public function __construct($totalpedido, $imposto=0, $totalpagar){
            $this->totalpedido=$totalpedido;
            $this->imposto=$imposto;
            $this->totalpagar=$totalpagar;
        }

        public function calculartotal($imposto){
            $this->totalpagar=$this->totalpedido*($this->totalpedido/$imposto);
            $imposto=$this->totalpagar;
            $this->totalpedido=+$imposto;

        }
        public function exibirtotal(){
            echo "$this->totalpedido, $this->imposto, $this->totalpagar";
        }
    }

    $pedido1= new pedido(Ana, 10);
    $pedido1->adicionaritem(300);
    $pedido1->gettotal();
    $pedido1->exibirpedido();

    $notafiscal1= new notafiscal($pedido->getototal(), 8);
    $notafical1->calculartotal();
    $notafiscal1->exibirtotal();