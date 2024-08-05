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
}
