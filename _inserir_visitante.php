<?php

include('conexao.php');

$nome_visitante = $_POST['nome_visitante'];
$cpf_visitante = $_POST['cpf_visitante'];
$rg_visitante = $_POST['rg_visitante'];
$empresa_visitante = $_POST['empresa_visitante'];
$telefone_visitante = $_POST['telefone_visitante'];
$obs_visitante = $_POST['obs_visitante'];
$foto_visitante = $_POST['foto_visitante'];


//upload de arquivo

$extensao = strtolower(substr($_FILES['foto_visitante']['name'], -4));
$new_name = md5(time()) . $extensao;
$diretorio = "fotos_visitantes/";

move_uploaded_file($_FILES['foto_visitante']['tmp_name'], $diretorio.$new_name);

$sql = "INSERT INTO `cad_visitante`( `nome_visitante`, `cpf_visitante`, `rg_visitante`, `empresa_visitante`, `telefone_visitante`, `obs_visitante`, `foto_visitante`) VALUES ('$nome_visitante', '$cpf_visitante', '$rg_visitante', '$empresa_visitante', '$telefone_visitante', '$obs_visitante', '$foto_visitante')";

$inserir = mysqli_query($conexao, $sql);

?>

<div class="container">
    <h3>Cadastrado</h3>
    <a href="Voltar" class="btn btn-sm btn-warning">Voltar</a>
    <a href="Consultar" class="btn btn-sm brn-secondary">Consultar</a>
    </div>
<?php