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
    <title>Consultar | Visitante</title>
</head>
<body>
    <section class="container tbVisit">

    <h3>Visitantes | Front Desk</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>RG</th>
                    <th>Empresa</th>
                    <th>Telefone</th>
                    <th>Observações</th>
                </tr>
            </thead>
            <?php
                include('conexao.php');
                $sql = "SELECT * FROM `cad_visitante`";
                $buscar = mysqli_query($conexao, $sql);

                while($array = mysqli_fetch_array($buscar)){
                    $id_visitante = $array['id_visitante'];
                    $nome_visitante = $array['nome_visitante'];
                    $cpf_visitante = $array['cpf_visitante'];
                    $rg_visitante = $array['rg_visitante'];
                    $empresa_visitante = $array['empresa_visitante'];
                    $telefone_visitante = $array['telefone_visitante'];
                    $obs_visitante = $array['obs_visitante'];
                    $foto_visitante = $array['foto_visitante'];
            ?>
            <tbody>
                <tr>
                    <td><img class="foto_visitante" src='fotos_visitantes\<?php echo $foto_visitante ?>' alt=""></td>
                    <td><?php echo $id_visitante ?></td>
                    <td><?php echo $nome_visitante ?></td>
                    <td><?php echo $cpf_visitante ?></td>
                    <td><?php echo $rg_visitante ?></td>
                    <td><?php echo $empresa_visitante ?></td>
                    <td><?php echo $telefone_visitante ?></td>
                    <td><?php echo $obs_visitante ?></td>

                    <td>
                        <div class="row">
                            <a href="_editar_visitante.php" class="btn btn-warning brn-sm">Editar</a>
                        </div>
                    </td>
                </tr>
            </tbody>
            <?php
                }
                ?>
        </table>
    </section>
</body>
</html>