<?php
    
    class Serie
    {
        public $serieName='La Casa de papel';
        public $seasons=4;

        public function printSerie(){
            echo "Información de la Serie:<br>";
            echo "Nombre de Serie: $this->serieName <br>";
            echo "Cantidad de Temporadas: $this->seasons <br>";
        }

    }