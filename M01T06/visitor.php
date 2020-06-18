<?php
    
    class Visitor
    {
        public $name;
        public $email;
        public $comment;
        public $rate;
        public $status='active';

        public function signIn($name,$email){
            $this->name=$name;
            $this->email=$email;
            echo "Registro Realizado Exitosamente";
        }

        public function comment($message){
            $this->comment=$message;
            echo "Comentario Realizado Exitosamente";
        }
        public function rate($rate){
            $this->rate=$rate;
            echo "Calificación realizada Exitosamente";
        }
    }