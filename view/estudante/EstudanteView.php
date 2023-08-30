<?php
$estudantes = $_REQUEST["estudantes"]; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<header class="container-fluid text-center bg-dark text-white p-3">
    <h2> Semana da Acessibilidade</h2>
</header>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Meu Site</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/<?php echo FOLDER;?>/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/<?php echo FOLDER;?>/?controller=Estudante&acao=listar">Estudantes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/<?php echo FOLDER;?>/?controller=Professor&acao=listar">Professores</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <div class="container-fluid bg-secondary vh-100 pt-4">

    <img class="rounded mx-auto d-block col-4 "
            src="https://www.institutodeengenharia.org.br/site/wp-content/uploads/2019/02/Dia_Pessoa_Deficincia_787-1.jpg" class="img-thumbnail"
            alt="Representação ilustrada de grupo de pessoas e um cachorro, com objetivo de inclusão social">
            <br>
       
    <div class=" d-grid col-2 mx-auto">
        <a href="/aula3/?controller=Estudante&acao=salvar" class="btn btn-success">Cadastrar Estudante</a>
        <br>
        
    </div>
    <br>
        <table class="container table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                </tr>
            </thead>
            <?php foreach ($estudantes as $estudanteAtual) { ?>
                <tr>
                    <td>
                        <?php echo $estudanteAtual["id"]; ?>
                    </td>
                    <td>
                        <?php echo $estudanteAtual["nome"]; ?>
                    </td>
                    <td>
                        <?php echo $estudanteAtual["idade"]; ?>
                    </td>
                </tr>
            <?php } ?>
        </table>

       
    </div>

    <footer class="container-fluid text-center p-5"></footer>

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://guiaderodas.com/wp-content/uploads/2021/07/desenho-universal-arquitetura.png"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <script src="https://guiaderodas.com/wp-content/uploads/2021/07/desenho-universal-arquitetura.png"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous">
    </script>
</body>

</html>