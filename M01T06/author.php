<?php
    
    class Author
    {
        public $name='Juan Perez';
        public $age;
        public $visitor=null;

        public function bannerAcount(){
            $this->visitor->status='banned';
            echo "¡Cuenta desactivada!";
        }
    }