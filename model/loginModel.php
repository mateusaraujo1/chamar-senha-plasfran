<?php 

    class Login {
        private $id;
        private $name;
        private $user;
        private $password;
        private $type;

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