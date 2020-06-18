<?php
    
    class Movie
    {
        public $movieName='Toy Story';
        public $yearRealese=2020;

        public function printMovie(){
            echo "Información de la pelicula:<br>";
            echo "Nombre de Pelicula: $this->movieName<br>";
            echo "Año: $this->yearRealese";
        }
    }