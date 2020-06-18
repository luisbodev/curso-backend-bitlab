<?php
    
    class News
    {
        public $title="New movie it is going to realese";
        public $body="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, hic quaerat. Officia explicabo aliquam unde labore";
        public $category;
        
        public function printNews(){
            echo "Titulo: $this->title <br>";
            echo "Artículo: <br>$this->body <br>";
        }
    }