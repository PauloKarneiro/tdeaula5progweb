<?php 

require_once $_SERVER ['DOCUMENT_ROOT'] . '/' .FOLDER. '/database/Database.php';

class ProfessorModel {
    private int $idade;

    private string $name;
    
    PRIVATE $database;

    //Getters and setters

    public function __construct()
    {
        $this->database = new Database();
    }

   
    
    public function listarModel (): array 
    {
        $dadosArray = $this->database->executeSelect("SELECT * FROM professores");
        return  $dadosArray;
    }

    public function salvarModel(string $name, int $idade)
    {
        $sql = "INSERT INTO professores (nome, idade) values ('$name', '$idade')";
        $this->database->insert($sql);
    }

}