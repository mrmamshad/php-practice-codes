<?php


class Database
{
    public $connection;
    public function __construct($config)
    {


        $con = "mysql:" . http_build_query($config, '', ';');

        // $con = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};user={$config['user']};charset={$config['charset']}";
        $this->connection = new PDO($con);
    }
    public function query($query)
    {



        $statement = $this->connection->prepare($query);

        $statement->execute();
        return  $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
