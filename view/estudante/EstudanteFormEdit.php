<?php 
$estudante = $_REQUEST['estudante']; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Estudante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php require_once $_SERVER ['DOCUMENT_ROOT'] . '/'. FOLDER . '/view/navbar.php'; ?>
    <div class="container-fluid bg-success vh-100 pt-4">
        <br>
        <br>
        <form method="POST" action="/<?php echo FOLDER; ?>/?controller=Estudante&acao=editar&id=<?php echo $estudante["id"]; ?>" class="container form form-striped form-bordered ">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $estudante["nome"]; ?>">
            </div>
            <div class="mb-3">
                <label for="idade" class="form-label">Idade</label>
                <input type="number" class="form-control" id="idade" name="idade" value="<?php echo $estudante["idade"]; ?>">
            </div>

            <button type="submit" class="btn btn-dark text-white">Salvar</button>
        </form>
        <br>
        <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous">
    </script>
</body>

</html>