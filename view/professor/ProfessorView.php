<?php $professores = $_REQUEST ['professores']; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Professores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Meu site</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/<?php echo FOLDER; ?>/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=listar">Estudantes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Professor&acao=listar">Professores</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

    <div class="container">
        <br>
        <div class="row text-center">
            <h2>Semana da Acessibilidade</h2>
        </div>

        <div class="text-center">
            <img class="rounded" src="https://diariodainclusaosocialdotcom.files.wordpress.com/2017/11/acessibilidade.jpg?w=660&h=312&crop=1" alt="peças de quebra cabeça com imagens que simboliza os tipos de acessibilidade.">
        </div>
            <br>
            <a href="/aula4/?controller=Professor&acao=salvar" class="btn btn-seccess">Cadastrar Professor</a>
            <br>
            <br>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Idade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($professores as $ProfessorAtual) { ?>
                        <tr>
                            <td><?php echo $ProfessorAtual["id"]; ?></td>
                            <td><?php echo $ProfessorAtual["nome"]; ?></td>
                            <td><?php echo $ProfessorAtual["idade"]; ?></td>
                        </tr>    
                    <?php } ?>  
                </tbody>
            </table>
    </div>

</body>
</html>
