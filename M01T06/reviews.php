<?php
    
    class Review
    {
        public $category;//Categoria pelicula o episodio de una serie
        public $title;
        public $summary;
        
        public function printReview(){
            echo "Titulo: $this->title <br>";
            echo "Resumen: $this->summary <br>";
        }
    }