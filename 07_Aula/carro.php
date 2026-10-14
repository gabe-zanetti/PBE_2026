<?php
    class carro {
        private $modelo;
        private $consumo;
        private $tanquelts;

        public function __construct($modelo, $consumo=10, $tanquelts=0){
            $this->modelo=$modelo;
            $this->consumo=$consumo;
            $this->tanquelts=$tanquelts;
        }

        public function reabastecer($litros, $tanquelts){
            if ($litros>0){
                $tanquelts=+$litros;
            }
            else{
                echo "valor invalido"; 
            }
        }

        public function percorer($kms, $consumo, $tanquelts){
            $$consumo=1*$kms;
            if ($litros<$tanquelts){
                $this->tanquelts=-$litros;
            }
            else{
                echo "Quantidade insuficiente";
            }
        }

        public function exibirinfo($modelo, $consumo, $tanquelts){
            echo "Informações do produto: $this->modelo, $this->consumo, $this->tanquelts";
        }
}

    $carro1= new carro("civic", 10, 20);
    $carro1->reabastecer(20, $tanquelts);
    $carro1->percorer(10, $$consumo, $tanquelts);
    $carro1->exibirinfo($modelo, $consumo, $tanquelts);

    $carro1= new carro("ford", 20, 30);
    $carro1->reabastecer(20, $tanquelts);
    $carro1->percorer(10, $$consumo, $tanquelts);
    $carro1->exibirinfo($modelo, $consumo, $tanquelts)
?>