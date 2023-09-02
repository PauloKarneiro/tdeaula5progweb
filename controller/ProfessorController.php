<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/model/ProfessorModel.php';

Class ProfessorController
{
     const CONTROLLER_FOLDER = '/professor';

     public function listar() { 
        $professorModel = new ProfessorModel();
        $professores = $professorModel->listarModel();

        $_REQUEST['professores'] = $professores;

        require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self:: CONTROLLER_FOLDER . '/ProfessorView.php';
   }

   public function salvar()
   {
     if ($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self:: CONTROLLER_FOLDER . '/ProfessorForm.php';
     } elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
          $name = $_POST['nome'];
          $idade = $_POST['idade'];
          $professorModel= new ProfessorModel();
          $professorModel-> salvarModel($name, $idade);

          header('Location: http://localhost/' . FOLDER . '/?controller=Professor&acao=listar');
          exit();
          }    
     }
}