<?php 

    class Guiche {
        private $id;
        private $senha_atual;
        private $total_senhas;
        private $id_usuario_guiche_FK;

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