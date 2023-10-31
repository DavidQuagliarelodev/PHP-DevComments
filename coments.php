<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/style.css">
    <title>DevComments</title>
</head>

<body>
    <?php
    include("db/config.php");
    ?>
    <?php
    $titulo = $_POST["titulo"] ?? "";
    $comentario = $_POST["comentario"] ?? "";
    $nome = $_POST["nome"] ?? "";
    if ($nome && $titulo && $comentario != null) {
        $insertInto = "INSERT INTO comentarios (nome, titulo, comentario) VALUES ('$nome', '$titulo', '$comentario')";
        $insert = mysqli_query($connection, $insertInto) or die("Erro");
    }
    ?>

    <?php
    if (!empty($_GET['id'])) {
        $iD = $_GET['id'];
        $sqlSelect = "SELECT * FROM comentarios where id = $iD";
        $resultSelect = $connection->query($sqlSelect);


        if ($resultSelect->num_rows > 0) {
            $sqlDelete = "DELETE FROM comentarios WHERE id = $iD";
            $resultDelete = $connection->query($sqlDelete);
        }
    }
    ?>
    <header>
        <nav class="row m-0  navbar bg-dark pb-3 row ">
            <div class="col">
                <a class="navbar-brand text-white " href="#">
                    <i class="bi bi-rocket-takeoff-fill">
                        <span class="headerText">Devcomments</span>
                    </i>
                </a>
            </div>
            <div class="col text-end ">
                <a href="index.php"><button class=" btn btn-danger ">Sair</button></a>
            </div>
        </nav>
    </header>
    <main class=" container ">
        <div class="container col-lg-6 mt-3 ">
            <p class=" display-5 text-center ">
                <i class="bi bi-chat-text-fill text-primary "></i>
                Comente
            </p>
            <div class="row container align-items-center mt-5 ">
                <div class="col-md-6  order-1 mb-5 ">
                    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post" class=" ">
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="bi bi-person-fill"></i>
                            </span>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" value="<?= $nome ?>" name="nome">
                                <label for="floatingInputGroup1">Nome</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="bi bi-rocket-takeoff-fill"></i>
                            </span>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" value="<?= $titulo ?>" name="titulo">
                                <label for="floatingInputGroup1">Titulo</label>
                            </div>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" value="<?= $comentario ?>" name="comentario"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                        <button class="btn btn-dark mt-3" onclick="reload()">Comentar</button>
                    </form>
                </div>
                <div class="col-md-6 order-2 mb-5 ">
                    <img src="img/undraw_mobile_content_xvgr.svg" alt="login-image" class="img-fluid" />
                </div>
            </div>

        </div>
        <div class="container col-lg-8 mt-4">
            <h2 class="text-center">
                <i class="bi bi-check-circle-fill text-primary "></i>
                Comentarios
            </h2>
            <div class="mt-4 mb-5" id="resultado ">
                <?php
                $selectAll = "SELECT * FROM comentarios";
                $result = mysqli_query($connection, $selectAll) or die("Erro");

                while ($register = mysqli_fetch_array($result)) {
                    $id = $register['id'];
                    $nome = $register['nome'];
                    $titulo = $register['titulo'];
                    $comentario = $register['comentario'];
                    echo "<div class=' box_comment'>
                        <p><b>$nome</b></p>
                       <p><b>Titulo: $titulo</b></p>
                        <p>$comentario</p>
                        <a href='coments.php?id=$id' class='btn btn-danger '>Deletar</a>
                        </div>";
                };
                mysqli_close($connection);
                ?>
            </div>
        </div>
    </main>
    <footer class=" f text-center ">
        <i class="bi bi-rocket-takeoff-fill"></i>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="assets/js/index.js"></script>
</html>