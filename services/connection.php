<?php 

class Connection 
{
    private $host = 'localhost';
    private $dbname = 'matara997_plasfran_admin';
    private $user = 'matara997_plasfran_admin';
    private $pass = '@Plasfran14';

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