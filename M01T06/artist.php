<?php
    
    class Artist
    {
        public $name='Luis Bonilla';
        public $birthday='06-18';
        public $age=19;
        

        public function printArtist(){
            echo "Información del artista: <br>";
            echo "Nombre: $this->name <br>";
            echo "Fecha de Cumpleaños: $this->birthday <br>";
            echo "Edad: $this->age <br>";
        }

        public function birthdayArtist(){
            echo "<br><br>¡Hoy estoy cumpliendo años!<br>";
            echo "Mi nombre es: $this->name <br>";
            echo "Mi edad es: $this->age <br>";
        }
    }