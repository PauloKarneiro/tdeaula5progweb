<?php 

require_once $_SERVER ['DOCUMENT_ROOT'] . '/' .FOLDER. '/database/Database.php';

class EstudanteModel {
    private int $idade;

    private string $name;
    
    PRIVATE $database;

    //Getters and setters

    public function __construct()
    {
        $this->database = new Database();
    }


    public function salvar(string $name, int $idade){
    
        $sql = "INSERT INTO estudantes (nome, idade ) values ('$name', '$idade')";

    }
    
    public function listarModel (): array 
    {
        $dadosArray = $this->database->executeSelect("SELECT * FROM estudantes");
        return  $dadosArray;
    }

    public function salvarModel(string $name, int $idade)
    {
        $sql = "INSERT INTO estudantes (nome, idade) valeus ('$name', '$idade')";
        $this->database->insert($sql);
    }

}