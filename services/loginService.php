<?php 

class LoginService {
    private $connection;
    private $login;

    public function __construct(Connection $connection, Login $login) 
    {
        $this->connection = $connection->connect();
        $this->login = $login;
    }

    public function testar() {
        $query = 'select * from usuarios';

        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        echo '<pre>';
        print_r($stmt->fetchAll(PDO::FETCH_OBJ));
    }

    public function entrar() {
        $query = 'select 
                    * 
                from 
                    usuarios
                where 
                    user = :user AND password = :password';
        
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':user', $this->login->__get('user'));
        $stmt->bindValue(':password', $this->login->__get('password'));

        $stmt->execute();

        echo '<pre>';
        print_r($stmt->fetchAll(PDO::FETCH_OBJ));
    }
}

?>