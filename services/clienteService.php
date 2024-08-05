<?php

class ClienteService
{
    private $connection;
    private $ficha;

    public function __construct(Connection $connection, Ficha $ficha)
    {
        $this->connection = $connection->connect();
        $this->ficha = $ficha;
    }

    public function testar()
    {
        $query = 'select * from fichas';

        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        echo '<pre>';
        print_r($stmt->fetchAll(PDO::FETCH_OBJ));
    }

    public function senhaAtual($guiche)
    {
        $query = 'select 
                    total_senhas
                from 
                    guiches
                where 
                    id = :guiche';

        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':guiche', $guiche);

        $stmt->execute();

        $guiche = $stmt->fetch(PDO::FETCH_OBJ);

        $total_senhas = $guiche->total_senhas;

        return $total_senhas;
    }


    // ao clicar pra imprimir senha no front-end, soma-se total_senhas + 1
    public function imprimirSenha($guiche)
    {
        $query = 'select 
                    total_senhas
                from 
                    guiches
                where 
                    id = :guiche';

        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':guiche', $guiche);

        $stmt->execute();

        $guicheOBJ = $stmt->fetch(PDO::FETCH_OBJ);

        $total_senhas = $guicheOBJ->total_senhas;

        $query = 'update
                    guiches
                set
                    total_senhas = :total_senhas
                where 
                    id = :guiche';

        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':total_senhas', $total_senhas+1);
        $stmt->bindValue(':guiche', $guiche);

        $stmt->execute();
    }
}
