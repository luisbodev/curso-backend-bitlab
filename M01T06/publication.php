<?php
    
    class Publication
    {
        public $type;//noticias o reseña
        public $author;
        public $rateAverage=5;
        public $totalComments=10;
        public $totalRates=10;

        function printPublication(){
            echo "Tipo de publicacion: $this->type <br>";
            echo "Autor: $this->author <br>";
            echo "Puntaje: $this->rateAverage <br>";
            echo "Total Comentarios: $this->totalComments <br>";
            echo "Total Puntajes: $this->totalRates <br>";
        }

    }