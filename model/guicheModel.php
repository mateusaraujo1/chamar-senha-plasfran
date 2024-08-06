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

        // public function instanciar($OBJ) 
        // {
        //     $this->id = $OBJ->id;
        //     $this->senha_atual = $OBJ->senha_atual;
        //     $this->total_senhas = $OBJ->total_senhas;
        //     $this->id_usuario_guiche_FK = $OBJ->id_usuario_guiche_FK;
        
        // return $this;
        // }
    }

?>