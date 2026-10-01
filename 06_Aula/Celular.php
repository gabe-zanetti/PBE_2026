<?php 
    class celular{
        var $marca;
        var $modelo;
        var $cor;
        var $bateria;
        var $ligado;

        function ligar(){
            $this->ligado=true;
            echo" O celular esta ligado<br>";
        }

        function desligar(){
            $this->ligado=false;
            echo" O celular esta desligado<br>";
        }

        function user($comsumo){
            $this->bateria= $this->bateria-$comsumo;
            if ($this->bateria<0){
                $this->bateria=0;
            }
            echo "A bateria foi gastada em $comsumo<br>";
            echo "Agora a bateria é $this->bateria<br>";
        }

        function carregar($carga){
            $this->bateria= $this->bateria+$carga;
            if ($this->bateria>100){
                $this->bateria=100; 
            }
            echo "A bateria foi recarregada em $carga<br>";
            echo "Agora a bateria é $this->bateria<br>";
        }
    };

    $celular_1= new celular();
    $celular_1-> marca= "Iphone";
    $celular_1-> modelo= "11";
    $celular_1-> cor= "preto";
    $celular_1-> bateria= 50;
    $celular_1-> ligado= false;

    $celular_2= new celular();
    $celular_2-> marca= "Sangsung";
    $celular_2-> modelo= "galaxy";
    $celular_2-> cor= "branco";
    $celular_2-> bateria= 70;
    $celular_2-> ligado= false;

    $celular_1->ligar();
    $celular_1->desligar();
    $celular_1->user(10);
    $celular_1->carregar(20);

    $celular_2->ligar();
    $celular_2->desligar();
    $celular_2->user(4);
    $celular_2->carregar(1);

?>