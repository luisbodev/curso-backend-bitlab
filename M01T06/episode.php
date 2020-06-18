<?php
    
    class Episode
    {
        public $episodeNumber=1;
        public $seasonNumber=2;
        public $serieName;

        public function printEpisode(){
            echo "Información del episodio:<br>";
            echo "Nombre de Serie: $this->serieName <br>";
            echo "Número de serie: $this->seasonNumber <br>";
            echo "Número de episodio: $this->episodeNumber <br>";
        }
    }