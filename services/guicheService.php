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

    public function testar() {
        $query = 'select * from guiches';

        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        echo '<pre>';
        print_r($stmt->fetchAll(PDO::FETCH_OBJ));
        echo '</pre>';
    }
}
