<?php 

    class Guiche {
        private $id;
        private $senha_atual;
        private $total_senhas;

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