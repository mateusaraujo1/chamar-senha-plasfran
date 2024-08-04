<?php 

class Connection 
{
    private $host = 'localhost';
    private $dbname = 'sistema_fichas';
    private $user = 'root';
    private $pass = '';

    public function connect()
    {
        try 
        {
            $conection = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );

            return $conection;
        }
        catch (PDOException $erro)
        {
            echo '<p> Erro na conexão com o banco de dados. Detalhes do erro:' . $erro->getMessage() . '</p>';
        }
    }
}

?>