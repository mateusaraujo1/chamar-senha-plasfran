<?php 

    class Ficha {
        private $id;
        private $guiche;
        private $senha;

        public function __get($atributo) 
        {
            return $this->$atributo;
        }

        public function __set($atributo, $value)
        {
            $this->$atributo = $value;
        }
    }

?>