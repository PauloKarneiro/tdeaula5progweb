<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/model/EstudanteModel.php';

Class EstudanteController{

     const CONTROLLER_FOLDER = '/estudante';

     public function listar() { 
        $estudanteModel = new EstudanteModel();
        $listaEstudantes = $estudanteModel->listarModel();
        $_REQUEST['estudantes'] = $listaEstudantes;

        require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/EstudanteView.php'; 
     }   

   public function salvar()
   {
     if ($_SERVER['REQUEST_METHOD'] == 'GET'){
          require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/EstudanteForm.php'; 
     } elseif ($_SERVER['REQUEST_METHOD'] == "POST") {
          $name = $_POST['nome'];
          $idade = $_POST['idade'];
          $estudanteModel= new EstudanteModel();
          $estudanteModel-> salvarModel($name, $idade);

          header('Location: http://localhost/' . FOLDER . '/?controller=Estudante&acao=listar');
          exit();
      }    
     }
}