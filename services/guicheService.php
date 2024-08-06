<?php

class GuicheService
{
    private $connection;
    private $guiche;

    public function __construct(Connection $connection, Guiche $guiche)
    {
        $this->connection = $connection->connect();
        $this->guiche = $guiche;
    }

    public function testar()
    {
        $query = 'select * from guiches';

        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        echo '<pre>';
        print_r($stmt->fetchAll(PDO::FETCH_OBJ));
        echo '</pre>';
    }

    public function getGuiche()
    {
        $query = 'select 
                    * 
                from 
                    guiches
                where
                    id = :id';

        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':id', $this->guiche->__get('id'));

        $stmt->execute();

        $guiche = $stmt->fetch(PDO::FETCH_OBJ);

        return $guiche;
    }

    public function setSenhaAtual($guiche) {
        $query = 'update
                    guiches
                set
                    senha_atual = :senha_atual
                where 
                    id = :guiche';

        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':senha_atual', $guiche->senha_atual);
        $stmt->bindValue(':guiche', $guiche->id);

        $stmt->execute();
    }
}
