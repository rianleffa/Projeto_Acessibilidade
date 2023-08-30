<?php

require_once $_SERVER ['DOCUMENT_ROOT'] . '/'. FOLDER . '/database/DataBase.php';

class EstudanteModel 
{
    private string $nome;

    private int $idade;

    private $database;


public function __construct()
{
    $this->database = new DataBase();
}

public function listarModel(): array 
{

    $dadosArray = $this->database->executeSelect("SELECT * FROM estudantes"); 
        
    return $dadosArray;

}
   
public function salvarModel(string $nome, int $idade) 
{
    $sql = "INSERT INTO estudantes (nome, idade) values ('$nome', '$idade')";
    $this->database->insert($sql);

}

}