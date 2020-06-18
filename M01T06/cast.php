<?php
    
    class Cast
    {
        public $actor='Johny Depp';
        public $director='Carlos Castillo';
        public $screenwriters='Manuel Tobar';

        public function printCast(){
            echo "<br>Elenco: <br>";
            echo "Actor: $this->actor <br>";
            echo "Director: $this->director <br>";
            echo "Guionista: $this->screenwriters<br>";
        }
    }