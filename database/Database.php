<?php

class DataBase
{

    private string $servername;
    private string $username;
    private string $password;
    private string $dbname;

    private mysqli $connection;

    public function __construct(){
        $this->servername = "db"; //localhost:3306
        $this->username = "root"; //localhost:3306
        $this->password = "1q2w3e4r5t"; //localhos:3306
        $this->dbname = "pw_exemple"; //localhos:3306
        
    }

    public function openConnection()
    {
        $this->connection = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->dbname
        );
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function closeConnection()
    {
        $this->connection->close();
    }

    public function executeSelect(string $sql): array {

        $this->openConnection();
        $result = $this->connection->query($sql);

        $arrayResults = [];
        while($row = $result->fetch_assoc()){
            array_push($arrayResults, $row);
        }

        $this->connection->close();
        return $arrayResults;
    }

    public function insert(string $sql)
     {
        $this->openConnection();
        $result = $this->connection->query($sql);
        $this->closeConnection();
    }
    
}