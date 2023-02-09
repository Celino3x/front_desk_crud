<?php
    $mysqli = mysqli_init();
    $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
    $mysqli->real_connect($_ENV["us-east.connect.psdb.cloud"], $_ENV["4mon01d2c7rdz5cb1pbr"], $_ENV["pscale_pw_nJMs6RmrRaSToA3dNHOKilZQtBEXQyIIbxi63XGAtqE"], $_ENV["front_desk"]);
    $mysqli->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Front Desk | CRUD</title>
</head>
<body>

<?php

include('conexao.php');

$nome_visitante = $_POST['nome_visitante'];
$cpf_visitante = $_POST['cpf_visitante'];
$rg_visitante = $_POST['rg_visitante'];
$empresa_visitante = $_POST['empresa_visitante'];
$telefone_visitante = $_POST['telefone_visitante'];
$obs_visitante = $_POST['obs_visitante'];
//$foto_visitante = $_POST['foto_visitante'];


//upload de arquivo

$extensao = strtolower(substr($_FILES['foto_visitante']['name'], -4));
$new_name = md5(time()) . $extensao;
$diretorio = "fotos_visitantes/";

move_uploaded_file($_FILES['foto_visitante']['tmp_name'], $diretorio.$new_name);

$sql = "INSERT INTO `cad_visitante`( `nome_visitante`, `cpf_visitante`, `rg_visitante`, `empresa_visitante`, `telefone_visitante`, `obs_visitante`, `foto_visitante`) VALUES ('$nome_visitante', '$cpf_visitante', '$rg_visitante', '$empresa_visitante', '$telefone_visitante', '$obs_visitante', '$new_name')";

$inserir = mysqli_query($conexao, $sql);

?>

<div class="container">
    <h3>Cadastrado</h3>
    <a href="Voltar" class="btn btn-sm btn-warning">Voltar</a>
    <a href="_consultar_visitante.php" class="btn btn-sm brn-secondary">Consultar</a>
    </div>
<?php ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>