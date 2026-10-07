<?php

    class livro{

        public $titulo;

        public $autor;

        public $paginas;

        public $ano_publicacao;

        public function __construct($titulo, $autor, $paginas, $ano_publicacao="Desconhecido"){
            $this->titulo=$titulo;
            $this->autor=$autor;
            $this->paginas=$paginas;
            $this->ano_publicacao= $ano_publicacao;
        }

        function exibirdetalhes(){
            echo "titulo: $this->titulo, Autor: $this->autor, paginas: $this->paginas, publicação: $this->ano_publicacao ";
        }
    }

    $livro1= new livro("Dom Casmurro","Machado de Assis", 256, 1899);
    $livro2= new livro("The metamorphosis of prime intellect","Roger Williams", 134, 2008)

?>