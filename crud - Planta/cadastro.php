<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Katara</title>
</head>


    <body>
        <div class="container">
            <div class="row">
                <?php
                    include "conexao.php";      
                    $nome_planta = $_POST['nome_planta'];
                    $desc_planta = $_POST['desc_planta'];
                    $data_plantio = $_POST['data_plantio'];

                    $sql = "INSERT INTO `planta`( `nome_planta`, `desc_planta`, `data_plantio`) 
                    VALUES ('$nome_planta', '$desc_planta', '$data_plantio')";

                    if (mysqli_query($conexao,$sql)) {
                        echo "Planta cadastrada com sucesso!";
                    } else
                        echo "Planta não cadastrada!";
                ?>
                 <a href="pesquisa.php" class="btn btn-primary">Voltar ao Inicio</a>
            </div>
        </div>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
            integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
            integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
            crossorigin="anonymous"></script>
    </body>

</html>