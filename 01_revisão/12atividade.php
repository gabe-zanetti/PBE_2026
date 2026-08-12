<?PHP
    $arr=[4,8,5,90,7,54,23,4];
    $contador=0;
    $soma=0;
    $media=0;

    foreach ($arr as $idade){
        if ($idade>=18){
            $contador=$contador+1;
        }
        $soma+=$idade;
    }

    $media=$soma/8;
    echo "A quantidade de maiores de idades são $contador e a media é $media"

?>