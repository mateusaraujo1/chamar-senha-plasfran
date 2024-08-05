<?php 

    class Ficha {
        private $id;
        private $id_guiche_FK;
        private $senha;

        public function __construct()
        {
            $this->senha = 0;
            $this->id_guiche_FK = 0;
            $this->id = 0;
        }

        public function __get($atributo) 
        {
            return $this->$atributo;
        }

        public function __set($atributo, $value)
        {
            $this->$atributo = $value;
        }

        // usa valor do guichê e da senha para setar tudo
        // id é a concatenação de guichê e senha
        public function setAll($guiche, $senha) 
        {
            $this->senha = $senha;
            $this->id_guiche_FK = $guiche;

            $this->id = ((string)$this->id_guiche_FK) . ((string)$this->senha);

            $this->id = (int)$this->id;
        }
    }

?>