<?php 

class ClienteService {
    private $connection;
    private $ficha;

    public function __construct(Connection $connection, Ficha $ficha) 
    {
        $this->connection = $connection->connect();
        $this->ficha = $ficha;
    }

    public function testar() {
        $query = 'select * from fichas';

        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        echo '<pre>';
        print_r($stmt->fetchAll(PDO::FETCH_OBJ));
    }
}

?>