<?php


class Database
{
    public $connection;
    public function __construct()
    {
        $con = "mysql:host=localhost;port=3306;dbname=@r3dgaara;user=root;charset=utf8mb4";
        $this->connection = new PDO($con);
    }
    public function query($query)
    {



        $statement = $this->connection->prepare($query);

        $statement->execute();
        return  $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
