<?php
     $arr=[
        "Bruno"=>7.0,
        "Carla"=>9.0,
        "Victor"=>3.0,
        "Pedro"=>1.0,
        "Bernardo"=>4.0
     ];

     $somanotas=0;
     $totalalunos =count($$arr);

     foreach($$arr as $nome=>$nota){

        $notaformatada=number_format($nota,2,"-","");
        echo "O aluno $nome tirou $notaformatada. <br>";

        $somanotas+=$nota;
     };

     $medianota=$somanotas/$totalalunos;

     $mediaformatada=number_format($medianota,2,"-","")
?>